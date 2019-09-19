@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Hi boss!
                    <div class="">
                    <a href="{{ route('products.create') }}" class="btn btn-xs btn-info pull-right">Add Product to inventory</a>
                    <a href="{{ route('products.index') }}" class="btn btn-xs btn-info pull-right">Show inventory</a>
                    <a href="{{ route('products.history') }}" class="btn btn-xs btn-info pull-right">Show inventory history</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
