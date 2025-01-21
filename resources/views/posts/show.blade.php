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
		
	</div>
	
@endsection