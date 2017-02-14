{{ Form::open(['route' => 'cart.index', 'method' => 'post', 'class' => 'form-inline']) }}
	<input type="hidden" name="id" value="{{ $product->id }}">
	<input type="hidden" name="name" value="{{ $product->name }}">
	<input type="hidden" name="price" value="{{ $product->price }}">
	<input type="hidden" name="quantity" value="1">
	<button type="submit" class="btn btn-primary" @if ($product->outOfStock()) disabled @endif>
		Add to cart
	</button>
{{ Form::close() }}