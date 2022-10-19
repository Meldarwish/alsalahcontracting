<?php
namespace App\Http\Controllers\CMS;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as Pro;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Helpers\Cmstranslate;
// model
use App\Models\CmsModels\GallerySectionsModelCMS;
use App\Models\CmsModels\VideosModelCMS;
use App\Models\CmsModels\PhotosModelCMS;

class GalleryCMS extends Pro
{


    public function __construct()
    {
        $this->middleware('auth');
    }


public function index(){

}

/*========================================================================================
======================== Photos && videos Gallery Sections from here =====================
========================================================================================*/
// add new Section
 public function newSection()
 {
        return view('admin.gallery.sections.newsection');
 }

 // save new Section
 public function saveSection(Request $request)
 {
        $messages = [
            'title.unique' => Cmstranslate::cmslang('is_indb'),
        ];

        $validator = Validator::make($request->all(), [
                    'title' => 'required|unique:photos_videos_sections|max:255',
        ],$messages);
        if ($validator->fails()) {
             return back()->withErrors($validator->errors());
        }

        // upload file
        if($request->hasFile('photo')) {
         $file = $request->file('photo');
         $img_name = 'sectiong-'.time().uniqid().'.'.$file->getClientOriginalExtension();
         $image['filePath'] = $img_name;
         $file->move('uploads/sectiong/', $img_name);
      }else { $img_name=NULL; }
       // save data into db
       $add_data = new GallerySectionsModelCMS();
       $add_data->langkey  = $request->langkey;
       $add_data->type     = $request->gallery_type;
       $add_data->title    = $request->title;
       $add_data->stuts    = $request->stuts;
       $add_data->photo    = $img_name;
       $add_data->save();
       if ($add_data) {
           return back()->with('addsuss','suss');
       }
   }

 // view all Sections
 public function allSections()
 {
   $sections = GallerySectionsModelCMS::all();
   $view_data = array('page_title' => Cmstranslate::cmslang('allgallerysection'), 'sections'=>$sections );
   return view('admin.gallery.sections.allsections',$view_data);
 }

 // change Section stuts active dicactive
 public function changeSectiontuts($item_id,$stuts)
 {
      $data = GallerySectionsModelCMS::findOrFail($item_id);
      $data->stuts = $stuts;
      $data->save();
      return back();
 }

   // edit Section
   public function editSection($item_id)
   {
            $row = GallerySectionsModelCMS::find($item_id);
            $view_data = array('page_title' => Cmstranslate::cmslang('edit'),'row'=>$row );
            return view('admin.gallery.sections.editsection',$view_data);
   }

 // update Section
 public function updateSection(Request $request,$item_id)
 {
          $up_data = GallerySectionsModelCMS::find($item_id);
           $up_data->langkey  = $request->langkey;
           $up_data->type     = $request->gallery_type;
           $up_data->title    = $request->title;
           $up_data->stuts    = $request->stuts;
           $up_data->save();
          if ($up_data) {
             return back()->with('is_edit','suss');
            }
 }

 // delete Section
 public function deleteSection($item_id)
 {
      $data = GallerySectionsModelCMS::findOrFail($item_id);
      $data->delete();
      return back()->with('is_delete','suss');
 }

/*============================================================
======================== Photos Gallery  =====================
=============================================================*/

 // add new  photos
 public function newPhotos(Request $request)
 {
    $sections = GallerySectionsModelCMS::where('type','photos')->get();
    $data = array('sections' => $sections,  );
    return view('admin.gallery.photos.newphotos',$data);
 }

 // save Photos
 public function savePhotos(Request $request)
 {
        if ($request->hasFile('photos')) {
            $files = $request->file('photos');
              foreach($files as $file){
                     $photo_name = $file->getClientOriginalName();
                     $image['filePath'] = $photo_name;
                     $file->move('uploads/gallery/', $photo_name);
                     // save photos into db
                     $add_photos = new PhotosModelCMS();
                     $add_photos->langkey    = $request->langkey;
                     $add_photos->section_id = $request->section_id;
                     $add_photos->photo      = $photo_name;
                     $add_photos->save();
              }
               if ($add_photos) {
                      return back()->with('addsuss','suss');
               }
               else
                {
                    return back();
                }
        }
 }

 // view photos
 public function allPhotos(Request $request)
 {
    $photos = PhotosModelCMS::all();
    $data = array('photos' => $photos  );
    return view('admin.gallery.photos.allphotos',$data);
 }

 // view photos by section id
 public function allSectionPhotos(Request $request,$section_id)
 {
    $photos = PhotosModelCMS::where('section_id',$section_id)->get();
    $data = array('photos' => $photos  );
    return view('admin.gallery.photos.allphotos',$data);
 }

 // delete single photo
 public function deleteSinglePhoto(Request $request,$photo_id)
 {
      $delete = PhotosModelCMS::findOrFail($photo_id);
              if(file_exists('uploads/gallery/'.$delete->photo)){ unlink('uploads/gallery/'.$delete->photo); }
      $delete->delete();
      return back()->with('is_delete','suss');
 }

/*==========================================================
======================== video Gallery =====================
===========================================================*/
// add new video
 public function newVideo()
 {
        $sections = GallerySectionsModelCMS::where('type','videos')->get();
        $data = array('sections' => $sections,  );
        return view('admin.gallery.video.newvideo',$data);
 }

 // save new video
 public function saveVideo(Request $request)
 {
        $messages = [
            'title.unique' => Cmstranslate::cmslang('is_indb'),
        ];

        $validator = Validator::make($request->all(), [
                    'title' => 'required|unique:videos|max:255',
        ],$messages);
        if ($validator->fails()) {
             return back()->withErrors($validator->errors());
        }
       // save data into db
       $add_data = new VideosModelCMS();
       $add_data->langkey    = $request->langkey;
       $add_data->section_id = $request->section_id;
       $add_data->url        = $request->videourl;
       $add_data->title      = $request->title;
       $add_data->stuts      = $request->stuts;
       $add_data->save();
       if ($add_data) {
           return back()->with('addsuss','suss');
       }
   }

 // view all video
 public function allVideos()
 {
   $sections = VideosModelCMS::all();
   $view_data = array('page_title' => Cmstranslate::cmslang('viewvideogallery'), 'sections'=>$sections );
   return view('admin.gallery.video.allvideos',$view_data);
 }

 // change video stuts active dicactive
 public function changeVideostuts($item_id,$stuts)
 {
      $data = VideosModelCMS::findOrFail($item_id);
      $data->stuts = $stuts;
      $data->save();
      return back();
 }

   // edit video
   public function editVideo($item_id)
   {
            $sections = GallerySectionsModelCMS::where('type','videos')->get();
            $row = VideosModelCMS::find($item_id);
            $view_data = array('page_title' => Cmstranslate::cmslang('edit'),'row'=>$row ,'sections' => $sections);
            return view('admin.gallery.video.editvideo',$view_data);
   }

 // update video
 public function updateVideo(Request $request,$item_id)
 {
         $up_data = VideosModelCMS::find($item_id);
         $up_data->langkey    = $request->langkey;
         $up_data->section_id = $request->section_id;
         $up_data->url        = $request->videourl;
         $up_data->title      = $request->title;
         $up_data->stuts      = $request->stuts;
        $up_data->save();
        if ($up_data) {
                     return back()->with('is_edit','suss');
        }
 }

 // delete video
 public function deleteVideo($item_id)
 {
      $data = VideosModelCMS::findOrFail($item_id);
      $data->delete();
      return back()->with('is_delete','suss');
 }


}// end of main
