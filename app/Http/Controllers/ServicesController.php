<?php

namespace App\Http\Controllers;

use App\Models\CmsModels\ServicesModelCMS;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(Request $request)
    {
        $services = ServicesModelCMS::get();
        return view('interface.services',compact(['services']));
    }
}