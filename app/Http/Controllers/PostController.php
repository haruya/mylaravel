<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Input;
use App\models\Post;

class PostController extends Controller {
	public function create() {
		return view('posts.create');
	}

	public function store() {
		Post::create(Input::all());
		return redirect('posts');
	}

	public function index() {
		$posts = Post::all();
		return view('posts.index')->with('posts', $posts);
	}

	public function show($postid) {
		$post = Post::find($postid);
		return view('posts.show')->with('post', $post);
	}

	public function edit($postid) {
		$post = Post::find($postid);
		return view('posts.edit')->with('post', $post);
	}

	public function update($postid) {
		$post = Post::find($postid);
		$post->fill(Input::all());
		$post->save();
		return redirect()->route('posts.show',[$postid]);
	}

	public function destroy($postid) {
		Post::find($postid)->delete();
		return redirect()->route('posts.index');
	}
}