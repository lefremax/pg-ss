<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __Construct(){

     $this->middleware('auth');
    }

    
    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        $data =  $request-> validate([
            'caption' =>'',
            'image'   => ['required','image'],
        ]);

        $imagePath = request('image')-> store('uploads','public');

        $image= Image::make(public_path("storage/{$imagePath}"))->fit(900, 1500);
        $image -> save();

        Auth()->user()->posts()->create([
            'caption' =>$data['caption'],
            'image' => $imagePath,
        ]);
   
        return redirect('/profile/' . auth()->user()->id);
    }


    public function destroy($id) {
        $post = Post::find($id);
        $post->delete();
       
       
        return redirect('/profile/' . auth()->user()->id);
    
      }
    
}
