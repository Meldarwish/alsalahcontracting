<?php
namespace App\Http\Controllers\CMS;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as Pro; 
use Illuminate\Http\Request; 
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use \App\Helpers\Cmstranslate; 
// model  
use App\Models\CmsModels\CMSLang; 
use App\Models\CmsModels\CMSTranslation; 
use App\Models\CmsModels\CMSsetting;  
class AdminLanguages extends Pro
{
 
    public function __construct()
    {
        $this->middleware('auth');
    } 
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view_data = array('page_title' => 'addnew admin language', );      
        return view('admin.settings.languages.addnew',$view_data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        $messages = [
            'code.unique' => 'The language has already exists in database',  
        ];

        $validator = Validator::make($request->all(), [
                    'code' => 'required|unique:admin_lang|max:255', 
        ],$messages);         
        if ($validator->fails()) {
             return back()->withErrors($validator->errors());           
        } 
          if($request->hasFile('photo')) { 
             $file = $request->file('photo');
             $img_name = 'adminlang-'.time().uniqid().'.'.$file->getClientOriginalExtension(); 
             $image['filePath'] = $img_name;
             $file->move('uploads/settings/languages/', $img_name);        
          }else { $img_name=NULL; }   
          // save data into db    
           $add_data = new CMSLang();   
           $add_data->name    = $request->name;    
           $add_data->code    = $request->code;    
           $add_data->dir     = $request->dir;    
           $add_data->stuts   = $request->stuts;         
           $add_data->photo   = $img_name;                   
           $add_data->save();           
        $main_translat = CMSTranslation::where('lang_code','en')->get();
        foreach ($main_translat as $row) { 
            $add_trans = new CMSTranslation(); 
            $add_trans->lang_code = $request->code;   
            $add_trans->langkey   = $row->langkey;   
            $add_trans->save();
        } 
         if ($add_data) {
             return back()->with('addsuss','suss');
         }  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $languages = CMSLang::all();  
      $view_data = array('page_title' => 'All Admin Languages', 'languages'=>$languages );      
      return view('admin.settings.languages.viewall',$view_data);   
    }

    /**
     * change items stuts by specified resource.
     *
     * @param  int  $id
     * @param  int  $stuts
     * @return \Illuminate\Http\Response
     */        
     public function stuts($item_id,$stuts)
     {
          $data = CMSLang::findOrFail($item_id); 
          $data->stuts = $stuts; 
          $data->save();
          return back();     
     }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($item_id)
    {
          $row = CMSLang::find($item_id);
          $view_data = array('page_title' => 'Edit Admin Language','row'=>$row );      
          return view('admin.settings.languages.edit',$view_data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $item_id)
    {
        $up_data = CMSLang::find($item_id);       
        if($request->hasFile('photo')) {
        if($up_data->photo != NULL){ if(file_exists('uploads/settings/languages/'.$up_data->photo)){ unlink('uploads/settings/languages/'.$up_data->photo); } }            
            $file = $request->file('photo');
            $img_name ='adminlang-'.time().uniqid().'.'.$file->getClientOriginalExtension(); 
            $file->move('uploads/settings/languages/', $img_name);
        }else { $img_name   = $up_data->photo; }
        $up_data->name    = $request->name;    
        $up_data->code    = $request->code;    
        $up_data->dir     = $request->dir;    
        $up_data->stuts   = $request->stuts;         
        $up_data->photo   = $img_name;                   
        $up_data->save();  
        if($up_data) {
         return back()->with('is_edit','suss');
        }   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function SetMainLanguage(Request $request, $item_id)
    {
        $remove_mainlang =  CMSLang::query()->update(['is_main' => NULL]);   
        $set_main_lang   = CMSLang::find($item_id);
        // update config lang  
        $update = CMSsetting::where('key','cms_lang')->update(['value' => $set_main_lang->code]); 
        $update = CMSsetting::where('key','mainlang')->update(['value' => $set_main_lang->code]); 
        // save main config lang in lang table 
        $set_main_lang->is_main = 'yes';                   
        $set_main_lang->save();  
        return back()->with('is_edit','suss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($item_id)
    {
        $data = CMSLang::findOrFail($item_id);  
        // stop delete if is it main lang 
        $cheek_main =  $data->is_main;
        if ($cheek_main ==='yes') {
            return back()->with('is_mainlang','yes');  
        }else{
          if($data->photo != NULL){ 
            if(file_exists('uploads/settings/languages/'.$data->photo)){ unlink('uploads/settings/languages/'.$data->photo); } }       
            $delete_translation  = CMSTranslation::where('lang_code',$data->code)->delete(); 
            $data->delete();     
            return back()->with('is_delete','suss');     
        }  
    }



    /**
     * add new specified langkey.
     *
     * @param  string  $langkey
     * @return \Illuminate\Http\Response
     */
    public function AddLangKey($langkey)  
    {
        $row = CMSLang::where('code',$langkey)->first(); 
        $languages = CMSLang::all();     
        $view_data = array('page_title' => 'add new langkey for all language','languages'=>$languages );      
        return view('admin.settings.languages.addlangkey',$view_data);
    }


    /**
     * Store new llang translation with one lang key .
     *
     * @return \Illuminate\Http\Response
     */
    public function SaveLangKey(Request $request)  
    {
        // here lang key get from db == input lang key in form 
        $cms_languages = CMSLang::all();  
         foreach ($cms_languages as $lang) {                
                $lancode   = $lang->code;
                $add_trans = new CMSTranslation();
                $add_trans->lang_code = $lancode;
                $add_trans->langkey   = $request->langkey;
                $add_trans->text      = $request->$lancode;
                $add_trans->save();  
         } 
         return back(); 
    }












/*=================================================================
============== Translation lanaguages from here ===================
==================================================================*/ 
    /**
     * Translation specified Language by lang_code
     * @param  string  $lang_code
     * @return \Illuminate\Http\Response
     */
    public function Translation($lang_code=NULL)
    {              
        $get_lang = CMSTranslation::where('lang_code',$lang_code)->get();
        //$get_lang = CMSTranslation::where('lang_code','en')->get();
        //echo $get_lang;
        $view_data = array('page_title' => 'Language Translations','language'=>$get_lang,'lang_code'=>$lang_code);  
         return view('admin.settings.languages.translations',$view_data);   
    }

    /**
     * Update Translation specified Language by lang_code
     * @param  string  $lang_code
     * @return \Illuminate\Http\Response
     */
    public function UpdateTranslation(Request $request,$lang_code)
    {                      
        $translations = Input::except('_token');

        foreach ($translations as $langkey => $text) { 
            $add_trans = CMSTranslation::where('lang_code',$lang_code)->where('langkey',$langkey)->first(); 
            $add_trans->lang_code = $lang_code;   
            $add_trans->text  = $text;   
            $add_trans->save();
        } 
        return back()->with('is_edit','suss');
    }



 
























}// end main class