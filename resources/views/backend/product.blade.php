@extends('backend.master')


@section('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Products Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Quantity</th>
      <th scope="col">Category</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($allItem as $key=>$item)

  
  <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->description}}</td>
      <td>{{$item->price}}</td>
      <td><img src="{{url('/upload/category/'.$item->image)}}" alt="Product Image"style="width: 90px;"></td>
      <td>{{$item->quantity}}</td>
      <td>{{$item->categoryRel->name}}</td>
      
      <td>
        <!-- <a class="btn btn-primary" href="">Add</a> -->
        <a class="btn btn-warning" href="{{route('product.edit',$item->id)}}">Edit</a>
        <a class="btn btn-danger"  href="{{route('product.delete',$item->id)}}">Delete</a>
        
      </td>
    </tr>
    
    @endforeach

  </tbody>

  <div>
  <a class="btn btn-primary" href="{{route('product.form')}}">Add Product</a>
  </div>



</table>

{{$allItem->links()}}
@endsection