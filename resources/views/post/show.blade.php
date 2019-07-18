@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row">
     <div class="col-4">
            <img  src="/storage/{{$post->image}}">
     </div>
 
 <div class="col-6">
         <div class="d-flex align-items-center">
        <div >
                 <img width="60px" class="rounded-circle" src="{{ $post->user->profile->profileImage() }}">
        </div>
       <h3 class="m-2"> <a class="text-dark" href="/profile/{{$post->user_id}}" style="text-decoration:none"> {{$post->user->username}} </a></h3>
        <button class="ml-4 btn btn-primary"> Follow </button>
        <hr>
    </div>
    <div class="ml-4 mt-4">
           <p>  {{$post->caption}} </p>
    </div>
    <p>  
 </div> 
</div>
 
</div>
@endsection
