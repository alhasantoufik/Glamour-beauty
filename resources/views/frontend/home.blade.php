@extends('frontend.master')

@section('content')



<body>
  
<style>
  .swiper {
  width: 100%;
  height: auto;
}

.swiper-slide {
  delay: 1000px;
  display: flex;
  justify-content: center;
  flex: 0 0 auto; /* Allows slides to adjust their size */
  width: 250px; /* Adjust this value as needed */
}

.product-item {
  width: 100%;
}

.product-image {
  width: 100%;
  height: auto;
}

.swiper-pagination {
  bottom: 10px;
}



.swiper-button-next,
.swiper-button-prev {
  color: #000; /* Adjust color as needed */
}


</style>
<style type="text/css"> .notify{ z-index: 1000000; margin-top: 5%; } </style>
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />


<div class="search-popup">
  <div class="search-popup-container">

    <form role="search" method="get" class="search-form" action="">
      <input type="search" id="search-form" class="search-field" placeholder="Type and press enter" value="" name="s" />
      <button type="submit" class="search-submit"><a href="#"><i class="icon icon-search"></i></a></button>
    </form>

    <h5 class="cat-list-title">Browse Categories</h5>
    
    <ul class="cat-list">
      <li class="cat-list-item">
        <a href="shop.html" title="Men Jackets">Men Jackets</a>
      </li>
      <li class="cat-list-item">
        <a href="shop.html" title="Fashion">Fashion</a>
      </li>
      <li class="cat-list-item">
        <a href="shop.html" title="Casual Wears">Casual Wears</a>
      </li>
      <li class="cat-list-item">
        <a href="shop.html" title="Women">Women</a>
      </li>
      <li class="cat-list-item">
        <a href="shop.html" title="Trending">Trending</a>
      </li>
      <li class="cat-list-item">
        <a href="shop.html" title="Hoodie">Hoodie</a>
      </li>
      <li class="cat-list-item">
        <a href="shop.html" title="Kids">Kids</a>
      </li>
    </ul>
  </div>
</div>

<section id="billboard" class="overflow-hidden">

  <button class="button-prev">
    <i class="icon icon-chevron-left"></i>
  </button>
  <button class="button-next">
    <i class="icon icon-chevron-right"></i>
  </button>
  <div class="swiper main-swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image: url('/upload/banner/banner2.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
        <div class="banner-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h2 class="banner-title"></h2>
                <div class="btn-wrap">
                  <!-- <a href="shop.html" class="btn btn-light btn-medium d-flex align-items-center" tabindex="0">Shop it now <i class="icon icon-arrow-io"></i>
                  </a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide" style="background-image: url('/upload/banner/banner.png');background-repeat: no-repeat;background-size: cover;background-position: center;">
        <div class="banner-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h2 class="banner-title"></h2>
                <div class="btn-wrap">
                  <!-- <a href="shop.html" class="btn btn-light btn-light-arrow btn-medium d-flex align-items-center" tabindex="0">Shop it now <i class="icon icon-arrow-io"></i>
                  </a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="featured-products" class="product-store padding-large">
  <div class="container">
    <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
      <h2 class="section-title">Products</h2>
      <div class="btn-wrap">
        <a href="{{ route('product') }}" class="d-flex align-items-center">
          View all products <i class="icon icon icon-arrow-io"></i>
        </a>
      </div>
    </div>
    <!-- products items start -->
    <div class="swiper product-swiper overflow-hidden">
      <div class="swiper-wrapper">
        @foreach ($allProduct as $product)
        <div class="swiper-slide">
          <div class="product-item">
            <div class="image-holder">
              <img src="{{ url('/upload/category/' . $product->image) }}" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <a href="{{ route('add.to.cart', $product->id) }}">
                  <button type="button" class="btn-wrap cart-link d-flex align-items-center">
                    add to cart <i class="icon icon-arrow-io"></i>
                  </button>
                </a>
                <button type="button" class="view-btn tooltip d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">{{ $product->name }}</a>
              </h3>
              <span class="item-price text-primary">{{ $product->price }}</span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Navigation -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>
</section>




<section id="selling-products" class="product-store bg-light-grey padding-large">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Best selling products</h2>
    </div>
    <ul class="tabs list-unstyled">
      <li data-tab-target="#all" class="active tab">All</li>
      <li data-tab-target="#shoes" class="tab">Men</li>
      <li data-tab-target="#tshirts" class="tab">Women</li>
      <li data-tab-target="#pants" class="tab">Kid</li>
      <li data-tab-target="#hoodie" class="tab">cosmetics</li>
    </ul>
    <div class="tab-content">
      <div id="all" data-tab-content class="active">
        <div class="row d-flex flex-wrap">
          
        <!-- loop product -->
         @foreach ($allProduct as $product)
         <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="{{url('/upload/category/'.$product->image)}}" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">{{$product->name}}</a>
              </h3>
              <div class="item-price text-primary">{{$product->price}}</div>
            </div>
          </div>
         @endforeach
         
        </div>
      </div>
      <div id="shoes" data-tab-content>
        <div class="row d-flex flex-wrap">
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products13.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Orange white Nike</a>
              </h3>
              <div class="item-price text-primary">$55.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products14.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Running Shoe</a>
              </h3>
              <div class="item-price text-primary">$65.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products15.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Tennis Shoe</a>
              </h3>
              <div class="item-price text-primary">$80.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products16.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Nike Brand Shoe</a>
              </h3>
              <div class="item-price text-primary">$65.00</div>
            </div>
          </div>
        </div>
      </div>
      <div id="tshirts" data-tab-content>
        <div class="row d-flex flex-wrap">
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products3.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Silk White Shirt</a>
              </h3>
              <div class="item-price text-primary">$35.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products8.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">White Half T-shirt</a>
              </h3>
              <div class="item-price text-primary">$30.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products5.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Ghee Half T-shirt</a>
              </h3>
              <div class="item-price text-primary">$40.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products7.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Long Sleeve T-shirt</a>
              </h3>
              <div class="item-price text-primary">$40.00</div>
            </div>
          </div>
        </div>
      </div>
      <div id="pants" data-tab-content>
        <div class="row d-flex flex-wrap">
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products1.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Half sleeve T-shirt</a>
              </h3>
              <div class="item-price text-primary">$40.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products4.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Grunge Hoodie</a>
              </h3>
              <div class="item-price text-primary">$30.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products7.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Long Sleeve T-shirt</a>
              </h3>
              <div class="item-price text-primary">$40.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products2.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Stylish Grey Pant</a>
              </h3>
              <div class="item-price text-primary">$40.00</div>
            </div>
          </div>
        </div>
      </div>
      <div id="hoodie" data-tab-content>
        <div class="row d-flex flex-wrap">
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products17.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">White Hoodie</a>
              </h3>
              <div class="item-price text-primary">$40.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products4.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Navy Blue Hoodie</a>
              </h3>
              <div class="item-price text-primary">$45.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products18.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Dark Green Hoodie</a>
              </h3>
              <div class="item-price text-primary">$35.00</div>
            </div>
          </div>
        </div>
      </div>
      <div id="outer" data-tab-content>
        <div class="row d-flex flex-wrap">
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products3.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Silk White Shirt</a>
              </h3>
              <div class="item-price text-primary">$ 35.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products4.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Grunge Hoodie</a>
              </h3>
              <div class="item-price text-primary">$ 30.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products6.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Grey Check Coat</a>
              </h3>
              <div class="item-price text-primary">$ 30.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products7.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Long Sleeve T-shirt</a>
              </h3>
              <div class="item-price text-primary">$ 40.00</div>
            </div>
          </div>
        </div>
      </div>
      <div id="jackets" data-tab-content>
        <div class="row d-flex flex-wrap">
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products5.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Full Sleeve Jeans Jacket</a>
              </h3>
              <div class="item-price text-primary">$40.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products2.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Stylish Grey Coat</a>
              </h3>
              <div class="item-price text-primary">$35.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products6.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Grey Check Coat</a>
              </h3>
              <div class="item-price text-primary">$35.00</div>
            </div>
          </div>
        </div>
      </div>
      <div id="accessories" data-tab-content>
        <div class="row d-flex flex-wrap">
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products19.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Stylish Women Bag</a>
              </h3>
              <div class="item-price text-primary">$35.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="images/selling-products20.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Stylish Gadgets</a>
              </h3>
              <div class="item-price text-primary">$30.00</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>







<section id="quotation" class="align-center padding-large">
  <div class="inner-content">
    <h2 class="section-title divider">Quote of the day</h2>
    <blockquote>
      <q>It's true, I don't like the whole cutoff-shorts-and-T-shirt look, but I think you can look fantastic in casual clothes.</q>
      <div class="author-name">- Dr. Seuss</div>
    </blockquote>
  </div>
</section>





<script>
  document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.product-swiper', {
      slidesPerView: 'auto',
      spaceBetween: 20,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      loop: true,
    });
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.main-swiper', {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      autoplay: {
        delay: 5000, // Adjust the delay as needed
        disableOnInteraction: false
      },
      navigation: {
        nextEl: '.button-next',
        prevEl: '.button-prev',
      },
      effect: 'fade', // This can be 'slide', 'fade', 'cube', etc.
    });
  });
</script>






@endsection