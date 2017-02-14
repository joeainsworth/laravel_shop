@extends('templates/app')

@section('title', 'Cart' )

@section('content')
	<div class="container">
		<h1>Cart</h1>
		@if (sizeof(Cart::content()) > 0)
			<table class="table">
				<thead>
					<tr>
						<th colspan="2">Item</th>
						<th>Price</th>
						<th colspan="2">Quantity</th>
						<th>Total</th>
					</tr>
				</thead>
				@foreach (Cart::content() as $item)
				<tbody>
					<tr>
						<td><img src="{{ $item->model->image }}" alt="{{ $item->model->name }}" class="img-responsive" style="max-width: 100px;"></td>
						<td>{{ $item->model->name }}</td>
						<td>{{ showCurrency($item->model->price) }}</td>
						<td>{{ $item->qty }}</td>
						<td>
							{{ Form::open(['route' => ['cart.destroy', $item->rowId], 'method' => 'delete', 'class' => 'form-inline']) }}
								<button type="submit" class="btn btn-link btn-sm">remove</button>
							{{ Form::close() }}
						</td>
						<td>{{ showCurrency($item->qty * $item->model->price) }}</td>
					</tr>
				</tbody>
				@endforeach
			</table>
			{{ Form::open(['route' => 'cart.empty', 'method' => 'delete']) }}
				<button type="submit" class="btn btn-default">Empty cart</button>
			{{ Form::close() }}
		@else
			<p>Looks like you've got nothing in your cart, start <a href="{{ route('index') }}">shopping</a> to add items to your cart.</p>
		@endif
	</div>
@endsection