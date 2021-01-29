@extends('layouts.app')

@section('content')
    <div class="container">
    <div class='row'>
    <div class='col-md-3 '>
    <img src='/instagram/instag.png'>
<div>
    @can('update',$user->profile)
     <a href="/profile/{{$user->id}}/edit">Edit  Profile</a>
    @endcan
</div>


   
    </div>
    
    <div class ='col-md-6'>
    
    <follow-button userid="{{$user->id}}" follows="{{$follows}}" ></follow-button>
    <div class="d-flex">
    <div class="pr-5" ><strong>{{$user->posts->count()}}</strong>Posts</div>
    <div class="pr-5"><strong>{{$user->profile->followers->count()}}</strong>Followers</div>
    <div class="pr-5"><strong>{{$user->following->count()}}</strong>Following</div>


    </div>
   
    
    <div>

    <h1>{{$user['username']}}</h1></div>
    <div>
    {{$user->profile->title}}

    </div>
    <div>{{$user->profile->description}}</div>
    </div>

    <div class='col-md-3'>

    @can('update',$user->profile)
    

    <a href="{{url('/p/create')}}">Create  Post</a>
    
    @endcan
     
    </div>
    </div>


    <div class='row'>
    @foreach($user->posts as $post)
    <div class='col-md-4'>
   <a href="/p/{{$post->id}}">
   <img src="/storage/{{$post->image}}">
   </a>
   </div>
    @endforeach
    </div>

    

 @endsection
