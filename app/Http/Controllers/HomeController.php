<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function home():Response
    {
        $posts = PostResource::collection(Post::paginate(6));
        return Inertia::render('Home',['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return Inertia::render('Posts/Show',['post'=>$post]);
    }
}
