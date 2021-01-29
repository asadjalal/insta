<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profilecontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }//

   
    public function index(\App\User $user)
    {
     

     $follows= (auth()->user())?auth()->user()->following->contains($user->id):false;

        return view('profile.index',compact('user','follows'));
    }

public function edit(\App\User $user){
    
    $this->authorize('update',$user->profile);
    return view('profile.edit',compact('user'));

}
public function update(\App\User $user ){
    
    $this->authorize('update',$user->profile);

    
    
    
    $data = request()->validate([
        'title'=>'required',
        'description'=>'required',
        'url'=>'url',
    ]);
    $user->profile->update($data);
    return redirect('/profile/'.auth()->user()->id);
}

}
