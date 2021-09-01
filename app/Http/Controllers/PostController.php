<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    //
    public function index(){

        $search = request()->query('search');

        if($search){
            $posts = Post::whereHas('comments', function($query) use ($search)
            {
                $query->where('message', 'LIKE', "%{$search}%");
            })
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->withCount('comments')
            ->orderByDesc('comments_count')
            ->get();
        }
        else{
            $posts = Post::with('comments:message,post_id')
            ->withCount('comments')
            ->orderByDesc('comments_count')
            ->get();
        }
        return view('post.index',compact('posts'));
    }
}
