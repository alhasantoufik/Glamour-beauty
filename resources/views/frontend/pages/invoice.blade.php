@extends('frontend.master')

@section('content')

<style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f5f6fa;
    color: #333;
    margin-top: 20px;
}

.container {
    margin-top: 50px;
}

.btn-success {
    margin-bottom: 20px;
    background-color: #28a745;
    border-color: #28a745;
    color: #fff;
    font-weight: bold;
}

.card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.card-header {
    background-color: #007ae1;
    color: #fff;
    padding: 15px;
    border-bottom: 1px solid #ddd;
    font-size: 18px;
    font-weight: bold;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.card-body {
    padding: 20px;
}

h6 {
    font-weight: bold;
    margin-bottom: 10px;
    color: #007ae1;
}

.table {
    margin-top: 20px;
    margin-bottom: 20px;
    width: 100%;
}

.table thead {
    background-color: #007ae1;
    color: #fff;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: #f9f9f9;
}

.table td, .table th {
    padding: 12px;
    vertical-align: middle;
    border-top: 1px solid #dee2e6;
}

.table .center {
    text-align: center;
}

.table .right {
    text-align: right;
}

.table .left {
    text-align: left;
}

.table img {
    max-width: 50px;
    border-radius: 5px;
}

.table-clear td {
    border: 0;
    padding-top: 20px;
}

.table-clear td.left {
    text-align: right;
}

.table-clear td.right {
    font-weight: bold;
    font-size: 16px;
}

.ml-auto {
    margin-left: auto;
}

.float-right {
    float: right;
}

</style>
<style type="text/css"> .notify{ z-index: 1000000; margin-top: 5%; } </style>

<div class="container">
    <button class="btn btn-success" onClick="printReport()">Print</button>

    <!-- Print area start -->
    <div class="card" id="printArea">
        <div class="card-header">
            Invoice
            <strong>{{ $order->created_at->format('F j, Y') }}</strong>
            <span class="float-right"><strong>Status:</strong> {{ $order->payment_status }}</span>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h6>From:</h6>
                    <div><strong>Kodeeo Limited</strong></div>
                    <div>House 34, Road 2, Nikunja, Dhaka</div>
                    <div>Email: info@kodeeo.com</div>
                    <div>Phone: +8801854969654</div>
                </div>

                <div class="col-sm-6">
                    <h6>To:</h6>
                    <div><strong>{{ $order->receiver_name }}</strong></div>
                    <div>{{ $order->receiver_address }}</div>
                    <div>Email: {{ $order->receiver_email }}</div>
                    <div>Phone: {{ $order->receiver_mobile }}</div>
                </div>
            </div>

            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="center">Serial</th>
                            <th>Item</th>
                            <th class="right">Product Name</th>
                            <th class="center">Price</th>
                            <th class="center">Quantity</th>
                            <th class="right">Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->orderDetails as $item)
                        <tr>
                            <td class="center">{{ $loop->iteration }}</td>
                            <td class="center">
                                <img style="width: 50px;" src="{{ url('/upload/category/'.$item->product->image) }}" alt="{{ $item->product->name }}">
                            </td>
                            <td class="right">{{ $item->product->name }}</td>
                            <td class="center">BDT.{{ number_format($item->product_unit_price, 2) }}</td>
                            <td class="center">{{ $item->product_quantity }}</td>
                            <td class="right">BDT.{{ number_format($item->subtotal, 2) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-5 ml-auto">
                    <table class="table table-clear">
                        <tbody>
                            <tr>
                                <td class="left">
                                    <strong>Total</strong>
                                </td>
                                <td class="right">
                                    <strong>BDT. {{ number_format($order->total_amount, 2) }}</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Print area end -->
</div>

<script type="text/javascript">
    function printReport() {
        var printContents = document.getElementById("printArea").innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

@endsection