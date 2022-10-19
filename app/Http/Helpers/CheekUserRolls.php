<?php
namespace App\Http\Helpers; 
use Session;
use Auth;
use App\Models\User; 
use App\Models\CmsModels\UserRollsModel; 
use App\Models\CmsModels\UserAccessRollsModel;
class CheekUserRolls {

    public static function check($roll_key=NULL){   
           $user_level  = Auth::user()->level;   
           if ($user_level =='fulladmin') {
               return TRUE;
           }    
           $user_id     = Auth::user()->id;   
           $get_roll = UserRollsModel::where('key',$roll_key)->first();
           if (!$get_roll) {
                return FALSE;  
            }else{ $Roll_id = $get_roll->id; }                                  
           $User_Roll =  UserAccessRollsModel::where('roll_id', '=',$Roll_id)->where('user_id', '=', $user_id)->first();
           if ($User_Roll) {
               return TRUE;
           }    
    }












}// end off main 