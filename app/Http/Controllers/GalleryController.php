<?php

namespace App\Http\Controllers;

use App\Models\CmsModels\GallerySectionsModelCMS;
use App\Models\CmsModels\PhotosModelCMS;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $sections = GallerySectionsModelCMS::orderBy('type','desc')->get();
        $photos = PhotosModelCMS::get();
        return view('interface.gallery',compact(['sections','photos']));
    }
}