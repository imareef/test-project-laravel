<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Country;
use App\Models\Image;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $post = Post::find(1);

        // dd($post->tags); 

        // $tag = Tag::find(2);

        // dd($tag->posts); 
        // dd($tag->videos); 

        $tag = Tag::find(1);
        $post = Post::find(2);

        // $result = $post->tags()->save($tag);
        // dd($result);

        // $result = $post->tags()->attach($tag);
        // dd($result);

        // $result = $post->tags()->sync($tag);
        // dd($result);

        $result = $post->tags()->detach($tag);
        dd($result);

    }
}
