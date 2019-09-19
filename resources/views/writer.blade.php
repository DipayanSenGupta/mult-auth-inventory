@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Hi Sales person!
                    @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div><br />
                    @endif
                    <div class="">
                        <!-- <a href="{{ route('products.create') }}" class="btn btn-xs btn-info pull-right">Add Product to inventory</a> -->
                        <a href="{{ route('products.index') }}" class="btn btn-xs btn-info pull-right">Show inventory</a>
                        <a href="{{ route('products.checkout-index') }}" class="btn btn-xs btn-info pull-right">Checkout</a>

                        <!-- <a href="{{ route('products.history') }}" class="btn btn-xs btn-info pull-right">Show inventory history</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection