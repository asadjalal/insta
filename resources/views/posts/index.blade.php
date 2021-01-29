@extends('layouts.app')

@section('content')
@foreach($ids as $id)
<h1><a href="/profile/{{$id->id}}"> {{$id->user->username}}</a></h1>

@endforeach

@foreach($posts as $post)
<div class="container">
<div class="row">

<div class="col-md-6 offset-3 padding-top=7px padding-bottom=5px ">

<img src="/storage/{{$post->image}}"class="w-100">
<div><a href="/profile/{{$post->user->id}}"><strong>{{$post->user->username}}</strong></a></div>
<div>
{{$post->caption}}
</div>
</div>
</div>
</div>
@endforeach
@foreach($ps as $p)
<a href="/profile/{{$p->id}}">  {{$p->username}}</a>

@endforeach


@endsection