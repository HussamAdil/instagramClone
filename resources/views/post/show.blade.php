@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row">
     <div class="col-4">
            <img  src="/storage/{{$post->image}}">
     </div>
    <div class="col">
        <h3> {{$post->user->username}}</h3>
        {{$post->caption}}
    </div>
 </div>  
</div>
@endsection
