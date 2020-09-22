<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function index(User $user){

      $users = User::Select('id')->where('active',1);
      $post = Profile::whereIn('user_id', $users)
      ->orderBy('created_at', 'DESC')->paginate(20);
     
       return view('main.index', compact('post'));
    }
  
    public function postColombia(){

      // $post = DB::table('profiles')
      // ->where('pais','=','Colombia')
      // ->orderBy('created_at', 'DESC')
      // ->paginate(20)
      // ->get();
    
      $pais= 'Colombia';
 
       $sel = User::Select('id')->where('pais','=',$pais)->where('active',1);
       $post = Profile::whereIn('user_id', $sel)->orderBy('created_at', 'DESC')->paginate(20);
     // dd($post);
       return view('main.index', compact('post'));
    
    }
    public function postPeru(){

      $pais= 'Peru';
      $sel = User::Select('id')->where('pais','=',$pais)->where('active',1);
       $post = Profile::whereIn('user_id', $sel)->orderBy('created_at', 'DESC')->paginate(20);
     // dd($post);
       return view('main.index', compact('post'));
    
    }
}
