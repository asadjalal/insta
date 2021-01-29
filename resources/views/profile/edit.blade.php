@extends('layouts.app')

@section('content')
<div class='container'>
<form action="/profile/{{$user->profile->id}}" enctype='multipart/form-data' method='post'>
<div class="row">
<h1>Edit Profile</h1>
</div>
<div class=" row">
@csrf
@method('PATCH')
                          
<div class="col-md-8 offset-2">
                            <label for="title" class="col-md-4 col-form-label ">{{ __('Title') }}</label>

                                <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title}}" required autocomplete="name" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-8 offset-2">
                            <label for="description" class="col-md-4 col-form-label ">{{ __('Description') }}</label>

                                <input id="description" name="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description')?? $user->profile->description }}" required autocomplete="name" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-8 offset-2">
                            <label for="url" class="col-md-4 col-form-label ">{{ __('Url') }}</label>

                                <input id="url" name="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url')?? $user->profile->url }}" required autocomplete="name" autofocus>

                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                </div>
                             
                                <div class='row'>




                     



                                <div class="row">
                                <div class="col-md-8 offset-2">
                              <button class="btn btn-primary">Edit</button>
                              </div>



                                </div>
                                </form>
                                </div>
@endsection