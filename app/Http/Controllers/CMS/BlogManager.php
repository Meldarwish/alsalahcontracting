<?php
namespace App\Http\Controllers\CMS;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as Pro; 
use Illuminate\Http\Request; 
use App\Http\Requests;
// model 
use App\Models\CmsModels\BlogSections; 


class BlogManager extends Pro
{
 
function index(){
	 //return $this->allsliers();
} 




/*===============================================================
========================  Start blog sections here ==============
===============================================================*/

// add new blog section 
 public function newsection()
 {
        $view_data = array('page_title' => 'add new blog section', );      
        return view('admin.blog.sections.addnewscetion',$view_data);

 }


// add new blog section 
 public function savesection(Request $request)
 {


 }


// view all blog sections 
 public function allsections()
 {


 }


// change blog section stuts active dicactive 
 public function sectionstuts()
 {


 }

// edit  blog section 
 public function editsection()
 {


 }


// update blog section 
 public function updatesection()
 {


 }


// delete blog section 
 public function deletesection()
 {


 }






























/*

public function addnewliers()
{
   $view_data = array('page_title' => 'add new blog sections', ); 		 
   return view('admin.blog.sections',$view_data);
}


//save sliders 
public function savesliers(Request $request)
{  
 
 $rules = array(
        'text_1' => 'Required|Min:10|Max:80',
        'text_2' => 'Required|Min:10|Max:80',
        'email'     => 'Required|title|Unique:slideersm', 
); 
	$data = new Slideersm();
    if($request->hasFile('photo')) { 
       $file = $request->file('photo');
       $img_name = 'slider-'.time().uniqid().'.'.$file->getClientOriginalExtension(); 
       $image['filePath'] = $img_name;
       $file->move('uploads/sliders/', $img_name);        
    }else { $img_name=NULL; }           
       $data->text_1  = $request->input('text_1');   
       $data->text_2  = $request->input('text_2');   
       $data->url     = $request->input('url');   
       $data->stuts      = $request->stuts;         
       $data->photo      = $img_name;             
       $data->save(); 
    if ($data) {
       return back()->with('addsuss','suss');
    }
}

//get all sliders 
public function allsliers()
{ 
	 $sliders = Slideersm::all();  
	 $view_data = array('page_title' => 'all sliders', 'sliders'=>$sliders ); 		 
   return view('admin.sliders.allslides',$view_data); 
}

//edit slider
public function changestuts($slide_id,$stuts)
{  
      $data = Slideersm::findOrFail($slide_id); 
      $data->stuts = $stuts; 
      $data->save();
      return back();    
}

//edit slider
public function editslier($slide_id)
{
   $row = Slideersm::find($slide_id); 
   $view_data  =  array('page_title'=>' Edit Slider (  '.$row->text_1.' )','row'=>$row);
            return  view('admin.sliders.editslide',$view_data); 
}

//update slider
public function updateslier(Request $request, $slide_id)
{
    $data = Slideersm::find($slide_id);       
    if($request->hasFile('photo')) {
       if($data->photo != NULL){ if(file_exists('uploads/sliders/'.$data->photo)){ unlink('uploads/sliders/'.$data->photo); } }            
         $file = $request->file('photo');
         $img_name ='slider-'.time().uniqid().'.'.$file->getClientOriginalExtension(); 
         $file->move('uploads/sliders/', $img_name);
    }else { $img_name   = $data->photo; }
       $data->text_1  = $request->input('text_1');   
       $data->text_2  = $request->input('text_2');   
       $data->url     = $request->input('url');   
       $data->stuts      = $request->stuts;         
       $data->photo      = $img_name;
       $data->save();    
       return back()->with('is_edit','suss');      
}


// delete slier 
public function deleteslier($slide_id)
{
          // $data = Slideersm::findOrFail($slide_id);  
           //if($data->photo != NULL){ if(file_exists('uploads/sliders/'.$data->photo)){ unlink('uploads/sliders/'.$data->photo); } }            
           //$data->delete();     
           return back()->with('is_delete','suss');      
}

 */
 

}// end of main 