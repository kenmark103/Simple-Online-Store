@extends('backend.layouts.app')
@section('main')
<div class="box col-md-11 box-shadow shadow-sm">
	<div class="box-head">
		<h3>Add new product</h3>
		 @include('shared.errorsandmessages')
	</div>
	<form class="form" method="POST" action="{{route('admin.products.store')}}" enctype="multipart/form-data" >
		<div class="box-body">
			@csrf
			<div class="form-group">
				<label for="">product name</label>
				<input type="text" name="product" class="form-control" value="{{ old('product') }}">
			</div>
			<div class="form-group">
				<label for="">product description</label>
				<textarea name="description" id="pdescription" rows="2" class="form-control" value="{{ old('description') }}"></textarea>
			</div>
			<div class="form-group">
				<label for="">price</label>
				<input type="text" name="price" class="form-control" value="{{ old('price') }}">
			</div>
			<div class="form-group">
				<label for="">quantity</label>
				<input type="text" name="quantity" class="form-control" value="{{ old('quantity') }}">
			</div>
			<div class="form-group">
				<label for="">type</label>
				<select name="type" id="type" class="form-control" value="{{ old('type') }}">
					@isset($categories)
						@foreach($categories as $category)
							<option value="{{$category->id}}">{{$category->categoryslug}}</option>
						@endforeach
					@endif
				</select>
			</div>
			<div class="form-group">
				<label for="">upload image</label>
				<input type="file" name="imagecover" class="form-control" value="{{ old('type') }}">
			</div>
		</div>
		<div class="box-footer py-3">
			<div class="btn-group">
				<a href="" class="btn btn-danger">back</a>
				<button type="submit" class="btn btn-primary">create item</button>
			</div>
		</div>
	</form>
</div>
@endsection