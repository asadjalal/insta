@extends('layouts.app')

@section('content')
<div class='container'>
<form action="/p" enctype='multipart/form-data' method='post'>
<div class="row">
<h1>Add New Post</h1>
</div>
<div class=" row">
@csrf
                            <div class="col-md-8 offset-2">
                            <label for="caption" class="col-md-4 col-form-label ">{{ __('Caption') }}</label>

                                <input id="caption" name="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="name" autofocus>

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                </div>
                                <div class='row'>
                                <div class='col-md-8 offset-2'>
                            <label for="image" class="col-md-4 col-form-label ">{{ __('Image') }}</label>
                              
                               <input type='file' name="image" class='form-cntrol-file' id='image' name='image'>
                               @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               </div>
                                </div>
                                <div class="row">
                                <div class="col-md-8 offset-2">
                              <button class="btn btn-primary">Add Post</button>
                              </div>
                                </div>
                                </form>
                                </div>
@endsection