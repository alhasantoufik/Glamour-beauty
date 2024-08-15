@extends('backend.master')


@section('content')


<form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category Name</label>
    <input name="cat_name" type="text" class="form-control" id="store" placeholder="Enter Category Name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Price</label>
    <input name="cat_price" type="text" class="form-control" id="price" placeholder="Enter Price">
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Price</label>
    <input name="cat_image" type="file" class="form-control" id="price" placeholder="image">
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Add Category</button>
</form>































@endsection