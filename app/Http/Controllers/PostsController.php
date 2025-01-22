<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
	public function create(){
		return view('posts.create');
	}

	public function store(Request $req){
		$post = new Post();
		$post->title = $req->title;
		$post->category = $req->category;
		$post->content = $req->content;
		$post->save();
		return redirect('/posts');
	}

    public function index () {
		$posts = Post::orderBy('id', 'desc')->get();
		return view('posts.index', compact('posts'));
	}

	public function show($post) {
		$post = Post::find($post);
		return view('posts.show', [
			'post' => $post
		]);
	}

	public function edit($post){
		$post = Post::find($post);
		return view('posts.edit', compact('post'));
	}

	public function update(Request $req, $post){
		$post = Post::find($post);
		$post->title = $req->title;
		$post->category = $req->category;
		$post->content = $req->content;
		$post->save();
		return redirect("/posts/{$post->id}");
	}
}
