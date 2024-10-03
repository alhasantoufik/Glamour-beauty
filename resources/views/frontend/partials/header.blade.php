<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Header</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <style>
        /* General body styling */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        /* Header styling */
        #header {
            background-color: #ffffff;
            border-bottom: 1px solid #dee2e6;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .primary-nav {
            background-color: #007bff;
        }

        .navbar-brand img {
            max-width: 100%;
            height: auto;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            padding: 10px 15px;
            font-weight: 500;
            border-radius: .25rem;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            background-color: #0056b3;
        }

        .dropdown-menu {
            background-color: #ffffff;
            border-radius: .25rem;
        }

        .dropdown-item:hover {
            background-color: #f1f1f1;
        }

        .search-form input {
            border-radius: .25rem 0 0 .25rem;
            border: 1px solid #ced4da;
            padding: .5rem .75rem;
        }

        .search-form button {
            border: none;
            background-color: #007bff;
            color: #ffffff;
            border-radius: 0 .25rem .25rem 0;
            padding: .5rem .75rem;
            margin-left: -1px;
        }

        .search-form button:hover {
            background-color: #0056b3;
        }

        .modal-header {
            background-color: #007bff;
            color: #ffffff;
        }

        .modal-header .btn-close {
            filter: invert(1);
        }

        .modal-footer .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .modal-footer .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .glamour-grace {
  font-family: 'Georgia', serif; /* Elegant serif font */
  font-size: 24px; /* Larger font size for prominence */
  font-weight: bold; /* Bold text for emphasis */
  color: black; /* Dark text color for contrast */
  text-align: center; /* Center-align text */
  text-transform: uppercase; /* Uppercase text for a dramatic effect */
  background: linear-gradient(45deg, #f6d365, #fda085); /* Gradient background */
  -webkit-background-clip: text; /* Clip background to text */
  -webkit-text-fill-color: transparent; /* Transparent text color for gradient effect */
  padding: 10px 20px; /* Padding for spacing around text */
  border-radius: 10px; /* Rounded corners */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
  margin: 20px 0; /* Margin for spacing */
  position: relative; /* Relative positioning for pseudo-elements */
  overflow: hidden; /* Hide overflow for the pseudo-element effect */
}

.glamour-grace::before {
  content: ''; /* Empty content for pseudo-element */
  position: absolute; /* Absolute positioning */
  top: 50%; /* Center vertically */
  left: 50%; /* Center horizontally */
  width: 120%; /* Larger than the text */
  height: 120%; /* Larger than the text */
  background: rgba(255, 255, 255, 0.3); /* Light white overlay */
  transform: translate(-50%, -50%) rotate(-10deg); /* Center and rotate */
  z-index: 0; /* Place behind the text */
  border-radius: 50%; /* Circular shape */
}

.glamour-grace span {
  position: relative; /* Relative positioning for text */
  z-index: 1; /* Place above the pseudo-element */
}

.glamour-grace:hover {
  color: black; /* Change text color on hover */
  text-shadow: 0 2px 6px rgba(0, 0, 0, 0.3); /* Subtle shadow effect */
  transform: translateY(-5px); /* Slight lift on hover */
  transition: all 0.3s ease-in-out; /* Smooth transition */
}

    </style>
</head>
<body>
    <header id="header">
        <nav class="primary-nav navbar navbar-expand-lg navbar-dark">
        <h2 class="glamour-grace">Glamour & Grace</h2>

            <div class="container">
             
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home') }}">{{__('Home')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product') }}">Product</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                                @foreach ($categories as $cat)
                                    <li><a class="dropdown-item" href="{{ route('category.product', $cat->id) }}">{{ $cat->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('view.cart') }}">Cart</a>
                        </li>
                       
                        @guest('customerGuard')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('customer.login') }}" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#registrationModal">Register</a>
                            </li>
                        @endguest
                        @auth('customerGuard')
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ auth('customerGuard')->user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                                    <li><a class="dropdown-item" href="{{ route('view.profile') }}">Profile</a></li>
                                    <li><a class="dropdown-item" href="{{ route('customer.logout') }}">Logout</a></li>
                                </ul>
                            </li>
                            
                        @endauth
                    </ul>
                    <div class="search-form ms-3">
                        <form role="search" action="{{ route('search') }}">
                            <div class="input-group">
                                <input name="search_key" value="{{ request()->search_key }}" type="text" class="form-control" placeholder="Search here">
                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>

<!-- Registration Modal -->
<div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registrationModalLabel">New Customer Registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('customer.registration') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="customerName" class="form-label">Enter Your Name</label>
                        <input name="customer_name" required type="text" class="form-control" id="customerName" placeholder="Enter Your Name">
                    </div>
                    <div class="mb-3">
                        <label for="customerEmail" class="form-label">Enter Your Email</label>
                        <input name="customer_email" required type="email" class="form-control" id="customerEmail" placeholder="Enter Your Email">
                    </div>
                    <div class="mb-3">
                        <label for="customerPhone" class="form-label">Enter Your Phone Number</label>
                        <input name="customer_number" required type="text" class="form-control" id="customerPhone" placeholder="Enter Your Phone">
                    </div>
                    <div class="mb-3">
                        <label for="customerAddress" class="form-label">Enter Your Address</label>
                        <input name="customer_address" required type="text" class="form-control" id="customerAddress" placeholder="Enter Your Address">
                    </div>
                    <div class="mb-3">
                        <label for="customerPassword" class="form-label">Enter Your Password</label>
                        <input name="customer_password" required type="password" class="form-control" id="customerPassword" placeholder="Enter Your Password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Log In</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('customer.login') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Enter Your Email</label>
                        <input name="customer_email" required type="email" class="form-control" id="loginEmail" placeholder="Enter Your Email">
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Enter Your Password</label>
                        <input name="customer_password" required type="password" class="form-control" id="loginPassword" placeholder="Enter Your Password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
