<?php
namespace App\Http\Controllers\CMS;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as Pro;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Helpers\Cmstranslate;
// model
use App\Models\CmsModels\ServicesModelCMS;

class ServicesCMS extends Pro
{

    public function __construct()
    {
       // $this->middleware('auth');
    }

function index(){
	 //return $this->allsliers();
}

// add new page
 public function newService()
 {

        return view('admin.service.newservice');

 }

 // save new page
 public function saveService(Request $request)
 {
        $messages = [
            'title.unique' => Cmstranslate::cmslang('is_indb'),
        ];

        $validator = Validator::make($request->all(), [
                    'title' => 'required|unique:services|max:255',
        ],$messages);
        if ($validator->fails()) {
             return back()->withErrors($validator->errors());
        }
      $slug = str_replace(' ', '-', $request->url);
      $url  =  urlencode($slug);
      // uploads file
      if($request->hasFile('photo')) {
         $file = $request->file('photo');
         $img_name = 'service-'.time().uniqid().'.'.$file->getClientOriginalExtension();
         $image['filePath'] = $img_name;
         $file->move('uploads/service/', $img_name);
      }else { $img_name=NULL; }

      if($request->hasFile('icons')) {
         $file = $request->file('icons');
         $icons = 'service-'.time().uniqid().'.'.$file->getClientOriginalExtension();
         $image['filePath'] = $icons;
         $file->move('uploads/service/', $icons);
      }else { $icons=NULL; }
       // save data into db
       $add_data = new ServicesModelCMS();
       $add_data->langkey  = $request->langkey;
       $add_data->url      = $url ;
       $add_data->title    = $request->title;
       $add_data->photo    = $img_name;
       $add_data->icons    = $icons;
       $add_data->stuts    = $request->stuts;
       $add_data->content  = $request->content;
       $add_data->meat_description = $request->meat_description;
       $add_data->meat_keywords    = $request->meat_keywords;
       $add_data->save();
       if ($add_data) {
           return back()->with('addsuss','suss');
       }
   }

 // view all Pages
 public function allServices()
 {
   $sections = ServicesModelCMS::all();
   $view_data = array('page_title' => Cmstranslate::cmslang('allservices'), 'sections'=>$sections );
   return view('admin.service.allservice',$view_data);
 }

 // change Service stuts active dicactive
 public function changeServicestuts($page_id,$stuts)
 {
      $data = ServicesModelCMS::findOrFail($page_id);
      $data->stuts = $stuts;
      $data->save();
      return back();
 }

   // edit Service
   public function editService($page_id)
   {
            $row = ServicesModelCMS::find($page_id);
            $view_data = array('page_title' => Cmstranslate::cmslang('editservice'),'row'=>$row );
            return view('admin.service.editservice',$view_data);
   }

 // update Service
 public function updateService(Request $request,$page_id)
 {

    $slug = str_replace(' ', '-', $request->url);
    $url  =  urlencode($slug);

    $up_data = ServicesModelCMS::find($page_id);
    if($request->hasFile('photo')) {
       if($up_data->photo != NULL){ if(file_exists('uploads/service/'.$up_data->photo)){ unlink('uploads/service/'.$up_data->photo); } }
         $file = $request->file('photo');
         $img_name ='service-'.time().uniqid().'.'.$file->getClientOriginalExtension();
         $file->move('uploads/service/', $img_name);
    }else { $img_name   = $up_data->photo; }

    if($request->hasFile('icons')) {
         $file = $request->file('icons');
         $icons = 'service-'.time().uniqid().'.'.$file->getClientOriginalExtension();
         $image['filePath'] = $icons;
         $file->move('uploads/service/', $icons);
      }else { $icons=NULL; }

           $up_data->title   = $request->title;
           $up_data->url     = $url ;
           $up_data->stuts   = $request->stuts;
           $up_data->photo   = $img_name;
           $up_data->icons   = $icons;
           $up_data->content          = $request->content;
           $up_data->meat_description = $request->meat_description;
           $up_data->meat_keywords    = $request->meat_keywords;
           $up_data->save();
         if ($up_data) {
             return back()->with('is_edit','suss');
            }
 }

 // delete Service
 public function deleteService($page_id)
 {
      $data = ServicesModelCMS::findOrFail($page_id);
      if($data->photo != NULL){ if(file_exists('uploads/service/'.$data->photo)){ unlink('uploads/service/'.$data->photo); } }
      $data->delete();
      return back()->with('is_delete','suss');
 }




public function sendMail()

   {

        $name =   $_POST['name'];
        $phone =   $_POST['phone'];
        $mesg =   $_POST['message'];


       $headers = "From: " .$name."\r\n" .

        $to = "mohamedahussien7@gmail.com";
        $subject = "contact form message ";
        //$txt = "Hello world!";
        //$headers = "From: webmaster@example.com" . "\r\n" .
        //"CC: somebodyelse@example.com";

        mail($to,$subject,$mesg,$name,$phone,$headers);

   }

   // get one service

  public function getService($id){

    if($id !='')
    {

      $service = ServicesModelCMS::find($id);
////return  $service;
      if( $service)
      {
        return view('interface.service', compact('service'));
      }
    }
      return Redirect::back();
  }













}// end of main
