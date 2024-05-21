<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class ProfileController extends Controller
{
    public function profile(){
        return view('layouts.dashboard.profile.profile');
    }
    public function profilechg(Request $request){
        // error part
        $request->validate([
            'profile_photo' => 'required',
        ]);
        // error part
        // profile photo chg
        if ($request->hasFile('profile_photo')) {
            $manager = new ImageManager(new Driver());
            $new_name = Auth::user()->id . "." . $request->file('profile_photo')->getClientOriginalExtension();
            $image = $manager->read($request->file('profile_photo'))->resize(200,200);
            $image->toJpeg(80)->save(base_path('public/uploads/profile_photo/'.$new_name));

            User::find(Auth()->id())->update([
                'profile_photo' => $new_name,
            ]);
        }
        return back()->with('success','You Succcessfully Uploaded Your Profile Photo');
        // profile photo chg

    }

    // cover photo chg
        public function coverchg(Request $request){
        // error part
        $request->validate([
            'cover_photo' => 'required',
        ]);
        // error part
        // cover photo chg
        if ($request->hasFile('cover_photo')) {
            $manager = new ImageManager(new Driver());
            $new_name = Auth::user()->id . "." . $request->file('cover_photo')->getClientOriginalExtension();
            $image = $manager->read($request->file('cover_photo'))->resize(1600,451);
            $image->toJpeg(80)->save(base_path('public/uploads/cover_photo/'.$new_name));

            User::find(Auth()->id())->update([
                'cover_photo' => $new_name,
            ]);
        }
        return back()->with('successcover','You Succcessfully Uploaded Your Profile Photo');
        // cover photo chg

    }
    // cover photo chg
    // password change part
    public function passwordchg(Request $request){
        // error part
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);
        // error part
        // pass change
        if (Hash::check($request->old_password , auth()->user()->password)) {
            User::find(auth()->user()->id)->update([
               'password' => bcrypt($request->password),
            ]);
            return back()->with('successpass','You Successfully Changed Your Password');
        }else {
            return back()->withErrors('Password Did Not Match');
        }
        // pass change
    }
    // password change part
}
