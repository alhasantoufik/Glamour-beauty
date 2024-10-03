@extends('backend.master')


@section('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer Email</th>
      <th scope="col">Customer Mobile</th>
      <th scope="col">Customer Address</th>
      <!-- <th scope="col">Image</th>
      <th scope="col">Action</th> -->
    </tr>
  </thead>
  <tbody>
   @foreach ($customers as $customerInfo )
   <tr>
      <th>{{$customerInfo->id}}</th>
      <th>{{$customerInfo->name}}</th>
      <th>{{$customerInfo->email}}</th>
      <th>{{$customerInfo->phone}}</th>
      <th>{{$customerInfo->address}}</th>
      <!-- <th>{{$customerInfo->image}}</th>
      <th>Action</th> -->
    </tr>
   @endforeach
  </tbody>





@endsection