@extends('frontend.layouts.app')
@section('content')
<div class="box col-md-10 mx-auto shadow">
	<div class="box-head">
		<h3>cart</h3>
		@include('shared.errorsandmessages')
	</div>
	@isset($cartitems)
		<div class="box-body">
			<table class="table">
				<tbody>
					<thead>
					<tr>
						<th scope="col">Image</th>
						<th>Item name</th>
						<th>Item price</th>
						<th>Item quantity</th>
						<th>actions</th>
					</tr>
					</thead>
				</tbody>
				<tbody>
					@foreach($cartitems as $product)
					<tr>
						<td><img style="max-width: 50px;max-height: 50px;" src="{{asset("storage/$product->image")}}"></td>
						<td>{{$product->name}}</td>
						<td>K$hs{{$product->price}}.00</td>
						<td>{{$product->quantity}}</td>
						<td class="btn-group">
							<a href="" class="btn-sm">update</a>
							<a href="" class="btn-sm btn-danger">remove</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<a href="{{route('welcome')}}" class="btn btn-default btn-primary">new item to cart</a>
		</div>
		<table class="table my-2">
			<tr>
				<td scope="rowspan">Subtotal</td>
				<td>K$hs{{$subTotal}}.00</td>
			</tr>
			<tr>
				<td scope="rowspan">VAT</td>
				<td>12.5%</td>
			</tr>
			<tr>
				<th scope="rowspan">Total</th>
				<td>K$hs{{$Total}}.00</td>
			</tr>
		</table>
	@endif
	<div class="box-footer py-4">
		<strong>Pay Online <i class="fa fa-paypal"></i></strong>
		<form action="{{route('cart.checkout')}}" method="POST" class="form">
			@csrf
			<div class="form-group col-md-5">
				@guest
					<p class="text-success" role="alert">**you have to be signed in</p>
				@endguest
				<label for="payment">payment</label>
				<input type="text" class="form-control" name="payment" placeholder="{{ old('payment') }}">
			</div>
			<div class="btn-group">
				<button type="submit" class="btn btn-warning">CheckOut</button>
			</div>
		</form>
	</div>
</div>
@endsection
