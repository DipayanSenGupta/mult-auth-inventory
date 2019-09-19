@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Product Checkout</div>

                <div class="card-body">
                    Hi there, {{ Auth::user()->name }}
                </div>
                <form method="POST" action="{{ route('products.checkout') }}">
                    {{ csrf_field() }}
                    <select name="itemId" class="form-control">
                        @foreach($products as $product)
                            <option value="{{$product->id}}">{{$product->name}}</option>
                            @endforeach
                    </select>

                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control" name="quantity">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <input type="submit" value="Submit Form" />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection