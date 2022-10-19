<?php
namespace App\Http\Helpers; 
use Session;
use Auth;
use App\Models\CmsModels\CMSTranslation;
use App\Models\CmsModels\SiteLang;
class Cmstranslate {

    public static function cmslang($langkey){ 
            //echo  Auth::user()->name;      
            $current_lang = config('cms.cms_lang');  
            $is_live_lang = session('cmslangcode'); 
            if($is_live_lang === NULL){
                $code = session(['cmslangcode' => $current_lang]);
            }else{
                $code =  $is_live_lang;  
            }  
            $cmslang =  CMSTranslation::where('lang_code',$code)->where('langkey',$langkey)->first();
            //$cmslang = CMSTranslation::where('lang_code',$code)->where('langkey',$langkey)->first();
            if ($cmslang) {
                 return $cmslang->text;  
            }else{
                return false;
            } 
    }

    public static function getlangname($langcode=NULL){  
            $langname =  SiteLang::where('code',$langcode)->first(); 
            if ($langname) {
            	 return $langname->name;  
            }else{
            	return false;
            } 
    }
}