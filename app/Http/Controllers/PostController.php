<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Input;
use DB;

class PostController extends Controller {
    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        DB::table('posts')->insert([
            'title' => Input::get('title'),
            'body' => Input::get('body')
        ]);
        return redirect('posts');
    }

    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('posts.index')->with('posts', $posts);
    }

    public function show($postid)
    {
        $post = DB::table('posts')->where('id', $postid)->first();
        return view('posts.show')->with('post', $post);
    }
}