@extends('layouts.app')

@section('title', 'Blog App | Post')

@section('content')
	<div>
		<a href="http://localhost/laravel-projects/blog-app/public/posts"> Volver a Posts </a>
		<h2>Titulo: {{$post->title}}</h2>
		<p>
			<b>Categoria: </b> {{$post->category}}
		</p>
		<p> {{$post->content}} </p>
		<a href="http://localhost/laravel-projects/blog-app/public/posts/{{$post->id}}/edit"> Editar Post</a>
		
		<form action="http://localhost/laravel-projects/blog-app/public/posts/{{$post->id}}" method="POST">
			@csrf
			@method('DELETE')
			<button type="submit">
				Eliminar Post
			</button>
		</form>
	</div>
	
@endsection