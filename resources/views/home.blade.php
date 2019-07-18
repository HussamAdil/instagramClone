@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row">
    <div class="col-3 p-3">
    <img height="200"  class="rounded-circle" width="200px" src="{{ $user->profile->profileImage() }}">
    </div>
    <div class="col-9 p-3">
        <div class="d-flex justify-content-between align-items-baseline"> 
           <div class=" d-flex  align-items-center pb-3"> 
               <div class="h4">{{ $user->username}} </div>
          
                <follow-Button></follow-Button>
           </div>
           </div>
          
         <div class="d-flex">
            <div class="pr-5"> <strong>{{$user->posts->count()}} </strong>posts </div>
            <div class="pr-5"> <strong>25M </strong>followers </div>
            <div class="pr-5" > <strong>212 </strong>following </div>
         </div>
         
         <div>{{ $user->profile->title }} </div>

         <div>{{ $user->profile->description }} </div>

         <div>{{ $user->profile->url }} </div>

         <div class="pt-3"> <a href="#">Hussam Adil </a></div>

         @can('update' , $user->profile)
         <a class="btn btn-primary" href="{{route('profile.edit' , $user->id)}}"> <i class="fa fa-edit"></i> Edit profile</a>
         <a class="btn btn-primary" href="{{route('post.create')}}"> <i class="fa fa-plus"></i>Add New Post </a>

         @endcan
    </div> 
 </div> 
 <div class="row">
       @foreach($user->posts as $post)
       <div class="col-4 p-1 mt-4">
       <a href="{{  route ('post.show' , $post->id) }}">
             <img  src="/storage/{{$post->image}}" width="300">
       </a>
        </div>

      @endforeach
 
 </div>  
</div>
@endsection
