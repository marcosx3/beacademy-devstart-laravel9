<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;


class PostController extends Controller
{
    protected $user;
    protected $post;
    
    public function __construct(User $user, Post $post)
    {
        $this->user = $user;
        $this->post = $post;
    }

    public function index($userId)
    {
      
        $posts = $this->posts()->all();
        return view('posts.index',compact('user','posts'));
    }

    public function show($userId)
    {
        if(!$user = $this->user->find($userId)){
                return redirect()->back();
        }
        $posts = $user->posts()->get();
        return view('posts.show',compact('user','posts'));
    }
}
