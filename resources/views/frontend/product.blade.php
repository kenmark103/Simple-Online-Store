@extends('frontend.layouts.app')
@section('content')
@if($product)
<div class="container-fluid">
	@include('shared.errorsandmessages')
	<div class="row">
		<div class="col-md-5 mx-auto grid">
			<div class="col-md-12">
				<h4>{{$product->productname}}</h4>
				<img style="width: 100%;" src="{{asset("storage/$product->imagecover")}}" alt="">
			</div>
			<div class="col-md-12">
				<article>{{$product->productdescription}}</article>
				<label for="price"><b>{{$product->productprice}}.00</b></label>
				<a href="{{route('cart.add',$product->id)}}" class="btn btn-secondary col-md-8">add item to your cart</a>
			</div>
		</div>
	</div>
</div>
@endif
@endsection