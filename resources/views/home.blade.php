@extends('templates/app')

@section('title', 'Home')

@section('content')
	<div class="container">
		@foreach ($products->chunk(4) as $items)
			<div class="row">
				@foreach ($items as $product)
					<div class="col-md-3">
						<div class="thumbnail">
							<img src="{{ $product->image }}" class="image-responsive">
							<div class="caption">
								<h4>{{ $product->name }}</h4>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		@endforeach
	</div>
@endsection