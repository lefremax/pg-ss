<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function index(User $user){

      $users = $user->pluck('users.id');
      $post = Profile::whereIn('user_id', $users)->orderBy('created_at', 'DESC')->paginate(20);
     

       return view('main.index', compact('post'));
    }
  
    public function postColombia(){

      // $post = DB::table('profiles')
      // ->where('pais','=','Colombia')
      // ->orderBy('created_at', 'DESC')
      // ->paginate(20)
      // ->get();

      // $pais= 'Colombia';
      // $post = DB::table('profiles')-> where('pais' , $pais)->get();
      // return view('main.index', compact('post'));
      
    }

}
