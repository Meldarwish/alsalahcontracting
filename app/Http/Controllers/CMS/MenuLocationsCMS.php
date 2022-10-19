<?php
namespace App\Http\Controllers\CMS;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as Pro; 
use Illuminate\Http\Request; 
use App\Http\Requests;
// model 
use App\Models\CmsModels\MenuLocationsModelCMS;  
use App\Models\CmsModels\MenusModelCMS;  
use App\Models\CmsModels\BlogSectionsCMS; 
use App\Models\CmsModels\BlogPostsCMS; 
use App\Models\CmsModels\PagesModelCMS; 
use App\Models\CmsModels\ServicesModelCMS; 

class MenuLocationsCMS extends Pro
{
 
    public function __construct()
    {
        $this->middleware('auth');
    } 
  
function index(){
	 //return $this->allsliers();
} 

/*===============================================================
========================  Start menu location here ==============
===============================================================*/
// add new menu location 
 public function newsection()
 {
        $view_data = array('page_title' => 'add new blog section', );      
        return view('admin.menus.locations.addnewscetion',$view_data);
 }

 // add new menu location  
 public function savesection(Request $request) 
 {
        $messages = [
            'title.unique' => 'The title has already exists in database', 
        ];

        $validator = Validator::make($request->all(), [
                    'title' => 'required|unique:menu_locations|max:255', 
        ],$messages); 
        if ($validator->fails()) {
             return back()->withErrors($validator->errors());           
        } 
      // save data into db    
       $add_data = new MenuLocationsModelCMS();   
       $add_data->langkey = $request->langkey;     
       $add_data->title   = $request->title;  
       $add_data->code    = $request->code;  
       $add_data->stuts   = $request->stuts;           
       $add_data->save(); 
     if ($add_data) {
         return back()->with('addsuss','suss');
     }
 }

 // view all menu location 
 public function allsections()
 {   
   $sections = MenuLocationsModelCMS::all();  
   $view_data = array('sections'=>$sections );      
   return view('admin.menus.locations.allslictions',$view_data);   
 }

 // change menu location  stuts active dicactive 
 public function changesectionstuts($section_id,$stuts)
 {
      $data = MenuLocationsModelCMS::findOrFail($section_id); 
      $data->stuts = $stuts; 
      $data->save();
      return back();     
 }

 // edit  menu location 
 public function editsection($section_id)
 {
          $row = MenuLocationsModelCMS::find($section_id);
          $view_data = array('row'=>$row );      
          return view('admin.menus.locations.editsiction',$view_data);
}

 // update menu location 
 public function updatesection(Request $request,$section_id)
 {
         $up_data = MenuLocationsModelCMS::find($section_id); 
         $up_data->langkey = $request->langkey;
         $up_data->title   = $request->title;    
         $up_data->code    = $request->code;    
         $up_data->stuts   = $request->stuts;               
         $up_data->save(); 
         if ($up_data) {
             return back()->with('is_edit','suss');
            }      
 }

 // delete menu location 
 public function deletesection($section_id)
 {
      $data = MenuLocationsModelCMS::findOrFail($section_id);    
      $data->delete();     
      return back()->with('is_delete','suss');      
 }

/*===============================================================
========================  Start menus from here  ==============
===============================================================*/

 // allmenus   
  public function newmenu(Request $request)
  {
      $blogsections = BlogSectionsCMS::all(); 
      $blogposts    = BlogPostsCMS::all(); 
      $pages        = PagesModelCMS::all(); 
      $services     = ServicesModelCMS::all();
      $menus        = MenusModelCMS::all();

    $view_data = array(
           'blogsections'=> $blogsections,
           'blogposts'   => $blogposts,
           'pages'       => $pages,
           'services'       => $services,
           'menus'       => $menus,
       );      
    return view('admin.menus.addnewmenu',$view_data);             
  }


 // allmenus   
  public function savesemenu(Request $request)
  {
             
  }

 // allmenus   
  public function allmenus(Request $request)
  {
             
  }

 // changemenustuts   
  public function changemenustuts(Request $request,$menu_id)
  {
             
  }

 // editmenu   
  public function editmenu(Request $request,$menu_id)
  {
             
  }

 // updatemenu   
  public function updatemenu(Request $request,$menu_id)
  {
             
  }

 // delete   
  public function deletemenu($menu_id)
  {
    $data = MenusModelCMS::findOrFail($menu_id);    
    $data->delete();     
    return back()->with('is_delete','suss');      
  }

}// end of main 