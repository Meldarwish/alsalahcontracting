<?php
namespace App\Models\CmsModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; 

class TourCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $timestamps = false;
    protected $table = 'tour_category';


public static function get_name_by_id($section_id) {
              $db_query = DB::table('tour_category')->where('id',$section_id)->first(); 
               if($db_query){
              	 return $db_query->title;
              }else {
              	return false;
              }  
 
}


}