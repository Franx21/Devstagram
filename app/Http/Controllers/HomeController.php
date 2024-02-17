<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $ids = auth()->followings->pluck('id')->toArray();
        $posts = Post::whereIn('user_id', $ids)->paginate(20);
        return view('home', [
            'post' => $posts
        ]);
    }
}
