@extends('backend.master')


@section('content')



<form action="{{route('stock.store')}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Stock Name</label>
    <input name="stock_name" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Stock Name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Stock Amount</label>
    <input name="stock_amount" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Stock Amount">
  </div>
  
  <button type="submit" class="btn btn-primary">Add Stock</button>
</form>












@endsection