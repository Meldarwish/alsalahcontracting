<?php

namespace App\Http\Controllers;

use App\Models\CmsModels\EmailContactModelCMS;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('interface.contact');
    }

    public function store(Request $request)
    {
        EmailContactModelCMS::create($request->all());
        return redirect()
        ->route('contact')
        ->with('success', 'Your message has been sent successfully!');
    }
}