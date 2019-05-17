@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row">
    <div class="col-3 p-3">
        <img height="200"  class="rounded-circle" width="200px" src="https://cdn.shopify.com/s/files/1/0003/0890/4002/products/u5zcrCgDWz_1024x1024.jpg?v=1545069591">
    </div>
    <div class="col-9 p-3">
        <div class="d-flex justify-content-between align-items-baseline"> 
            <h1>{{ $user->username}}</h1>
            <a class="btn btn-info"> Add New Post </a>
         </div>
         <div class="d-flex">
            <div class="pr-5"> <strong>1500 </strong>posts </div>
            <div class="pr-5"> <strong>25M </strong>followers </div>
            <div class="pr-5" > <strong>212 </strong>following </div>
         </div>
         <div>{{ $user->profile->title }} </div>

         <div>{{ $user->profile->description }} </div>

         <div>{{ $user->profile->url }} </div>

         <div class="pt-3"> <a href="#">Hussam Adil </a></div>

    </div> 
 </div> 
 <div class="row">
    <div class="col-4">
    <img height="250"    width="250" src="https://cdn.shopify.com/s/files/1/0003/0890/4002/products/u5zcrCgDWz_1024x1024.jpg?v=1545069591">

    </div>
    <div class="col-4">
    <img height="250"    width="250" src="https://cdn.shopify.com/s/files/1/0003/0890/4002/products/u5zcrCgDWz_1024x1024.jpg?v=1545069591">

    </div>
    <div class="col-4">
    <img height="250"    width="250" src="https://cdn.shopify.com/s/files/1/0003/0890/4002/products/u5zcrCgDWz_1024x1024.jpg?v=1545069591">

    </div>
 </div>  
</div>
@endsection
