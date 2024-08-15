@extends('backend.master')



@section('content')








<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Category Name</th>
      <th scope="col">Price</th>
      <!-- <th scope="col">Quantity</th> -->
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($allItem as $item)

    
     
  
  <tr>
      <th scope="row">{{$item->id}}</th>
      <td><img src="{{url('/upload/category/'.$item->image)}}" alt=""style="width: 90px;"></td>
      <td>{{$item->name}}</td>
      <td>{{$item->price}}</td>
      <td>
        <a class="btn btn-primary" href="">Add</a>
        <a class="btn btn-danger" href="">Delete</a>
        <a class="btn btn-warning" href="">Edit</a>
        
      </td>
    </tr>
    
    @endforeach

  </tbody>

  <div>
  <a class="btn btn-primary" href="{{route('category.form')}}">Add Category</a>
  </div>
</table>

{{$allItem->links()}}


@endsection