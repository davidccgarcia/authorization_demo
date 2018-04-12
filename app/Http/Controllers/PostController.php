<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(20);

        return view('posts.index', compact('posts'));
    }

    public function edit($id)
    {
        $user = Auth::loginUsingId(1);
        $post = Post::findOrFail($id);

        if (Gate::denies('update_post', $post)) {
            abort(404);
        }

        return $post->title;
    }
}
