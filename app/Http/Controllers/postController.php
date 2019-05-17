<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class postController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view('post.create');
    }
    public function store()
    {
        $data= request()->validate(['caption' => 'required','image' => 'required|image']);

        $imagePath = request('image')->store('uploads' , 'public');

        Auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath
        ]);
        return redirect('/profile/'.auth()->user()->id);
    }
}
