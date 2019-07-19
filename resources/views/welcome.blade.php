@extends('layouts.app')

@section('content')
<div class="container">
@foreach ($posts as $post)
<div class="row">
        <div class="col-4 offset-4">
            <a href="/profile/{{ $post->user_id}}" >
                 <img  src="/storage/{{$post->image}}">
            </a>
        </div>
     </div>
     <div class="row">
            <div class="col-6">
                    <div class="d-flex align-items-center">
                   <div >
                            <img width="60px" class="rounded-circle" src="{{ $post->user->profile->profileImage() }}">
                   </div>
                  <h3 class="m-2"> <a class="text-dark" href="/profile/{{$post->user_id}}" style="text-decoration:none"> {{$post->user->username}} </a></h3>
                    <hr>
               </div>
               <div class="ml-4 mt-4">
                      <p>  {{$post->caption}} </p>
               </div>
                
            </div>
     </div>
 
   </div>
@endforeach
<div class="row">
    <div class="col-12 justify-content-center">
        {{ $posts->links() }}
    </div>
</div>
</div>
@endsection