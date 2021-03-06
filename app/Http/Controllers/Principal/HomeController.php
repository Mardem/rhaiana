<?php

namespace App\Http\Controllers\Principal;

use App\Models\Blog\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::blog()->limit(3)->get();

        return view('principal.index', compact('posts'));
    }

    public function about()
    {
        return view('principal.sobre');
    }


}
