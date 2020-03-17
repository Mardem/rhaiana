<?php

namespace App\Http\Controllers\Principal;

use App\Models\Blog\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TreatmentController extends Controller
{
    public function __invoke($slug)
    {
        $post = Post::treatment()->where('slug', '=', $slug)->firstOrFail();
        $more = Post::where('category_id', $post->category_id)->limit(4)->inRandomOrder()->get();

        return view('principal.tratamentos', compact('post', 'more'));
    }
}

