@extends('frontend.master')


@section('content')

<style>
  body {
    background-color: #f8f9fa;
    font-family: 'Arial', sans-serif;
    color: #333;
}

.container {
    margin-top: 50px;
}

h1.fw-normal {
    font-weight: 600;
    color: #007ae1;
    margin-bottom: 30px;
}

.btn-danger a {
    color: #fff;
    text-decoration: none;
}

.btn-danger a:hover {
    text-decoration: underline;
}

.card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
}

.card-body {
    padding: 20px;
}

.card img {
    width: 100%;
    max-width: 120px;
    border-radius: 10px;
}

.lead.fw-normal {
    font-weight: 600;
    color: #007ae1;
}

.text-muted {
    color: #6c757d !important;
}

.form-control-sm {
    width: 70px;
    margin: 0 10px;
}

.btn-link {
    color: #007ae1;
}

.btn-link:hover {
    color: #0056b3;
}

h5.mb-0 {
    font-weight: 600;
    color: #28a745;
}

.btn-warning {
    background-color: #ffc107;
    border-color: #ffc107;
    color: #fff;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.btn-warning:hover {
    background-color: #e0a800;
    border-color: #d39e00;
}

.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
}

.btn-danger:hover {
    background-color: #c82333;
    border-color: #bd2130;
}

.text-center {
    text-align: center;
    color: #dc3545;
    margin-top: 20px;
    font-weight: bold;
}

hr {
    margin: 20px 0;
}

</style>
<style type="text/css"> .notify{ z-index: 1000000; margin-top: 5%; } </style>

<section class="h-100">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h1 class="fw-normal mb-0">Shopping Cart</h1>
          <div class="btn btn-danger">
           <a href="{{route('cart.clear')}}">Clear All</a>
          </div>
        </div>

        @if(count($myCart) > 0)
        @foreach ($myCart as $cartData)
       
        <div class="card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img src="{{url('/upload/category/'.$cartData['image'])}}" class="img-fluid rounded-3" alt="product image">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2">{{ $cartData['product_name'] }}</p>
                <p><span class="text-muted">Price:</span> BDT {{ number_format($cartData['price'], 2) }}</p>
              </div>
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                 
                 <form action="{{route('update.cart',$cartData['product_id'])}}" method="post">  
                   @csrf
                     <input id="form1" min="0" name="quantity" value="{{$cartData['quantity']}}" type="number"
                       class="form-control form-control-sm" />
                   <button class="btn btn-primary active" type="submit"> Update</button>
                     </form>
   
                 </div>
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h5 class="mb-0">BDT {{ number_format($cartData['subtotal'], 2) }}</h5>
              </div>

            

              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                <a href="{{route('cart.item.delete',$cartData['product_id'])}}" class="btn btn-danger text-white">Delete</a>
              </div>
            </div>
          </div>
        </div>

        @endforeach
        <hr>

        <div class="d-flex justify-content-between">
          <div class="text-end">
            <p><strong>Total:</strong> BDT {{ number_format(array_sum(array_column(session()->get('basket'),'subtotal')), 2) }}</p>
            <a href="{{route('checkout')}}" class="btn btn-warning btn-block btn-lg">Proceed to Checkout</a>
          </div>
        </div>
        @else
        <div class="text-center">
          <p>Your cart is empty</p>
        </div>
        @endif

      </div>
    </div>
  </div>
</section>


@endsection