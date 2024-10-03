@extends('frontend.master')

@section('content')
<style>
  body {
    background-color: #f8f9fa;
    color: #495057;
}

.container {
    max-width: 960px;
    margin-top: 30px;
}

h2.display-4 {
    color: #007bff;
}

.list-group-item {
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
}

.list-group-item.bg-light {
    background-color: #f8f9fa;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #004085;
}

.custom-control-input:checked ~ .custom-control-label::before {
    background-color: #007bff;
}

.form-check-label {
    font-weight: 400;
}

.invalid-feedback {
    display: block;
}

</style>
<style type="text/css"> .notify{ z-index: 1000000; margin-top: 5%; } </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container my-5">
        <div class="text-center mb-4">
            <h2 class="display-4 font-weight-bold">Checkout</h2>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your Cart</span>
                    <span class="badge bg-secondary rounded-pill">{{ count(session()->get('basket', [])) }}</span>
                </h4>
                <ul class="list-group mb-3">
                    @if ($myCart = session()->get('basket'))
                        @foreach ($myCart as $item)
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">{{ $item['product_name'] }}</h6>
                                </div>
                                <span class="text-muted">{{ $item['price'] }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-light">
                                <div class="text-success">
                                    <h6 class="my-0">Quantity</h6>
                                </div>
                                <span class="text-success">{{ $item['quantity'] }}</span>
                            </li>
                        @endforeach
                    @else
                        <li class="list-group-item">Your cart is empty.</li>
                    @endif
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (BDT)</span>
                        <strong>
                            {{ session()->has('basket') ? array_sum(array_column(session()->get('basket'), 'subtotal')) : '0' }}
                        </strong>
                    </li>
                </ul>
            </div>

            <div class="col-md-8">
                <form action="{{ route('order.place') }}" method="post" class="needs-validation" novalidate>
                    @csrf
                    <h4 class="mb-4">Billing Address</h4>

                    <div class="mb-3">
                        <label for="receiver_name" class="form-label">Receiver Name</label>
                        <input name="receiver_name" type="text" class="form-control" id="receiver_name" required>
                        <div class="invalid-feedback">
                            Please enter the receiver's name.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="you@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input name="address" type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                        <div class="invalid-feedback">
                            Please enter your address.
                        </div>
                    </div>

                    <hr class="my-4">

                    <h4 class="mb-4">Payment</h4>

                    <div class="form-check mb-3">
                        <input id="cod" name="paymentMethod" value="cod" type="radio" class="form-check-input" checked required>
                        <label class="form-check-label" for="cod">Cash on Delivery (COD)</label>
                    </div>
                    <div class="form-check mb-3">
                        <input id="online" name="paymentMethod" value="online" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="online">Online Payment</label>
                    </div>

                    <hr class="my-4">

                    <button class="btn btn-primary w-100" type="submit">Order Now</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Example of client-side validation
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>
</html>


@endsection