<?php
namespace App\Http\Controllers\CMS;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as Pro;
use Illuminate\Http\Request;
use App\Http\Requests;
use Hash;
use App\http\Helpers\Cmstranslate;
// model
use App\Models\User;
use App\Models\CmsModels\UserRollsModel;
use App\Models\CmsModels\UserAccessRollsModel;

class UsersCMS extends Pro
{

    public function __construct()
    {
        $this->middleware('auth');
    }

// add new page
 public function newUser()
 {
        $view_data = array('rolls' => UserRollsModel::all());
        return view('admin.users.newuser',$view_data);

 }

 // save new page
 public function saveUser(Request $request)
 {
        // validate new inpout users
        $messages = [
            'email.unique' => Cmstranslate::cmslang('is_indb'),
        ];
        $validator = Validator::make($request->all(), [
                    'email' => 'required|unique:users|max:255',
        ],$messages);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
        // add new user into db
        $add_user = new User ();
        $add_user->name     = $request->username;
        $add_user->level    =  'user';
        $add_user->email    = $request->email;
        $add_user->password = Hash::make($request->userpassword);
        $add_user->save ();
        // get user id
        $num_rolls = count($request->userroll);
        $user_id = $add_user->id;
        for ($i=1; $i < $num_rolls; $i++) {
            $add_user_rolls = new UserAccessRollsModel();
            $add_user_rolls->user_id = $user_id;
            $add_user_rolls->roll_id = $request->userroll[$i];
            $add_user_rolls->save();
       }

       if ($add_user_rolls) {
           return back()->with('addsuss','suss');
       }
   }


 // view all Pages
 public function allUsers()
 {
   $users = User::all();
   $view_data = array('users'=>$users );
   return view('admin.users.allusers',$view_data);
 }

   // edit page
   public function editUser($page_id)
   {
            $row = User::find($page_id);
            $view_data = array('page_title' => Cmstranslate::cmslang('editpage'),'row'=>$row,'rolls' => UserRollsModel::all() );
            return view('admin.users.edituser',$view_data);
   }

 // update page
 public function updateUser(Request $request,$user_id)
 {
           $up_data = User::find($user_id);
            if (!$request->userpassword) {
                $up_user_password = $up_data->password;
            }else{
               $up_user_password = Hash::make($request->userpassword);
            }
          $up_data->name     = $request->username;
          $up_data->email    = $request->email;
          $up_data->password = $up_user_password;
          $up_data->save();

          $delete_user_rolls = UserAccessRollsModel::where('user_id', '=', $user_id)->delete();
          $num_rolls = count($request->userroll);
          for ($i=1; $i < $num_rolls; $i++) {
              $add_user_rolls = new UserAccessRollsModel();
              $add_user_rolls->user_id = $user_id;
              $add_user_rolls->roll_id = $request->userroll[$i];
              $add_user_rolls->save();
         }
      return back()->with('is_edit','suss');
 }

 // delete blog Postd
 public function deleteUser($user_id)
 {
      $delete_user = User::findOrFail($user_id);
      $delete_user->delete();
      $delete_user_rolls = UserAccessRollsModel::where('user_id', '=', $user_id)->delete();
      return back()->with('is_delete','suss');
 }


















}// end of main
