@extends('layouts.app')

@section('title', 'Blog App | Post')

@section('content')
	<div>
		<a href="{{route('posts.index')}}"> Volver a Posts </a>
		<h2>Titulo: {{$post->title}}</h2>
		<p>
			<b>Categoria: </b> {{$post->category}}
		</p>
		<p> {{$post->content}} </p>
		<a href="{{route('posts.edit', $post->id)}}"> Editar Post</a>
		
		<form action="{{route('posts.destroy', $post->id)}}" method="POST">
			@csrf
			@method('DELETE')
			<button type="submit">
				Eliminar Post
			</button>
		</form>
	</div>
	
@endsection