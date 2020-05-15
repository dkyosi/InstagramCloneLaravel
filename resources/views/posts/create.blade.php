@extends('layouts.app')

@section('content')
    <div class="container">
       <form action="/p" method="post" enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Add New Post</h1>
                    </div>
                    <div class="form-group row">
                        <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                            <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption">

                            @error('caption')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-md-4 col-form-label">Post Image</label>
                        <input type="file" name="image" id="image" class="form-control-file">
                             @error('image')
                                    <strong>{{ $message }}</strong>
                             @enderror
                     </div>

                     <div class="row pt-3">
                        <button class="btn btn-primary" type="submit">Add New Post</button>
                     </div>

            </div>
          </div>
       </div>
    </div>
@endsection
