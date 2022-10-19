<?php
namespace App\Http\Controllers\CMS;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as Pro; 
use Illuminate\Http\Request; 
use App\Http\Requests;
// model 
use App\Models\CmsModels\TourCategory; 
use App\Models\CmsModels\ToursModelCMS; 

class ToursCMS extends Pro
{

    public function __construct()
    {
        $this->middleware('auth');
    } 

function index(){
	 //return $this->allsliers();
} 


/*===============================================================
========================  Start tour categories here ==============
===============================================================*/

// add new tour Category 
 public function newCategory()
 {
        $view_data = array('page_title' => 'add new  Tour Destination or  Package Category', );      
        return view('admin.tours.categories.addnewscetion',$view_data);

 }

 // add new tour Category
 public function saveCategory(Request $request) 
 {
        $messages = [
            'title.unique' => 'The  Tour Package Category title has already exists in database', 
        ];

        $validator = Validator::make($request->all(), [
                    'title' => 'required|unique:tour_category|max:255', 
        ],$messages); 
        if ($validator->fails()) {
             return back()->withErrors($validator->errors());           
        } 
      
      $slug = str_replace(' ', '-', $request->url);  
      $url  =  urlencode($slug);
      if($request->hasFile('photo')) { 
         $file = $request->file('photo');
         $img_name = 'tourcategory-'.time().uniqid().'.'.$file->getClientOriginalExtension(); 
         $image['filePath'] = $img_name;
         $file->move('uploads/tours/category/', $img_name);        
      }else { $img_name=NULL; }   
     // save data into db    
       $add_data = new TourCategory();   
       $add_data->title   = $request->title;   
       $add_data->url     = $url ;
       $add_data->stuts   = $request->stuts;         
       $add_data->photo   = $img_name;             
       $add_data->content = $request->content;             
       $add_data->meat_description = $request->meat_description;
       $add_data->meat_keywords    = $request->meat_keywords;        
       $add_data->save(); 
     if ($add_data) {
         return back()->with('addsuss','suss');
     }
 }

 // view all tour Category
 public function allCategory()
 {   
   $sections = TourCategory::all();  
   $view_data = array('page_title' => 'All  Tour Packages Categories', 'sections'=>$sections );      
   return view('admin.tours.categories.allslictions',$view_data);   
 }

 // change tour Category stuts active dicactive 
 public function changeCategorystuts($section_id,$stuts)
 {
      $data = TourCategory::findOrFail($section_id); 
      $data->stuts = $stuts; 
      $data->save();
      return back();     
 }

 // edit  tour  Category
 public function editCategory($section_id)
 {
          $row = TourCategory::find($section_id);
          $view_data = array('page_title' => 'Edit  Tour Package Category','row'=>$row );      
          return view('admin.tours.categories.editsiction',$view_data);
 }

 // update toure Category
 public function updateCategory(Request $request,$section_id)
 {

    $slug = str_replace(' ', '-', $request->url);  
    $url  =  urlencode($slug);  

    $up_data = TourCategory::find($section_id);       
    if($request->hasFile('photo')) {
       if($up_data->photo != NULL){ if(file_exists('uploads/tours/category/'.$up_data->photo)){ unlink('uploads/tours/category/'.$up_data->photo); } }            
         $file = $request->file('photo');
         $img_name ='tourcategory-'.time().uniqid().'.'.$file->getClientOriginalExtension(); 
         $file->move('uploads/tours/category/', $img_name);
    }else { $img_name   = $up_data->photo; }

         $up_data->title   = $request->title;   
         $up_data->url     = $url ;
         $up_data->stuts   = $request->stuts;         
         $up_data->photo   = $img_name;             
         $up_data->content = $request->content;             
         $up_data->meat_description = $request->meat_description;
         $up_data->meat_keywords    = $request->meat_keywords;        
         $up_data->save(); 
         if ($up_data) {
             return back()->with('is_edit','suss');
            }      
 }

 // delete toure  Category
 public function deleteCategory($section_id)
 {
      $data = TourCategory::findOrFail($section_id);  
      if($data->photo != NULL){ if(file_exists('uploads/tours/category/'.$data->photo)){ unlink('uploads/tours/category/'.$data->photo); } }       
      $data->delete();     
      return back()->with('is_delete','suss');      
 }

 

/*===============================================================
========================  Start tours here ==============
===============================================================*/

// add new tour itme 
 public function newTour()
 {
        $sections = TourCategory::all();  
        $view_data = array('page_title' => 'add new tour ', 'sections'=>$sections );      
        return view('admin.tours.newtour',$view_data);

 }

 // save new  tour
 public function saveTour(Request $request) 
 {
        $messages = [
            'title.unique' => 'The tour name  has already exists in database', 
        ];

        $validator = Validator::make($request->all(), [
                    'title' => 'required|unique:tours|max:255', 
        ],$messages); 
        if ($validator->fails()) {
             return back()->withErrors($validator->errors());           
        } 
      $slug = str_replace(' ', '-', $request->url);  
      $url  =  urlencode($slug);
      if($request->hasFile('photo')) { 
         $file = $request->file('photo');
         $img_name = 'tour-'.time().uniqid().'.'.$file->getClientOriginalExtension(); 
         $image['filePath'] = $img_name;
         $file->move('uploads/tours/', $img_name);        
      }else { $img_name=NULL; }   
       // save data into db    
       $add_data = new ToursModelCMS();   
       $add_data->dest_id = $request->dest_id;   
       $add_data->title   = $request->title;   
       $add_data->url     = $url ;
       $add_data->main_price = $request->main_price;         
       $add_data->price    = $request->price;         
       $add_data->duration = $request->duration;         
       $add_data->stuts    = $request->stuts;            
       $add_data->photo    = $img_name;             
       $add_data->short_info = $request->short_info;             
       $add_data->content    = $request->content;             
       $add_data->meat_description = $request->meat_description;
       $add_data->meat_keywords    = $request->meat_keywords;      
       $add_data->save(); 
       if ($add_data) {
           return back()->with('addsuss','suss');
       }
   }







 // view all blog Posts  
 public function allTours()
 {   
   $sections = ToursModelCMS::all();  
   $view_data = array('page_title' => 'All Blog Posts', 'sections'=>$sections );      
   return view('admin.tours.alltour',$view_data);   
 }

 // change blog section stuts active dicactive 
 public function changeTourstuts($post_id,$stuts)
 {
      $data = ToursModelCMS::findOrFail($post_id); 
      $data->stuts = $stuts; 
      $data->save();
      return back();     
 }

 // edit  blog Post
 public function editTour($post_id)
 {

          $sections = BlogSectionsCMS::all();     
          $row = ToursModelCMS::find($post_id);
          $view_data = array('page_title' => 'Edit blog Post','row'=>$row,  'sections'=>$sections );      
          return view('admin.blog.posts.editpost',$view_data);
 }

 // update blog Post
 public function updateTour(Request $request,$post_id)
 {

    $slug = str_replace(' ', '-', $request->url);  
    $url  =  urlencode($slug);  

    $up_data = ToursModelCMS::find($post_id);       
    if($request->hasFile('photo')) {
       if($up_data->photo != NULL){ if(file_exists('uploads/tours/'.$up_data->photo)){ unlink('uploads/tours/'.$up_data->photo); } }            
         $file = $request->file('photo');
         $img_name ='post-'.time().uniqid().'.'.$file->getClientOriginalExtension(); 
         $file->move('uploads/tours/', $img_name);
    }else { $img_name   = $up_data->photo; }

           $up_data->section_id = $request->section_id;   
           $up_data->title   = $request->title;   
           $up_data->url     = $url ;
           $up_data->stuts   = $request->stuts;         
           $up_data->aouther = $request->aouther;         
           $up_data->photo   = $img_name;             
           $up_data->short_desc = $request->short_desc;             
           $up_data->content    = $request->content;             
           $up_data->meat_description = $request->meat_description;
           $up_data->meat_keywords    = $request->meat_keywords;        
           $up_data->publish_date    = date('Y-m-d');        
           $up_data->save(); 
         if ($up_data) {
             return back()->with('is_edit','suss');
            }      
 }

 // delete blog Postd
 public function deleteTour($post_id)
 {
      $data = ToursModelCMS::findOrFail($post_id);  
      if($data->photo != NULL){ if(file_exists('uploads/tours/'.$data->photo)){ unlink('uploads/tours/'.$data->photo); } }       
      $data->delete();     
      return back()->with('is_delete','suss');      
 }


















}// end of main 