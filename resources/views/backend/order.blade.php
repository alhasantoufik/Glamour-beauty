@extends('backend.master')


@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Order Id</th>
      <th scope="col">Customer name</th>
      <th scope="col">Receiver Name</th>
      <th scope="col">Receiver Mobile</th>
      <th scope="col">Status</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Order Date</th>
      <th scope="col">Receiver Address</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  @foreach ($orderlist as $key=> $item)
  <tbody>
    <td>{{$key+1}}</td>
    <td>{{$item->customer->name}}</td>
    <td>{{$item->receiver_name}}</td>
    <td>{{$item->receiver_mobile}}</td>
    <td>{{$item->status}}</td>
    <td>{{$item->total_amount}} .BDT</td>
    <td>{{$item->payment_method}}</td>
    <td>{{$item->created_at}}</td>
    <td>{{$item->receiver_address}}</td>
    <td>Action</td>
    <td></td>
  </tbody>
  @endforeach
</table>




@endsection