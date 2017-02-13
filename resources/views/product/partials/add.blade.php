<form action="{{ route('cart.index') }}" method="POST" class="form-inline">
	{!! csrf_field() !!}
	<input type="hidden" name="id" value="{{ $product->id }}">
	<input type="hidden" name="name" value="{{ $product->name }}">
	<input type="hidden" name="price" value="{{ $product->price }}">
	<input type="hidden" name="quantity" value="1">
	<button type="submit" class="btn btn-primary" @if ($product->outOfStock()) disabled @endif>
		Add to cart
</button>
</form>