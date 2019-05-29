@extends("layouts.app")
@section('title', 'Editar Producto')
@section('description', 'Este es el formulario para editar un producto')
@section('font','list')
@section("content")
	@include('products.form',['url' =>'/products/edit/'.$product->id, 'method' => 'POST'])
@endsection