<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;

class VerificarUserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $users = User::where('active','=',0)->get();
        return view('autenticate.index',compact('users'));
    }

    public function cargarfoto(){
        return view('autenticate.verificaridentidad');
    }


    public function verificarfotos(Request $request){


        $request->validate([
            'foto_dni' => 'required|image|max:2048',
            'file_dni' => 'required|image|max:2048',
        ]);

        $id = auth()->user()->id;
        $user = User::find($id);

        $f1 = $request->file('foto_dni')->store('public/verificarUser');
        $f2 = $request->file('file_dni')->store('public/verificarUser');

        $foto_dni = storage::url($f1);
        $file_dni = storage::url($f2);  
        
        $user->foto_dni = $foto_dni;
        $user->file_dni = $file_dni;

        $user->save();

        return redirect()->route('profile.edit',['user' =>  auth()->user()->id]);
            
    }

    public function verfotos($id){

        $user = User::findOrFail($id);
        return view('autenticate.verfoto',compact('user'));
    }

    public function activar($id){

        $user =  User::find($id);

        $user->active = 1;

        $user->save();

        $users = User::where('active','=',0)->get();
        return redirect()->route('menuverificar',compact('users'))->with('status','El Usuario esta activado');
    }
}
