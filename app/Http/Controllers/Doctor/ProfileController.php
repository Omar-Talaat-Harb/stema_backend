<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function showProfile()
    {

        $userId = Auth::user()->id;
        $userData = User::find($userId);
        return view ('doctor.profile',compact('userData'));
    }

    public function updateProfile(Request $request)
    {
        // dd($request->all());
        $userId = Auth::user()->id;
        $updatetData = User::find($userId);

        // $validateData = $request-> validate([
        //     'oldpassword' =>'required',
        //     'newpassword' =>'required',
        //     'confirm_password' => 'required|same:newpassword'
        // ]);

        $updatetData ->update([

            'firstname' => $request -> firstname,
            'lastname' => $request -> lastname,
            'email' =>$request -> email,
            'nationalid' =>$request ->nationalid,
        ]);

        $hashedpassword = Auth::user()->password;
        
        if(Hash::check($request->oldpassword,$hashedpassword))
            {
                $updatetData->password = bcrypt($request->newpassword);
                $updatetData->save();

                // $notification = array(
                //     'message' => 'User Profile Updated Succesfully',
                //     'alert-type' => 'success',
                //  );
        
                return redirect()->route('showProfile')->with(['message' => 'updated successfuly']);
            
            } 
            else 
            {
                session()->flash('message','Old Password is not correct');
                return redirect()->back();
            }

        }  
}
