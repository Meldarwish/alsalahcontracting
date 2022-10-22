<?php

namespace App\Http\Controllers;

use App\Models\CmsModels\ServicesModelCMS;
use App\Models\CmsModels\Slideersm;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slideersm::get();
        $services = ServicesModelCMS::get();
        return view('interface.home',compact(['sliders','services']));
    }
}