@extends('frontend.master')

@section('content')

<style>
body {
    margin: 0;
    padding-top: 40px;
    color: #2e323c;
    background: #f5f6fa;
    font-family: 'Arial', sans-serif;
    height: 100%;
}

.account-settings .user-profile {
    margin-bottom: 1.5rem;
    padding-bottom: 1rem;
    text-align: center;
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.account-settings .user-profile .user-avatar {
    margin-bottom: 1rem;
}

.account-settings .user-profile .user-avatar img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
    font-weight: 600;
    color: #007ae1;
}

.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.9rem;
    font-weight: 400;
    color: #777;
}

.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}

.account-settings .about h5 {
    margin-bottom: 10px;
    color: #007ae1;
    font-size: 1rem;
}

.account-settings .about p {
    font-size: 0.9rem;
    color: #333;
}

.form-control {
    border: 1px solid #cfd1d8;
    border-radius: 5px;
    font-size: 0.875rem;
    background: #ffffff;
    color: #2e323c;
    padding: 10px;
    margin-bottom: 10px;
}

.card {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    border: 0;
    margin-bottom: 1.5rem;
    padding: 20px;
}

.card h1 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    color: #007ae1;
}

.table th, .table td {
    vertical-align: middle;
    padding: 12px;
}

.table th {
    font-weight: 600;
    color: #555;
}

.table td {
    color: #666;
}

.table .btn {
    padding: 5px 10px;
    font-size: 0.875rem;
}

.table .btn-danger {
    background-color: #e74c3c;
    border-color: #e74c3c;
    color: #fff;
}

.table .btn-warning {
    background-color: #f39c12;
    border-color: #f39c12;
    color: #fff;
}

.table .btn-danger:hover, .table .btn-warning:hover {
    opacity: 0.8;
}


</style>
<style type="text/css"> .notify{ z-index: 1000000; margin-top: 5%; } </style>

<!-- <div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
				</div>
				<h5 class="user-name">Name: {{auth('customerGuard')->user()->name}}</h5>
				<h6 class="user-email">Email: {{auth('customerGuard')->user()->email}}</h6>
			</div>
			<div class="about">
				<h5>Mobile</h5>
				<p>{{auth('customerGuard')->user()->mobile}}</p>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		
<h1>My Orders ({{ $orders->count() }})</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Order Number</th>
      <th scope="col">Receiver Name</th>
      <th scope="col">Total Price</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($orders as $order)
    <tr>
      <th scope="row">{{$order->id}}</th>
      <th scope="row">{{$order->receiver_name}}</th>
      <td>{{$order->total_amount}}</td>
      <td>{{$order->status}}</td>
      <td>
        <a href="{{route('view.invoice',$order->id)}}">View Order</a>
      </td>
      <td>
        <a href="{{route('delete.order',$order->id)}}" class="btn btn-danger">Delete</a>
      </td>
      <td>
        <a href="{{route('cancel.order',$order->id)}}" class="btn btn-warning">Cancel</a>
      </td>
    </tr>
    @endforeach
    
   
  </tbody>
</table>

	</div>
</div>
</div>
</div>
</div> -->

<div class="container">
    <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <div class="user-avatar">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                            </div>
                            <h5 class="user-name">Name: {{auth('customerGuard')->user()->name}}</h5>
                            <h6 class="user-email">Email: {{auth('customerGuard')->user()->email}}</h6>
                        </div>
                        <div class="about">
                            <h5>Mobile</h5>
                            <p>{{auth('customerGuard')->user()->mobile}}</p>
                        </div>

                        @foreach ($allCustomer as $data)

                        @endforeach
                        
                        <a href="{{route('profile.edit', $data->id)}}" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <h1>My Orders ({{ $orders->count() }})</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Order Number</th>
                                <th scope="col">Receiver Name</th>
                                <th scope="col">Total Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">View</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Cancel</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $key=>$order)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <th scope="row">{{$order->receiver_name}}</th>
                                <td>${{$order->total_amount}}</td>
                                <td>{{$order->payment_status}}</td>
                                <td>
                                    <a href="{{route('view.invoice',$order->id)}}" class="btn btn-primary">View Order</a>
                                </td>
                                <td>
                                    <a href="{{route('delete.order',$order->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                                <td>
                                    <a href="{{route('cancel.order',$order->id)}}" class="btn btn-warning">Cancel</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection