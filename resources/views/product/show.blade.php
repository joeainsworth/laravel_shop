@extends('templates/app')

@section('title', $product->name )

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-responsive">
			</div>
			<div class="col-md-6">
				<h1>{{ $product->name }}</h1>

				@include('product.partials.stock')

				<p>{{ $product->description }}</p>

				@include('product.partials.add')
			</div>
		</div>
	</div>
@endsection