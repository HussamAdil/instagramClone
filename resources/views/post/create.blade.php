@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row">
 <div class="col-8 offset-2">
    <form action="{{route('post.store')}}" enctype="multipart/form-data" method="post">
    <div class="form-group row ">
            @csrf
          <label for="caption" class="col-md-8 col-form-label ">{{ __('caption') }}</label>

             <div class="col-md-6">
                 <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"   autocomplete="caption" autofocus>

                   @error('caption')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                      </span>
                    @enderror
             </div>
             <label for="Image" class="col-md-8 col-form-label ">{{ __('Image') }}</label>
                <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}"   autofocus>

                   @error('image')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                      </span>
                    @enderror

        </div>
        <input type="submit" class="btn btn-primary" value="Add Post">
    </form>
    </div>
 </div>  
</div>
@endsection
