<?php

namespace App\Http\Controllers;

use App\Models\CmsModels\ServicesModelCMS;
use Illuminate\Http\Request;

class AboutController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services = ServicesModelCMS::get();
        
        return view('interface.about',compact(['services']));
    }
}