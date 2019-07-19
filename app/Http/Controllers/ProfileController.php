<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index(User $user)

    { 
        $follows = ( auth()->user() )  ? auth()->user()->following->contains($user->id) : false;
        
        return view('home' , compact('user' ,'follows'));

    }

    public function edit( User $user)
    { 
        $this->authorize('update', $user->profile); 

        return view('profile.edit' , compact('user'));

    }

    public function update( User $user ,Request $request)
    {
       $this->authorize('update', $user->profile); 

        $date  = request()->validate([

            'title' =>'required',

            'description' =>'required',

            'url' => 'required|url',
            'image' => ''

            ]);
             if($request->hasFile('image'))
            {
                $imagePath = request('image')->store('profile' , 'public');

                $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
        
                $image->save();

               $imagArray = ['image' => $imagePath] ;
            }

       auth()->user()->profile->update(array_merge($date , $imagArray ??  []));

      return redirect("/profile/{$user->id}");

     }
}
