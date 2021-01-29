@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-4 offset-4">
{{$post->caption}}
<img src="/storage/{{$post->image}}">
<a href="#">Follow</a>
</div>
</div>
</div>
@endsection