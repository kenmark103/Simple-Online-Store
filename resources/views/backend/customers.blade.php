@extends('backend.layouts.app')
@section('main')
<div class="box">
	<div class="box-head">
		<h3>My Customers</h3>
	</div>
	@isset($customers)
		<div class="box-body">
			<table class="table">
				<tbody>
					<tr>
						<th>name</th>
						<th>email</th>
						<th class="col-md-3">actions</th>
					</tr>
				</tbody>
				<tbody>
					@foreach($products as $product)
					<tr>
						<td><img src=""></td>
						<td>{{$customer->name}}</td>
						<td>{{$customer->email}}</td>
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