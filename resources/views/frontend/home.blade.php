@extends('frontend.master')

@section('content')


<body>



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
      <div class="swiper-slide" style="background-image: url('images/banner1.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
        <div class="banner-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h2 class="banner-title">Summer Collection</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero ipsum enim pharetra hac.</p>
                <div class="btn-wrap">
                  <a href="shop.html" class="btn btn-light btn-medium d-flex align-items-center" tabindex="0">Shop it now <i class="icon icon-arrow-io"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide" style="background-image: url('images/banner2.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
        <div class="banner-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h2 class="banner-title">Casual Collection</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero ipsum enim pharetra hac.</p>
                <div class="btn-wrap">
                  <a href="shop.html" class="btn btn-light btn-light-arrow btn-medium d-flex align-items-center" tabindex="0">Shop it now <i class="icon icon-arrow-io"></i>
                  </a>
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
        <a href="{{route('product')}}" class="d-flex align-items-center">View all products <i class="icon icon icon-arrow-io"></i></a>
      </div>            
    </div>
    <!-- products items start -->
     @foreach ($allProduct as $product)
     <div class="swiper product-swiper overflow-hidden">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="product-item">
            <div class="image-holder">
              <img src="{{url('/upload/category/'.$product->image)}}" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <a href="{{route('add.to.cart',$product->id)}}"><button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button></a>
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
              <span class="item-price text-primary">{{$product->price}}</span>
            </div>
          </div>
        </div>
        
       
      </div>
    </div>
     @endforeach
     <!-- products item end -->
    <div class="swiper-pagination"></div>
  </div>
</section>

<section id="latest-collection">
  <div class="container">
    <div class="product-collection row">
      <div class="col-lg-7 col-md-12 left-content">
        <div class="collection-item">
          <div class="products-thumb">
            <img src="images/collection-item1.jpg" alt="collection item" class="large-image image-rounded">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 product-entry">
            <div class="categories">casual collection</div>
            <h3 class="item-title">street wear.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim massa diam elementum.</p>
            <div class="btn-wrap">
              <a href="shop.html" class="d-flex align-items-center">shop collection <i class="icon icon-arrow-io"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-12 right-content flex-wrap">
        <div class="collection-item top-item">
          <div class="products-thumb">
            <img src="images/collection-item2.jpg" alt="collection item" class="small-image image-rounded">
          </div>
          <div class="col-md-6 product-entry">
            <div class="categories">Basic Collection</div>
            <h3 class="item-title">Basic shoes.</h3>
            <div class="btn-wrap">
              <a href="shop.html" class="d-flex align-items-center">shop collection <i class="icon icon-arrow-io"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="collection-item bottom-item">
          <div class="products-thumb">
            <img src="images/collection-item3.jpg" alt="collection item" class="small-image image-rounded">
          </div>
          <div class="col-md-6 product-entry">
            <div class="categories">Best Selling Product</div>
            <h3 class="item-title">woolen hat.</h3>
            <div class="btn-wrap">
              <a href="shop.html" class="d-flex align-items-center">shop collection <i class="icon icon-arrow-io"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
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

<section id="testimonials" class="padding-large no-padding-bottom">
  <div class="container">
    <div class="reviews-content">
      <div class="row d-flex flex-wrap">
        <div class="col-md-2">
          <div class="review-icon">
            <i class="icon icon-right-quote"></i>
          </div>
        </div>
        <div class="col-md-8">
          <div class="swiper testimonial-swiper overflow-hidden">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-detail">
                  <p>“Dignissim massa diam elementum habitant fames. Id nullam pellentesque nisi, eget cursus dictumst pharetra, sit. Pulvinar laoreet id porttitor egestas dui urna. Porttitor nibh magna dolor ultrices iaculis sit iaculis.”</p>
                  <div class="author-detail">
                    <div class="name">By Maggie Rio</div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonial-detail">
                  <p>“Dignissim massa diam elementum habitant fames. Id nullam pellentesque nisi, eget cursus dictumst pharetra, sit. Pulvinar laoreet id porttitor egestas dui urna. Porttitor nibh magna dolor ultrices iaculis sit iaculis.”</p>
                  <div class="author-detail">
                    <div class="name">By John Smith</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-arrows">
            <button class="prev-button">
              <i class="icon icon-arrow-left"></i>
            </button>
            <button class="next-button">
              <i class="icon icon-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="flash-sales" class="product-store padding-large">
  
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Flash sales</h2>
    </div>
    <div class="swiper product-swiper flash-sales overflow-hidden">

      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="product-item">
            <img src="images/selling-products9.jpg" alt="Books" class="product-image">
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
            <div class="discount">10% Off</div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Full sleeve cover shirt</a>
              </h3>
              <div class="item-price text-primary">
                <del class="prev-price">$50.00</del>$40.00
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-item">
            <img src="images/selling-products10.jpg" alt="Books" class="product-image">
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
            <div class="discount">10% Off</div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Long Sleeve T-shirt</a>
              </h3>
              <div class="item-price text-primary">
                <del class="prev-price">$50.00</del>$40.00
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-item">
            <img src="images/selling-products11.jpg" alt="Books" class="product-image">
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
            <div class="discount">10% Off</div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Grey Check Coat</a>
              </h3>
              <div class="item-price text-primary">
                <del class="prev-price">$55.00</del>$45.00
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-item">
            <img src="images/selling-products12.jpg" alt="Books" class="product-image">
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
            <div class="discount">10% Off</div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Silk White Shirt</a>
              </h3>
              <div class="item-price text-primary">
                <del class="prev-price">$45.00</del>$35.00
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-item">
            <img src="images/selling-products8.jpg" alt="Books" class="product-image">
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
            <div class="discount">10% Off</div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Blue Jeans pant</a>
              </h3>
              <div class="item-price text-primary">
                <del class="prev-price">$45.00</del>$35.00
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>

    </div>
  </div>
</section>

<section class="shoppify-section-banner">
  <div class="container">
    <div class="product-collection">
      <div class="left-content collection-item">
        <div class="products-thumb">
          <img src="images/model.jpg" alt="collection item" class="large-image image-rounded">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 product-entry">
          <div class="categories">Denim collection</div>
          <h3 class="item-title">The casual selection.</h3>
          <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor egestas condimentum et ac rutrum dui, odio.</p>
          <div class="btn-wrap">
            <a href="shop.html" class="d-flex align-items-center">shop collection <i class="icon icon-arrow-io"></i>
            </a>
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


<section id="instagram" class="padding-large">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Follow our Social Sites</h2>
    </div>
    <p>Our official Instagram account <a href="#">@ultras</a> or <a href="#">#ultras_clothing</a>
    </p>
    <div class="row d-flex flex-wrap justify-content-between">
      <div class="col-lg-2 col-md-4 col-sm-6">
        <figure class="zoom-effect">
          <img src="images/insta-image1.jpg" alt="instagram" class="insta-image">
          <i class="icon icon-instagram"></i>
        </figure>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <figure class="zoom-effect">
          <img src="images/insta-image2.jpg" alt="instagram" class="insta-image">
          <i class="icon icon-instagram"></i>
        </figure>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <figure class="zoom-effect">
          <img src="images/insta-image3.jpg" alt="instagram" class="insta-image">
          <i class="icon icon-instagram"></i>
        </figure>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <figure class="zoom-effect">
          <img src="images/insta-image4.jpg" alt="instagram" class="insta-image">
          <i class="icon icon-instagram"></i>
        </figure>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <figure class="zoom-effect">
          <img src="images/insta-image5.jpg" alt="instagram" class="insta-image">
          <i class="icon icon-instagram"></i>
        </figure>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <figure class="zoom-effect">
          <img src="images/insta-image6.jpg" alt="instagram" class="insta-image">
          <i class="icon icon-instagram"></i>
        </figure>
      </div>
    </div>          
  </div>
</section>










@endsection