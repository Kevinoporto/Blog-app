@extends('layouts.app')

@section('title', 'Bog App | Create Post')

@section('content')
	<div>
		<h1>Formulario para editar un post</h1>
		<form action="{{route('posts.update', $post->id)}}" method="POST">

			@csrf
			@method('PUT')

			<label>
				Titulo:
				<input type="text" name='title', value="{{old('title', $post->title)}}"> 
			</label>
			@error('title')
				<p>{{$message}}</p>
			@enderror
			<br>
			<br>
			<label>
				Slug:
				<input type="text" name='slug', value="{{old('slug', $post->slug)}}"> 
			</label>
			@error('slug')
				<p>{{$message}}</p>
			@enderror
			<br>
			<br>
			<label>
				Categoria:
				<input type="text" name='category', value="{{old('category', $post->category)}}"> 
			</label>
			@error('category')
				<p>{{$message}}</p>
			@enderror
			<br>
			<br>
			<label>
				Contenido:
				<textarea name="content">{{old('content', $post->content)}}</textarea> 
			</label>
			@error('content')
				<p>{{$message}}</p>
			@enderror
			<br>
			<br>
			<button type="submit">
				Editar Post
			</button>
		</form>
	</div>
	
@endsection