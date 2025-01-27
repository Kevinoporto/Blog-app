@extends('layouts.app')

@section('title', 'Bog App | Create Post')

@section('content')
	<div>
		<h1>Formulario para crear un nuevo post</h1>
		<form action="{{route('posts.store')}}" method="POST">

			@csrf

			<label>
				Titulo:
				<input type="text" name='title'> 
			</label>
			<br>
			<br>
			<label>
				Slug:
				<input type="text" name='slug'> 
			</label>
			<br>
			<br>
			<label>
				Categoria:
				<input type="text" name='category'> 
			</label>
			<br>
			<br>
			<label>
				Contenido:
				<textarea name="content"></textarea> 
			</label>
			<br>
			<br>
			<button type="submit">
				Crear Post
			</button>
		</form>
	</div>
	
@endsection