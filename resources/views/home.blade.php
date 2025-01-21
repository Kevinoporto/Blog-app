@extends('layouts.app')

@section('title', 'Blog App')

@push('css')
	<style>
		body{
			background-color: #f3f3f3;
		}
	</style>
@endpush

@section('content')
	<div>
		<x-alert type="success">
			<x-slot name='title'>
				Hablame manito 
			</x-slot>
			Qloq!
		</x-alert>
	</div>
	
@endsection