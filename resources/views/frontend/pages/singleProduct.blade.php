@extends('frontend.master')

@section('content')

<style>
    /* Product Image Styles */
.product-image {
    width: 100%;
    border-radius: 0.5rem;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Price Styles */
.price {
    color: #ff5722; /* Modern orange color */
}

.original-price {
    text-decoration: line-through;
}

/* Quantity Input */
.quantity-input {
    max-width: 80px;
}

/* Button Styles */
.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #004085;
}

/* Card Styles */
.card {
    transition: transform 0.2s ease-in-out;
}

.card:hover {
    transform: translateY(-5px);
}

.card-img-top {
    object-fit: cover;
    height: 200px;
    border-radius: 0.5rem;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .product-image {
        width: 100%;
    }
}

@media (max-width: 576px) {
    .quantity-input {
        max-width: 60px;
    }
}

</style>
<style type="text/css"> .notify{ z-index: 1000000; margin-top: 5%; } </style>
<!-- Single Product View Section -->
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                <img class="product-image mb-5 mb-md-0" src="{{ url('/upload/category/' . $singleProduct->image) }}" alt="{{ $singleProduct->name }}">
            </div>
            <div class="col-md-6">
                <h1 class="display-5 fw-bolder">{{ $singleProduct->name }}</h1>
                <div class="price fs-5 mb-5">
                    <span class="">{{ $singleProduct->price }} .BDT</span>
                </div>
                <p class="lead">{{ $singleProduct->description }}</p>
                <div class="d-flex align-items-center">
                    <input class="form-control text-center me-3 quantity-input" id="inputQuantity" type="number" value="1">
                    <a href="{{ route('add.to.cart', $singleProduct->id) }}">
                        <button class="btn btn-primary" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Add to Cart
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products Section -->
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="fw-bolder mb-4">Related Products</h2>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach ($relatedProduct as $related)
                <div class="col-md-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <a href="{{ route('show.product', $related->id) }}">
                            <img class="card-img-top rounded-3" src="{{ url('/upload/category/' . $related->image) }}" alt="{{ $related->name }}">
                        </a>
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">{{ $related->name }}</h5>
                                <p class="price">{{ $related->price }} .BDT</p>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                            <a class="btn btn-outline-primary mt-auto" href="#">View Options</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
