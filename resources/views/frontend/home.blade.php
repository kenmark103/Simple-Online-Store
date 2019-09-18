@extends('frontend.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Setup Account <i class="fa fa-paypal"></i>

                    <form action="" method="" class="form">
                        @csrf
                        <div class="form-group">
                            <label for="payment">paypal account number</label>
                            <input type="text" class="form-control" name="paypal" placeholder="{{ old('payment') }}">
                        </div>
                        <div class="form-group">
                            <label for="payment">security code</label>
                            <input type="text" class="form-control" name="security" placeholder="{{ old('security') }}">
                        </div>
                        <div class="btn-group">
                             <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
