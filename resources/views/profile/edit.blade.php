@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
                 <form action="{{route('profile.update' , $user->id )}}" enctype="multipart/form-data" method="post">
                     <h3 class="">Edit Profile</h3>

                     <div class="form-group row ">
                        @csrf
                        @method('PATCH')
                        <div class="col-md-6">

                             <label for="title" class="col-md-8 col-form-label ">{{ __('title') }}</label>

                            <input id="title"

                                   type="text" class="form-control @error('title') is-invalid @enderror" 
                                   
                                   name="title" value="{{ old('title')  ?? $user->profile->title}}" 
                                     autocomplete="title" autofocus>

                                     @error('title')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="description" class="col-md-8 col-form-label ">{{ __('description') }}</label>

                             <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}"   autocomplete="description" autofocus>
                             @error('description')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                         @enderror
                        </div>
                        <div class="col-md-6">
                                <label for="url" class="col-md-8 col-form-label ">{{ __('url') }}</label>

                                     <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url}}"  >
                                     @error('url')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror
                                    </div>
                                    @error('url')
                            <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                      </span>
                            @enderror
                        </div>
                    <div class="col-md-6">
                        <label for="image" class="col-md-8 col-form-label ">{{ __('Profile Image') }}</label>
                        <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image">
                    </div>
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                      </span>
                        @enderror
                    <div class="col-md-6 pt-2">

                    <input type="submit" class="col-3 btn btn-primary" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
