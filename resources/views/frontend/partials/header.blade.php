<style>
  .stellarnav>ul>li>a {
    padding: 10px 14px;
}
</style>
<header id="header">
      <div id="header-wrap">
      
        <nav class="primary-nav padding-small">
          <div class="container">
            <div class="row d-flex align-items-center">
              <div class="col-lg-1 col-md-1">
                <div class="main-logo">
                  <a href="#">
                    <img src="https://img.icons8.com/?size=100&id=JWv_lqo5fs4F&format=png&color=000000" alt="logo" width="50px" height="50px">
                    
                  </a>
                </div>
              </div>
              <div class="col-lg-10 col-md-10">
                <div class="navbar">

                  <div id="main-nav" style="z-index: 999;" class="stellarnav d-flex justify-content-end right">
                    <ul class="menu-list">

                      <li class="menu-item has-sub">
                        <a href="{{route('home')}}" class="item-anchor active d-flex align-item-center" data-effect="Home">Home<i class="icon icon-chevron-down"></i></a>
                       

                      <li><a href="{{route('product')}}" class="item-anchor" data-effect="About">Product</a></li>

                 

                      <!-- auto dropdown -->

                      <li>
                      <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Category
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="{{route('show.productMen')}}">Men</a>
                              <a class="dropdown-item" href="{{route('show.productWomen')}}">Women</a>
                              <a class="dropdown-item" href="{{route('show.productKid')}}">Kid</a>
                            </div>
                        </div>
                      </li>
                     
                      
                        <!-- auto dropdown end -->
                      

                      <li>
                        <a href="{{route('view.cart')}}" class="item-anchor" data-effect="Contact">Cart</a>
                      </li>



                      <li><a href="contact.html" class="item-anchor" data-effect="Contact">Contact</a></li>
                      
                     
                   @guest('customerGuard')
                   <li><a href="{{route('customer.login')}}" data-toggle="modal" data-target="#loginModal" class="item-anchor" data-effect="Contact">Login</a>
                   <li><a href="#" data-toggle="modal" data-target="#exampleModal" class="item-anchor" data-effect="Contact">Registration</a>
                   @endguest
                  
         
                      

                   @auth('customerGuard')
            
            <!-- Button trigger modal -->
            <span>
                <a href="{{route('view.profile')}}" style="color: black;">
                    {{ auth('customerGuard')->user()->name }}
                </a>
                
              </spa>
                     

            <!-- Button trigger modal -->
            &nbsp &nbsp
             <a href="{{route('customer.logout')}}" class="" > Logout </a>
          
          @endauth
             
           


                    </li>

                    </ul>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- Button trigger modal -->

<!--Registration Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Customer Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('customer.registration')}}" method="post" enctype="multipart/form-data"> 

        @csrf
      
    <div class="modal-body">   
      <div class="form-group">
      <label for="exampleInputEmail1">Enter Your Name</label>
      <input name="customer_name" required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name">
      </div>

      <div class="form-group">
      <label for="exampleInputEmail1">Enter Your Email</label>
      <input name="customer_email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
      </div>


      <div class="form-group">
      <label for="exampleInputEmail1">Enter Your Phone Number</label>
      <input name="customer_number" required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Phone">
      </div>


      <div class="form-group">
      <label for="exampleInputEmail1">Enter Your Address</label>
      <input name="customer_address" required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Address">
      </div>

      <div class="form-group">
      <label for="exampleInputEmail1">Enter Your Password</label>
      <input name="customer_password" required type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Password">
      </div>

    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Registration</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- login modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('customer.login')}}" method="post" enctype="multipart/form-data"> 

        @csrf
      
    <div class="modal-body">   
      

      <div class="form-group">
      <label for="exampleInputEmail1">Enter Your Email</label>
      <input name="customer_email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
      </div>


      <div class="form-group">
      <label for="exampleInputEmail1">Enter Your Password</label>
      <input name="customer_password" required type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Password">
      </div>

    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
      </form>
    </div>
  </div>
</div>
