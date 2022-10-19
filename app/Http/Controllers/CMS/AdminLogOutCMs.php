<?php
namespace App\Http\Controllers\CMS;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as Pro; 
use Illuminate\Http\Request; 
use App\Http\Requests;
// model 
use Auth;
use Session;

class AdminLogOutCMs extends Pro
{
 
function index(){
	 
    Auth::logout();
    Session::forget('user');
    return view('auth.login');
} 



}// end of main 