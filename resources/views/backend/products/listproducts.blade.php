@extends('backend.layouts.app')
@section('main')
<div class="box">
	<div class="box-head">
		<h3>My Products</h3>
	</div>
	@isset($products)
		<div class="box-body">
			<table class="table">
				<tbody>
					<thead>
					<tr>
						<th scope="col">Image</th>
						<th>Item name</th>
						<th>Item price</th>
						<th>Item amount</th>
						<th>Item description</th>
						<th>actions</th>
					</tr>
					</thead>
				</tbody>
				<tbody>
					@foreach($products as $product)
					<tr>
						<td><img style="width: 150px;max-height: 150px;" src="{{asset("storage/$product->imagecover")}}"></td>
						<td>{{$product->productname}}</td>
						<td>K$hs{{$product->productprice}}</td>
						<td>{{$product->quantity}}</td>
						<td>{{$product->productdescription}}</td>
						<td class="btn-group">
							<a href="" class="btn btn-sm btn-default">edit</a>
							<a href="" class="btn btn-sm btn-danger">delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{$products->links()}}
		</div>
	@endif
	<div class="box-footer py-4">
		<div class="btn-group"></div>
		<a href="" class="btn btn-default">back</a>
		<a href="{{route('admin.products.create')}}" class="btn btn-default btn-primary">new item to store</a>
	</div>
</div>
@endsection