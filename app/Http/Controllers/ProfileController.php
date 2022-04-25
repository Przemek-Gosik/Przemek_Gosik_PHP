<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index(){
        return view('profil',array('user'=>Auth::user()));
    }
    public function update(Request $request){
        $this->validate($request, [
        'profilepic' => 'mimes:jpeg,png,bmp,tiff |max:4096',
        ],
        $messages = [
            'mimes' => 'Only jpeg, png, bmp,tiff are allowed.'
        ]
    );
        if($request->hasFile('profilepic')){
            $profilepic = $request->file('profilepic');
            $filename = time().'.'.$profilepic->getClientOriginalExtension();
            Image::make($profilepic)->resize(300,300)->save( public_path('/uploads/profilepics/'.$filename));
            $user = Auth::user();
            $user->profilepic = $filename;
            $user->save();
        }
        return view('/profil',array('user'=>Auth::user()));
    }
}
