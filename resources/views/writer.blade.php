@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Hi there, {{ Auth::user()->name }}
                </div>
                <form method="POST" action="{{ route('products.checkout') }}">
                {{ csrf_field() }}
                    <select name="item" class="form-control">
                        <option value="freemium">Freemium ($00.00/month)</option>
                        <option value="silver">Premium solo ($50.00/month)</option>
                        <option value="Golden">Premium spider ($80.00/month)</option>
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