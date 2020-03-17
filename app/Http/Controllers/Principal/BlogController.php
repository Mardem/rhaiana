<?php

namespace App\Http\Controllers\Principal;

use App\Models\Blog\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class BlogController extends Controller
{
    public function index()
    {
        $posts = request()->get('q') != null ? Post::where('title', 'like', '%' . request()->get('q') . '%')->blog()->paginate(2) : Post::blog()->paginate(2);
        return view('principal.blog.partials.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', '=', $slug)->firstOrFail();
        $more = $post->category->posts()->limit(3)->inRandomOrder()->get();

        if(substr_count(request()->path(), 'blog') >= 1)
            $type = 'Blog';

        else
            $type = 'Tratamentos';

        return view('principal.blog.partials.show', compact('post', 'more', 'type'));
    }
}
