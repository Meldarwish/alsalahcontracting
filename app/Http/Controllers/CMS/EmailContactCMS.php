<?php
namespace App\Http\Controllers\CMS;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as Pro; 
use Illuminate\Http\Request; 
use App\Http\Requests;
use App\Helpers\Cmstranslate;
// model  
use App\Models\CmsModels\GlobaSettings;  
use App\Models\CmsModels\EmailContactModelCMS; 

class  EmailContactCMS extends Pro
{
 
    public function __construct()
    {
        $this->middleware('auth');
    } 
  
  public function index(){
	  return $this->allMails();
} 

   // change all  Mail stuts
   public function allMails()
   {   
       $emails = EmailContactModelCMS::all();  
       $view_data = array('emails'=>$emails );      
       return view('admin.emails.showemails',$view_data);     
   }

   // show mails by mail stuts 
   public function showMailsBystuts()
   {   


        
   }

   // change Mail stuts / read or not   
   public function changeMailstuts($mail_id,$stuts)
   {         
      $data = EmailContactModelCMS::findOrFail($mail_id); 
      $data->readed = $stuts; 
      $data->save(); 
      return back(); 
   }

   // change Mail stuts / draft , archive, trach , 
   public function changeMailAction($mail_id,$stuts)
   {         
      $data = EmailContactModelCMS::findOrFail($mail_id); 
      $data->stuts = $stuts; 
      $data->save(); 
      return back(); 
   }

  // read Mail
  public function readMail($mail_id)
  {
      $data = EmailContactModelCMS::findOrFail($mail_id); 
      $data->readed = 1; 
      $data->save();
      $view_data = array('row'=>$data );      
      return view('admin.emails.readmail',$view_data);   
  }

  // delete email contact 
  public function deleteMail($mail_id)
  {
      $data = EmailContactModelCMS::findOrFail($mail_id);  
      if($data->attach != NULL){ if(file_exists('uploads/emails/'.$data->photo)){ unlink('uploads/emails/'.$data->attach); } }       
      $data->delete();     
      return back()->with('is_delete','suss');       
  }














}// end of main 