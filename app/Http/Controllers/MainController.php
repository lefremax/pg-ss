<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(User $user){

     $users = $user->pluck('users.id');
      $post = Profile::whereIn('user_id', $users)->orderBy('created_at', 'DESC')->paginate(20);
     
     // dd($post);

       return view('main.index', compact('post'));
     
       
    }
  
    

}
