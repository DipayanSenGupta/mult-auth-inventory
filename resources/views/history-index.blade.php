@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">

  <table class="table table-striped">
    <thead>
        <tr>
          <td>Stock Name</td>
          <td>Stock Quantity</td>
          <td>Sales Person</td>
        </tr>
    </thead>
    <tbody>
        @foreach($histories as $history)
        <tr>
            <td>{{$history->name}}</td>
            <td>{{$history->quantity}}</td>
            <td>{{$history->person}}</td>
        </tr>
        @endforeach
    </tbody>
    {{ $histories->links() }}
</table>
<div>
@endsection