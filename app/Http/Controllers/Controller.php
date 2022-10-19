<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller as BaseController;


use App\Models\CmsModels\BlogSectionsCMS;
use App\Models\CmsModels\BlogPostsCMS; 
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function store(Request $request)
    {
        $this->validate ($request,[
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        
        Mail::send('emails.contact-message',[
            'msg'    => $request->message,
            'email'  => $request->email,
            'name'   =>$request->name,
            'phone'  =>$request->phone, 
            'subject'=>$request->subject
        ], 
         
        function ($mail) use($request)
            {
                $mail->from($request->email, $request->name);

                $mail->to('info@citykitcheneg.com')->subject('Website Message');
            });

       
            
        return redirect()->back()->with('flash_message', 'Thank you for your message ');
    }

    public function getPost($id){
        if($id != ''){
            $post = BlogPostsCMS::find($id);
            if($post){
                return view('singlekitchen', compact('post'));
            }
        }
        return Redirect::back();
    }

    public function categoriesCheck($id = null)
    {
        $db_query = BlogPostsCMS::where('section_id', $id)->get();


        $data = array(

            'items' => $db_query,

        );
        if ($id != '') {

            $section = BlogSectionsCMS::find($id);
        }

        return view('interface.singlekitchen', $data, compact('section') );
    }

}
