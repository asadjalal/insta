<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class Postscontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $users= auth()->user()->following()->pluck('profiles.user_id');
        $posts=\App\Post::whereIn('user_id',$users)->orderBy('created_at','DESC')->get();
        $ids= auth()->user()->profile()->get();
        $ps= auth()->user()->get();

        return view('posts.index',compact('posts','ids','ps'));
    }


   public function create(){
       return view('posts.create');
   } //
   public function store(){
      

       $data = request()->validate([
           'caption' => 'required',
           'image'  => 'required',
       ]);
     
     $imagepath = request('image')->store('uploads','public');
     $image = Image::make(public_path("storage/{$imagepath}"))->fit(200,200);
     $image->save();
     auth()->user()->posts()->create([
         'caption'=> $data['caption'],
         'image' => $imagepath,
     ]);
     return redirect('/profile/'.auth()->user()->id);
    }
     public function show(\App\Post $post)
     {

      

     return view('posts.show',compact('post'));
    }
}
