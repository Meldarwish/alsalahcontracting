<?php 

namespace App\Models\CmsModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CMSsetting extends Model
{
    protected $table = 'admin_config';

    public $timestamps = false;

    protected $fillable = ['key','value'];




/*
public static function update_sysconfig_by_key($get_key,$update_value) {
              $update = DB::table('system_config')->where('key',$get_key)->update(['value' => $update_value]); 
              if ($update) { return true; }else { return false; }
               
} */


}
