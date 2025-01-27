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

		$req->validate([
			'title' => 'required | min:5 | max:255',
			'slug' => 'required | min:5 | max:255 | unique:posts',
			'category' => 'required | min:5 | max:255',
			'content' => 'required | min:5 | max:255'
		]);

		$post = new Post();
		$post->title = $req->title;
		$post->slug = $req->slug;
		$post->category = $req->category;
		$post->content = $req->content;
		$post->save();
		return redirect('/posts');
	}

    public function index () {
		$posts = Post::orderBy('id', 'desc')->paginate(5);
		return view('posts.index', compact('posts'));
	}

	public function show(Post $post) {
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
		$req->validate([
			'title' => 'required | min:5 | max:255',
			'slug' => "required | min:5 | max:255 | unique:posts,slug,{$post->id}",
			'category' => 'required | min:5 | max:255',
			'content' => 'required | min:5 | max:255'
		]);
		$post = Post::find($post);
		$post->title = $req->title;
		$post->slug = $req->slug;
		$post->category = $req->category;
		$post->content = $req->content;
		$post->save();
		return redirect("/posts/{$post->slug}");
	}

	public function destroy($post){
		$post = Post::find($post);
		$post->delete();
		return redirect('/posts');
	}
}
