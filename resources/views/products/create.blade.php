@extends("layouts.app")
@section('title', 'Crear Producto')
@section('description', 'Este es el formulario para crear un nuevo producto')
@section('font','list')
@section("content")
	@include('products.form',['url' =>'/products/create/', 'method' => 'POST'])
@endsection