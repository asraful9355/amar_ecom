<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use Toastr;
use Auth;


class AdminProfileController extends Controller
{
   public function adminProfile(){
      $adminData = Admin::find(1);
      return view('admin.admin_profile_view',compact('adminData'));
   }


   public function adminProfileEdit(){
      $editData = Admin::find(1);
      return view('admin.admin_profile_edit',compact('editData'));
   }
   public function adminProfileStore(Request $request){
         $data = Admin::find(1);
         $data->name = $request->name;
         $data->email = $request->email;
        if ($request->file('profile_photo_path')) {
             $file = $request->file('profile_photo_path');
             @unlink(public_path('upload/admin_images/'.$data->profile_photo_path));
             $filename = date('YmdHi').$file->getClientOriginalName();
             $file->move(public_path('upload/admin_images'),$filename);
             $data['profile_photo_path'] = $filename;
         }

         $data->save();
         Toastr::success('Admin Profile Updated Successfully ', 'Message', ["positionClass" => "toast-top-right"]);
         return redirect()->route('admin.profile');
    }

    public function adminChangePassword(){
         return view('admin.admin_change_password');
    }





    public function UpdateChangePassword(Request $request){

        //  $validateData = $request->validate([

        //  'oldpassword'=>'required',
        //  'password'=>'required|confirmed',

        // ]);

        $hashedPassword = Admin::find(1)->password;
        if(Hash::check($request->oldpassword,$hashedPassword)){
         $admin = Admin::find(1);
         $admin->password = Hash::make($request->password);
         $admin->save();
         Auth::logout();
         return redirect()->route('admin.logout');
         }else{
            Toastr::error('something is wrong', 'Message', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
         }



    }
}
