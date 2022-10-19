<?php
namespace App\Http\Controllers\CMS;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as Pro;
use Illuminate\Http\Request;
use App\Http\Requests;
// model
use App\Models\CmsModels\BlogSectionsCMS;
use App\Models\CmsModels\BlogPostsCMS;

class BlogCMS extends Pro
{

    public function __construct()
    {
        $this->middleware('auth');
    }


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
        $messages = [
            'title.unique' => 'The title has already exists in database',
        ];

        $validator = Validator::make($request->all(), [
                    'title' => 'required|unique:blog_sections|max:255',
        ],$messages);
        if ($validator->fails()) {
             return back()->withErrors($validator->errors());
        }
      $slug = str_replace(' ', '-', $request->url);
      $url  =  urlencode($slug);
      if($request->hasFile('photo')) {
         $file = $request->file('photo');
         $img_name = 'section-'.time().uniqid().'.'.$file->getClientOriginalExtension();
         $image['filePath'] = $img_name;
         $file->move('uploads/blog/sections/', $img_name);
      }else { $img_name=NULL; }
     // save data into db
       $add_data = new BlogSectionsCMS();
       $add_data->langkey = $request->langkey;
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

 // view all blog sections
 public function allsections()
 {
   $sections = BlogSectionsCMS::all();
   $view_data = array('page_title' => 'All Blog Sections', 'sections'=>$sections );
   return view('admin.blog.sections.allslictions',$view_data);
 }

 // change blog section stuts active dicactive
 public function changesectionstuts($section_id,$stuts)
 {
      $data = BlogSectionsCMS::findOrFail($section_id);
      $data->stuts = $stuts;
      $data->save();
      return back();
 }

 // edit  blog section
 public function editsection($section_id)
 {
          $row = BlogSectionsCMS::find($section_id);
          $view_data = array('page_title' => 'Edit blog section','row'=>$row );
          return view('admin.blog.sections.editsiction',$view_data);
 }

 // update blog section
 public function updatesection(Request $request,$section_id)
 {

    $slug = str_replace(' ', '-', $request->url);
    $url  =  urlencode($slug);

    $up_data = BlogSectionsCMS::find($section_id);
    if($request->hasFile('photo')) {
       if($up_data->photo != NULL){ if(file_exists('uploads/blog/sections/'.$up_data->photo)){ unlink('uploads/blog/sections/'.$up_data->photo); } }
         $file = $request->file('photo');
         $img_name ='section-'.time().uniqid().'.'.$file->getClientOriginalExtension();
         $file->move('uploads/blog/sections/', $img_name);
    }else { $img_name   = $up_data->photo; }

         $up_data->langkey = $request->langkey;
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

 // delete blog section
 public function deletesection($section_id)
 {
      $data = BlogSectionsCMS::findOrFail($section_id);
      if($data->photo != NULL){ if(file_exists('uploads/blog/sections/'.$data->photo)){ unlink('uploads/blog/sections/'.$data->photo); } }
      $data->delete();
      return back()->with('is_delete','suss');
 }



/*===============================================================
========================  Start blog Posts here ==============
===============================================================*/

// add new blog Posts
 public function newpost()
 {
        $sections = BlogSectionsCMS::all();
        $view_data = array('page_title' => 'add new blog Post', 'sections'=>$sections );
        return view('admin.blog.posts.newpost',$view_data);

 }

 // save new blog Posts
 public function savePost(Request $request)
 {
     /*
        $messages = [
            'title.unique' => 'The Post has already exists in database',
        ];

        $validator = Validator::make($request->all(), [
                    'title' => 'required|unique:blog|max:255',
        ],$messages);
        if ($validator->fails()) {
             return back()->withErrors($validator->errors());
        }
      $slug = str_replace(' ', '-', $request->url);
      $url  =  urlencode($slug);
      */
      if($request->hasFile('photo')) {
         $file = $request->file('photo');
         $img_name = 'post-'.time().uniqid().'.'.$file->getClientOriginalExtension();
         $image['filePath'] = $img_name;
         $file->move('uploads/blog/posts/', $img_name);
      }else { $img_name=NULL; }
     // save data into db
       $add_data = new BlogPostsCMS();
       $add_data->section_id = $request->section_id;
       $add_data->langkey = $request->langkey;
       //$add_data->title   = $request->title;
       //$add_data->url     = $url ;
       //$add_data->stuts   = $request->stuts;
       //$add_data->aouther = $request->aouther;
       $add_data->photo   = $img_name;
       //$add_data->short_desc = $request->short_desc;
      // $add_data->content    = $request->content;
       //$add_data->meat_description = $request->meat_description;
       //$add_data->meat_keywords    = $request->meat_keywords;
      // $add_data->publish_date    = date('Y-m-d');
       $add_data->save();
     if ($add_data) {
         return back()->with('addsuss','suss');
     }
 }

 // view all blog Posts
 public function allPost()
 {
   $sections = BlogPostsCMS::all();
   $view_data = array('page_title' => 'All Blog Posts', 'sections'=>$sections );
   return view('admin.blog.posts.allposts',$view_data);
 }

 // change blog section stuts active dicactive
 public function changePoststuts($post_id,$stuts)
 {
      $data = BlogPostsCMS::findOrFail($post_id);
      $data->stuts = $stuts;
      $data->save();
      return back();
 }

 // edit  blog Post
 public function editPost($post_id)
 {

          $sections = BlogSectionsCMS::all();
          $row = BlogPostsCMS::find($post_id);
          $view_data = array('page_title' => 'Edit blog Post','row'=>$row,  'sections'=>$sections );
          return view('admin.blog.posts.editpost',$view_data);
 }

 // update blog Post
 public function updatePost(Request $request,$post_id)
 {

    $slug = str_replace(' ', '-', $request->url);
    $url  =  urlencode($slug);

    $up_data = BlogPostsCMS::find($post_id);
    if($request->hasFile('photo')) {
       if($up_data->photo != NULL){ if(file_exists('uploads/blog/posts/'.$up_data->photo)){ unlink('uploads/blog/posts/'.$up_data->photo); } }
         $file = $request->file('photo');
         $img_name ='post-'.time().uniqid().'.'.$file->getClientOriginalExtension();
         $file->move('uploads/blog/posts/', $img_name);
    }else { $img_name   = $up_data->photo; }

           $up_data->section_id = $request->section_id;
           $up_data->langkey = $request->langkey;
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
 public function deletePost($post_id)
 {
      $data = BlogPostsCMS::findOrFail($post_id);
      if($data->photo != NULL){ if(file_exists('uploads/blog/posts/'.$data->photo)){ unlink('uploads/blog/posts/'.$data->photo); } }
      $data->delete();
      return back()->with('is_delete','suss');
 }


















}// end of main
