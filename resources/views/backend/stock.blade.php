@extends('backend.master')


@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Stock Product</th>
      <th scope="col">Stock Ammount</th>
      <!-- <th scope="col">Quantity</th> -->
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($allItem as $data)
  <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->stockProductName}}</td>
      <td>{{$data->stockProductQuantity}}</td>
      <td>
        <a class="btn btn-primary" href="">Add</a>
        <a class="btn btn-danger" href="">Delete</a>
        <a class="btn btn-warning" href="">Edit</a>
        
      </td>
    </tr>
    
    @endforeach

  </tbody>

  <div>
  <a class="btn btn-primary" href="{{route('stock.form')}}">Add Stock</a>
  </div>
</table>








@endsection