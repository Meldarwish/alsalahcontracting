<?php

namespace App\Http\Controllers;

use App\Models\CmsModels\BlogPostsCMS;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPostsCMS::paginate();
        return view('interface.blog',compact(['posts']));
    }
}