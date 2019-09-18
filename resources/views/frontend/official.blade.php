@extends('frontend.layouts.app')
@section('content')
<div class="wrapper">
    @include('shared.errorsandmessages')
    <div class="container-fluid">
        <div class="row">
            @isset($products)
                @foreach($products as $product)
                    <div class="col-md-3">
                        <a href="" class="image-product">
                            <img style="width: 100%;" src="{{asset("storage/$product->imagecover")}}" alt="">
                            <label for="name">{{$product->productname}}</label>
                            <article>{{$product->productdescription}}</article>
                        </a>
                        <a href="{{route('cart.add',$product->id)}}" class="btn btn-default">add to cart</a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    {{$products->links()}}
</div>
@endsection