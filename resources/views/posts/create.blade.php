@extends('layouts.app')

@section('title', 'Bog App | Create Post')

@section('content')
	<div>
		<h1>Formulario para crear un nuevo post</h1>

		<form action="{{route('posts.store')}}" method="POST">

			@csrf

			<label>
				Titulo:
				<input type="text" name='title' value="{{old('title')}}"> 
			</label>
			@error('title')
				<p>{{$message}}</p>
			@enderror
			<br>
			<br>
			<label>
				Slug:
				<input type="text" name='slug' value="{{old('slug')}}"> 
			</label>
			@error('slug')
				<p>{{$message}}</p>
			@enderror
			<br>
			<br>
			<label>
				Categoria:
				<input type="text" name='category' value="{{old('category')}}"> 
			</label>
			@error('category')
				<p>{{$message}}</p>
			@enderror
			<br>
			<br>
			<label>
				Contenido:
				<textarea name="content"> {{old('content')}} </textarea> 
			</label>
			@error('content')
				<p>{{$message}}</p>
			@enderror
			<br>
			<br>
			<button type="submit">
				Crear Post
			</button>
		</form>
	</div>
	
@endsection