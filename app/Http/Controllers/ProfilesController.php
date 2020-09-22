<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
  public function index($user)
  {
    $follows = (auth()->user()) ? auth()->user()->following->contains($user) : false;
     $user = User::findOrFail($user);

   return view('profile.index', compact('user','follows'));
  }

  public function edit(User $user)
  {
    $this->authorize('update', $user->profile);
    return view('profile.edit', ['user' => $user]);
  }

  public function update( Request $request, User $user)
  {
    $this->authorize('update', $user->profile);
    $data =  $request-> validate([
      'title' => 'required',
      'description' => 'required',
      'telefono' => '',
      'image' => '',
    ]);


   
   if(request('image')){
    $imagePath = request('image')-> store('profile','public');

    $image= Image::make(public_path("storage/{$imagePath}"));
    $image -> save();

    $imageArray=['image' =>$imagePath];
   }

   auth()->user()->profile->update(array_merge(
     $data,
     $imageArray ?? []
   ));

    return redirect("/profile/{$user->id}");
    
  }

}
