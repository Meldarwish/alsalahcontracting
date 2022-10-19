<?php
namespace App\Http\Controllers\CMS;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as Pro;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Helpers\Cmstranslate;
// model
use App\Models\CmsModels\PagesModelCMS;

class PagesCMS extends Pro
{

    public function __construct()
    {
        $this->middleware('auth');
    }

function index(){
	 //return $this->allsliers();
}

// add new page
 public function newPage()
 {

        return view('admin.pages.newpage');

 }

 // save new page
 public function savePage(Request $request)
 {
        $messages = [
            'title.unique' => Cmstranslate::cmslang('is_indb'),
        ];

        $validator = Validator::make($request->all(), [
                    'title' => 'required|unique:pages|max:255',
        ],$messages);
        if ($validator->fails()) {
             return back()->withErrors($validator->errors());
        }
      $slug = str_replace(' ', '-', $request->url);
      $url  =  urlencode($slug);
      if($request->hasFile('photo')) {
         $file = $request->file('photo');
         $img_name = 'page-'.time().uniqid().'.'.$file->getClientOriginalExtension();
         $image['filePath'] = $img_name;
         $file->move('uploads/pages/', $img_name);
      }else { $img_name=NULL; }

       // save data into db
       $add_data = new PagesModelCMS();
       $add_data->langkey  = $request->langkey;
       $add_data->url      = $url ;
       $add_data->title    = $request->title;
       $add_data->photo    = $img_name;

       $add_data->stuts    = $request->stuts;

       $add_data->content  = $request->content;
       $add_data->page_key = $request->page_key;
       $add_data->meat_description = $request->meat_description;
       $add_data->meat_keywords    = $request->meat_keywords;
       $add_data->save();
       if ($add_data) {
           return back()->with('addsuss','suss');
       }
   }

 // view all Pages
 public function allPages()
 {
   $sections = PagesModelCMS::all();
   $view_data = array('page_title' => Cmstranslate::cmslang('allpages'), 'sections'=>$sections );
   return view('admin.pages.allpages',$view_data);
 }

 // change Page stuts active dicactive
 public function changePagetuts($page_id,$stuts)
 {
      $data = PagesModelCMS::findOrFail($page_id);
      $data->stuts = $stuts;
      $data->save();
      return back();
 }

   // edit page
   public function editPage($page_id)
   {
            $row = PagesModelCMS::find($page_id);
            $view_data = array('page_title' => Cmstranslate::cmslang('editpage'),'row'=>$row );
            return view('admin.pages.editpage',$view_data);
   }

 // update page
 public function updatePage(Request $request,$page_id)
 {

    $slug = str_replace(' ', '-', $request->url);
    $url  =  urlencode($slug);

    $up_data = PagesModelCMS::find($page_id);
    if($request->hasFile('photo')) {
       if($up_data->photo != NULL){ if(file_exists('uploads/pages/'.$up_data->photo)){ unlink('uploads/pages/'.$up_data->photo); } }
         $file = $request->file('photo');
         $img_name ='page-'.time().uniqid().'.'.$file->getClientOriginalExtension();
         $file->move('uploads/pages/', $img_name);
    }else { $img_name   = $up_data->photo; }



           $up_data->title   = $request->title;
           $up_data->url     = $url ;
           $up_data->stuts   = $request->stuts;
           $up_data->photo   = $img_name;


           $up_data->content          = $request->content;
           $up_data->meat_description = $request->meat_description;
           $up_data->meat_keywords    = $request->meat_keywords;
           $up_data->save();
         if ($up_data) {
             return back()->with('is_edit','suss');
            }
 }

 // delete blog Postd
 public function deletePage($page_id)
 {
      $data = PagesModelCMS::findOrFail($page_id);
      if($data->photo != NULL){ if(file_exists('uploads/pages/'.$data->photo)){ unlink('uploads/pages/'.$data->photo); } }
      $data->delete();
      return back()->with('is_delete','suss');
 }


















}// end of main
