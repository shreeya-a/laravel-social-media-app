<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function addPost(Request $req)
    {
        $req->validate([
            'post' => 'required',
        ]);
        Post::create([
            'title' => $req->post,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $post= Post::find($id);
        return view('edit', ['post' => $post]);
    }
    public function editPost(Request $req)
    {
        $post = Post::find($req->id);
        $post->update([
            'title' =>$req->post,
        ]);
return redirect()->route('dashboard');

    }
    public function deletePost($id)
    {
        $post= Post::find($id);
        $post->delete();
        return redirect()->route('dashboard');

    }
}
