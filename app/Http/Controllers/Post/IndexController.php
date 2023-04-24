<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::orderBy('title')->paginate(3);
        $randomPosts = Post::get()->random(3);
        $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(3);
        return view('post.index', compact('posts', 'randomPosts', 'likedPosts'));
    }
}
