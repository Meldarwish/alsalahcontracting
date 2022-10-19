<?php
namespace App\Models\CmsModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GlobaSettings extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $timestamps = false;
    protected $table = 'site_config'; 
    protected $fillable = ['key','value'];


/*
public static function getmainlang($langkey) {
              $db_query = DB::table('admin_translation')->where('lang_code','en')->where('langkey',$langkey)->first(); 
               if($db_query){
              	 return $db_query->text;
              }else {
              	 return false;
              }  
 
}*/







}