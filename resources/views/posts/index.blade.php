@extends('layouts.app')

@section('title', 'Bog App | Posts')

@section('content')
	<div>
		<a href="http://localhost/laravel-projects/blog-app/public/posts/create"> Crear un nuevo post </a>
		<h1>Posts</h1>
		<ul>
			@foreach ($posts as $post)
				<li>
					<a href="http://localhost/laravel-projects/blog-app/public/posts/{{$post->id}}">
						{{$post->title}}
					</a>
				</li>
			@endforeach
		</ul>
	</div>
	
@endsection