@extends('frontend.master')

@section('content')

<style type="text/css"> .notify{ z-index: 1000000; margin-top: 5%; } </style>

<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      @foreach ($allProduct as $product)
      <div class="col-md-4 col-lg-3 mb-4">
        <div class="card text-black">
          <a href="{{ route('show.product', $product->id) }}">
            <img src="{{ url('/upload/category/'.$product->image) }}" class="card-img-top" alt="products" />
          </a>
          <div class="card-body">
            <div class="text-center mt-1">
              <h4 class="card-title">{{ $product->name }}</h4>
              <h6 class="text-primary mb-1 pb-3">{{ $product->price }} .BDT</h6>
            </div>

            <div class="d-flex flex-row">
              <a href="{{ route('add.to.cart', $product->id) }}">
                <button type="button" class="btn btn-primary flex-fill me-1">Add Cart</button>
              </a>
              <a href="{{route('checkout')}}">
              <button type="button" class="btn btn-danger flex-fill ms-1">Buy now</button>
              </a>
              
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>









@endsection