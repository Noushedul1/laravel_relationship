<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\category_post;
use App\Models\CategoryPost;
use App\Models\Comment;
use App\Models\Customer;
use App\Models\Mobile;
use App\Models\Post;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function showcustomer()
    {
        // one to one 
        // $customers = Customer::all();
        // return $mobiles;
        // return view('show-view', ['customers'=>$customers]);

        // one to many 
        // $post = Post::find(3);
        // $post = Post::find(3)->comment;
        // $post = Post::all();
        // return $post;

        // $post = Post::with('comments')->get();
        // $comments = Comment::all();
        // return $post;
        // return view('show-view', ['comments'=>$comments]);

        // $comment = Comment::find(3);
        // $comment = Comment::find(6)->post;
        // $comment = Comment::all();
        // return $comment;

        $post = Post::with('categories')->get();
        return $post;
    }
}
