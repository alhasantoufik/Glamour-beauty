@extends('backend.master')



@section('content')








<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category Name</th>
      <th scope="col">Category Parent</th>
      <th scope="col">Details</th>
      <!-- <th scope="col">Quantity</th> -->
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($allItem as $item)

    
     
  
  <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->parent_id}}</td>
      <td>{{$item->details}}</td>
      <td>
        <a class="btn btn-danger" href="{{route('category.delete',$item->id)}}">Delete</a>
        
        
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