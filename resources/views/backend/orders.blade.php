@extends('backend.layouts.app')
@section('main')
<div class="box">
	<div class="box-head">
		<h3>Orders</h3>
	</div>
	@isset($orders)
		<div class="box-body">
			<table class="table">
				<tbody>
					<tr>	
						<th>Order number</th>
						<th>Customer name</th>
						<th>Date created</th>
						<th>Amount paid</th>
						<th>View items</th>
						<th class="col-md-2">actions</th>
					</tr>
				</tbody>
				<tbody>
					@forach($products as $product)
					<tr>
						<td>{{$order->number}}</td>
						<td>{{$order->customer->name}}</td>
						<td>{{$order->//date}}</td>
						<td>{{$order->amount}}</td>
						<td><a href="">click to view items</a></td>
						<td class="btn-group">
							<a href="" class="btn btn-sm btn-danger">delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	@endif
	<div class="box-footer">
		<a href="">back</a>
	</div>
</div>
@endsection