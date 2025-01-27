@extends('layouts.app')

@section('title', 'Bog App | Posts')

@section('content')
	<div>
		<a href="{{route('posts.create')}}"> Crear un nuevo post </a>
		<h1>Posts</h1>
		<ul>
			@foreach ($posts as $post)
				<li>
					<a href="{{route('posts.show', $post)}}">
						{{$post->title}}
					</a>
				</li>
			@endforeach
		</ul>
		{{ $posts->links() }}
	</div>
	
@endsection