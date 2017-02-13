@if ($product->hasLowStock())
	<p><span class="label label-warning">Low stock</span></p>
@elseif ($product->inStock())
	<p><span class="label label-info">In stock</span></p>
@else
	<p><span class="label label-danger">Out of stock</span></p>
@endif