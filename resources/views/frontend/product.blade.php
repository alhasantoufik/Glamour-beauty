@extends('frontend.master')

@section('content')


@foreach ($allProduct as $product)

<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
        <div class="card text-black">
          <a href="{{route('show.product',$product->id)}}"><img src="{{url('/upload/category/'.$product->image)}}" class="card-img-top" alt="products" /></a>
          <div class="card-body">
            <div class="text-center mt-1">
              <h4 class="card-title">{{$product->name}}</h4>
              <h6 class="text-primary mb-1 pb-3">{{$product->price}}</h6>
            </div>

           
            <div class="d-flex flex-row">
              <a href="{{route('add.to.cart',$product->id)}}"><button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary flex-fill me-1" data-mdb-ripple-color="dark">
                Add Cart
              </button></a>
          
              <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger flex-fill ms-1">Buy now</button>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endforeach








@endsection