<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function home(){
        return view('addPost');
    }
    function allPosts()
    {
        $posts = Post::latest()->paginate(5);
        return view('allPost', compact('posts'));
    }
    function storePost(Request $request){
      
       //validation
     //  dd($request->title);
       $request->validate([
           'title' => 'required|min:5',
           'detail' => 'required|max:100',
       ],
       [
        'title.min'=>"please enter min of 5 char",
       ],
    );


    //*StoRe data
     $post = new Post();
     $post->title = $request->title;
     $post->detail = $request->detail;
     $post->author = $request->author;
     $post->save();
     return back()->with('msg', 'the post inserted succesfully');



    }

    function deletepost($id){
      //  Post::get()->delete();
      $post = Post::findOrFail($id);
      $post->delete(); return back();
    }

    function editpost($id){
        $post = Post::find($id); 
      //  dd($post);
          return view('edit', compact('post'));
      }
}
