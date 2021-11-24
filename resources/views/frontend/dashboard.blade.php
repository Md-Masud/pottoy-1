@extends('frontend.master')

@section('frontend_content')
    <!-- Banner Section -->
    <section class="banner-sec">
      <div class="container">
          <div class="row">
              <div class="col-xl-8">
                  <div class="hero-image">
                      <img src="{{ asset('frontend_asset') }}/img/banner.png" class="w-100" alt="">
                      <div class="hero-text">
                          <p>Find the Boundaries. Push Through!</p>
                          <h3>Summer Sale</h3>
                          <h1>70% OFF</h1>
                          <p class="p2">STARTING AT</p>
                          <br>
                          <span><sub>$</sub>199<sub>99</sub></span>
                          <button>Shop Now</button>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4">
                  <div class="offer-img of-1">
                      <img src="img/banner (3).jpg" alt="" class="w-100" style="width:320px; display:flex; ">
                      <div class="offer">
                          <a href="">SHOP NOW</a>
                      </div>

                  </div>
                  <div class="offer-img of-2">
                      <img src="img/banner (2).jpg" alt="" class="w-100" style="width:320px; display:flex;">
                      <div class="offer">
                          <a href="">SHOP NOW</a>
                      </div>
                  </div>
                  <div class="offer-img of-3">
                      <img src="img/banner (4).jpg" alt="" class="w-100" style="width:320px; display:flex;">
                      <div class="offer">
                          <a href="">SHOP NOW</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Banner-bottom-bar -->
  <section class="feature-area">
      <div class="container ">
          <div class="row feature-bg">
              <div class="col-xl-4">
                  <div class="single-feature">
                      <img src="img/Vector.png" alt="">
                      <div class="feature-content">
                          <h6>FREE SHIPPING & RETURN</h6>
                          <p>Free Shipping on All Orders Over $99.</p>
                      </div>
                  </div>
              </div>

              <div class="col-xl-4">
                  <div class="single-feature">
                      <img src="img/Vector (1).png" alt="">
                      <div class="feature-content">
                          <h6>MONEY BACK GUARANTEE</h6>
                          <p>100% Money Back Guarantee.</p>
                      </div>
                  </div>
              </div>

              <div class="col-xl-4">
                  <div class="single-feature">
                      <img src="img/Vector (2).png" alt="">
                      <div class="feature-content">
                          <h6>ONLINE SUPPORT 24/7</h6>
                          <p>We have 24/7 helpline.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <br>

  <!-- Body Section -->
  <section class="body-section">
      <div class="container">
          <div class="row">

              <div class="col-xl-9">
                  <!-- Column Left Starts -->
                  <div class="row">
                      <div class="col-xl-12">


                          <div class="controls">


                              <div class="col-xl-9 col-xs-12 text-right">
                                  <a><button class="white-border filter" data-filter=".category-1">FEATURED
                                          PRODUCTS</button></a>
                                  <a><button class="white-border filter" data-filter=".category-2">LATEST
                                          PRODUCTS</button></a>

                              </div>
                          </div>
                      </div>

                      <hr>

                      <div class="col-xl-12">
                          <!-- Column Left Starts -->

                          <div id="product-grid" class="product-grid">
                              <div class="row">
                                  <div class="mix category-1 col-xl-4 col-xs-6" data-myorder="1">
                                      <a href="#">
                                          <div class="card" style="padding: 5px;">
                                              <div class="single-category">
                                                  <img src="img/caterory2.jpg" class="w-100" alt="">
                                                  <div class="category-content">
                                                      <ul class="category">
                                                          <li>
                                                              <span>caps</span>
                                                              <span>dresh</span>
                                                          </li>
                                                          <li><i class="far fa-heart"></i></li>
                                                      </ul>
                                                      <div class="category-name">
                                                          <h6>Porto Gray Cap</h6>
                                                          <div class="category-rating">
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                          </div>
                                                          <div class="category-price">
                                                              <p><span>$</span> 29.00</p>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>

                                  </div>
                                  <div class="mix category-2 col-xl-4 col-xs-6" data-myorder="2">
                                      <a href="#">
                                          <div class="card" style="padding: 5px;">
                                              <div class="single-category">
                                                  <img src="img/caterory3.jpg" class="w-100" alt="">
                                                  <div class="category-content">
                                                      <ul class="category">
                                                          <li>
                                                              <span>caps</span>
                                                              <span>dresh</span>
                                                          </li>
                                                          <li><i class="far fa-heart"></i></li>
                                                      </ul>
                                                      <div class="category-name">
                                                          <h6>Porto Gray Cap</h6>
                                                          <div class="category-rating">
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                          </div>
                                                          <div class="category-price">
                                                              <p><span>$</span> 29.00</p>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="mix category-1 col-xl-4 col-xs-6" data-myorder="3">
                                      <a href="#">
                                          <div class="card" style="padding: 5px;">
                                              <div class="single-category">
                                                  <img src="img/caterory1.jpg" class="w-100" alt="">
                                                  <div class="category-content">
                                                      <ul class="category">
                                                          <li>
                                                              <span>caps</span>
                                                              <span>dresh</span>
                                                          </li>
                                                          <li><i class="far fa-heart"></i></li>
                                                      </ul>
                                                      <div class="category-name">
                                                          <h6>Porto Gray Cap</h6>
                                                          <div class="category-rating">
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                          </div>
                                                          <div class="category-price">
                                                              <p><span>$</span> 29.00</p>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="mix category-2 col-xl-4 col-xs-6" data-myorder="4">
                                      <a href="#">
                                          <div class="card" style="padding: 5px;">
                                              <div class="single-category">

                                                  <img src="img/caterory1.jpg" class="w-100" alt="">
                                                  <div class="category-content">
                                                      <ul class="category">
                                                          <li>
                                                              <span>caps</span>
                                                              <span>dresh</span>
                                                          </li>
                                                          <li><i class="far fa-heart"></i></li>
                                                      </ul>
                                                      <div class="category-name">
                                                          <h6>Porto Gray Cap</h6>
                                                          <div class="category-rating">
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                          </div>
                                                          <div class="category-price">
                                                              <p><span>$</span> 29.00</p>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="mix category-1 col-xl-4 col-xs-6" data-myorder="5">
                                      <a href="#">
                                          <div class="card" style="padding: 5px;">
                                              <div class="single-category">
                                                  <img src="img/caterory2.jpg" class="w-100" alt="">
                                                  <div class="category-content">
                                                      <ul class="category">
                                                          <li>
                                                              <span>caps</span>
                                                              <span>dresh</span>
                                                          </li>
                                                          <li><i class="far fa-heart"></i></li>
                                                      </ul>
                                                      <div class="category-name">
                                                          <h6>Porto Gray Cap</h6>
                                                          <div class="category-rating">
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                          </div>
                                                          <div class="category-price">
                                                              <p><span>$</span> 29.00</p>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="mix category-1 col-xl-4 col-xs-6" data-myorder="6">
                                      <a href="#">
                                          <div class="card" style="padding: 5px;">
                                              <div class="single-category">
                                                  <img src="img/caterory1.jpg" class="w-100" alt="">
                                                  <div class="category-content">
                                                      <ul class="category">
                                                          <li>
                                                              <span>caps</span>
                                                              <span>dresh</span>
                                                          </li>
                                                          <li><i class="far fa-heart"></i></li>
                                                      </ul>
                                                      <div class="category-name">
                                                          <h6>Porto Gray Cap</h6>
                                                          <div class="category-rating">
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                          </div>
                                                          <div class="category-price">
                                                              <p><span>$</span> 29.00</p>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="mix category-2 col-xl-4 col-xs-6" data-myorder="7">
                                      <a href="#">
                                          <div class="card" style="padding: 5px;">
                                              <div class="single-category">
                                                  <img src="img/caterory1.jpg" class="w-100" alt="">
                                                  <div class="category-content">
                                                      <ul class="category">
                                                          <li>
                                                              <span>caps</span>
                                                              <span>dresh</span>
                                                          </li>
                                                          <li><i class="far fa-heart"></i></li>
                                                      </ul>
                                                      <div class="category-name">
                                                          <h6>Porto Gray Cap</h6>
                                                          <div class="category-rating">
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                          </div>
                                                          <div class="category-price">
                                                              <p><span>$</span> 29.00</p>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="mix category-1 col-xl-4 col-xs-6" data-myorder="8">
                                      <a href="#">
                                          <div class="card" style="padding: 5px;">
                                              <div class="single-category">
                                                  <img src="img/caterory1.jpg" class="w-100" alt="">
                                                  <div class="category-content">
                                                      <ul class="category">
                                                          <li>
                                                              <span>caps</span>
                                                              <span>dresh</span>
                                                          </li>
                                                          <li><i class="far fa-heart"></i></li>
                                                      </ul>
                                                      <div class="category-name">
                                                          <h6>Porto Gray Cap</h6>
                                                          <div class="category-rating">
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                          </div>
                                                          <div class="category-price">
                                                              <p><span>$</span> 29.00</p>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="mix category-2 col-xl-4 col-xs-6" data-myorder="9">
                                      <a href="#">
                                          <div class="card" style="padding: 5px;">
                                              <div class="single-category">
                                                  <img src="img/caterory1.jpg" class="w-100" alt="">
                                                  <div class="category-content">
                                                      <ul class="category">
                                                          <li>
                                                              <span>caps</span>
                                                              <span>dresh</span>
                                                          </li>
                                                          <li><i class="far fa-heart"></i></li>
                                                      </ul>
                                                      <div class="category-name">
                                                          <h6>Porto Gray Cap</h6>
                                                          <div class="category-rating">
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                          </div>
                                                          <div class="category-price">
                                                              <p><span>$</span> 29.00</p>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="mix category-2 col-xl-4 col-xs-6" data-myorder="10">
                                      <a href="#">
                                          <div class="card" style="padding: 5px;">
                                              <div class="single-category">

                                                  <img src="img/caterory1.jpg" class="w-100" alt="">
                                                  <div class="category-content">
                                                      <ul class="category">
                                                          <li>
                                                              <span>caps</span>
                                                              <span>dresh</span>
                                                          </li>
                                                          <li><i class="far fa-heart"></i></li>
                                                      </ul>
                                                      <div class="category-name">
                                                          <h6>Porto Gray Cap</h6>
                                                          <div class="category-rating">
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                          </div>
                                                          <div class="category-price">
                                                              <p><span>$</span> 29.00</p>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="mix category-2 col-xl-4 col-xs-6" data-myorder="11">
                                      <a href="#">
                                          <div class="card" style="padding: 5px;">
                                              <div class="single-category">
                                                  <img src="img/caterory1.jpg" class="w-100" alt="">
                                                  <div class="category-content">
                                                      <ul class="category">
                                                          <li>
                                                              <span>caps</span>
                                                              <span>dresh</span>
                                                          </li>
                                                          <li><i class="far fa-heart"></i></li>
                                                      </ul>
                                                      <div class="category-name">
                                                          <h6>Porto Gray Cap</h6>
                                                          <div class="category-rating">
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                          </div>
                                                          <div class="category-price">
                                                              <p><span>$</span> 29.00</p>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                                  <div class="mix category-1 col-xl-4 col-xs-6" data-myorder="12">
                                      <a href="#">
                                          <div class="card" style="padding: 5px;">
                                              <div class="single-category">
                                                  <img src="img/caterory1.jpg" class="w-100" alt="">
                                                  <div class="category-content">
                                                      <ul class="category">
                                                          <li>
                                                              <span>caps</span>
                                                              <span>dresh</span>
                                                          </li>
                                                          <li><i class="far fa-heart"></i></li>
                                                      </ul>
                                                      <div class="category-name">
                                                          <h6>Porto Gray Cap</h6>
                                                          <div class="category-rating">
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                              <i class="far fa-star"></i>
                                                          </div>
                                                          <div class="category-price">
                                                              <p><span>$</span> 29.00</p>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </a>
                                  </div>


                              </div>
                          </div>
                      </div>

                      <div class="col-xl-12">
                          <div class="row left-offer-sec-2">
                              <div class="col-xl-5 left-img">
                                  <img src="{{ asset('frontend_asset') }}/img/image 58.png" class="w-100 img-fluid" alt="">
                                  <div class="hero-txt-1">
                                      <h5>FLASH SALE</h5>
                                      <p>COOL Jackets</p>
                                      <h4>Only <sub>$</sub>199<sub>99</sub></h4>
                                      <a href="#">VIEW SALE</a>
                                  </div>
                              </div>


                              <div class="col-xl-7 right-img">
                                  <img src="{{ asset('frontend_asset') }}/img/image 57.png" class="w-100 img-fluid" alt="">
                                  <div class="hero-txt-2">
                                      <h4>Exclusive Outfits</h4>
                                      <h3>50% OFF</h3>
                                      <a href="#">VIEW SALE</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <br>


                      <!-- Top Rated Section -->
                      <div class="col-xl-12">


                          <div class="top-rated-products">
                              <div class="row">


                                  <div class="col-xl-4 rtd-p">


                                      <h5>TOP RATED PRODUCTS</h5>

                                      <div class="rated">
                                          <div class="single-category">
                                              <img src="img/caterory1.jpg" alt="">
                                              <div class="category-content">
                                                  <h4>Men Gentle Shoes</h4>
                                                  <div class="category-name">
                                                      <div class="category-rating">
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                      </div>
                                                      <div class="category-price">
                                                          <p><span>$</span> 29.00</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>


                                          <div class="single-category">
                                              <img src="img/caterory1.jpg" alt="">
                                              <div class="category-content">
                                                  <h4>Men Gentle Shoes</h4>
                                                  <div class="category-name">
                                                      <div class="category-rating">
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                      </div>
                                                      <div class="category-price">
                                                          <p><span>$</span> 29.00</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="single-category">
                                              <img src="img/caterory1.jpg" alt="">
                                              <div class="category-content">
                                                  <h4>Men Gentle Shoes</h4>
                                                  <div class="category-name">
                                                      <div class="category-rating">
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                      </div>
                                                      <div class="category-price">
                                                          <p><span>$</span> 29.00</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="single-category">
                                              <img src="img/caterory1.jpg" alt="">
                                              <div class="category-content">
                                                  <h4>Men Gentle Shoes</h4>
                                                  <div class="category-name">
                                                      <div class="category-rating">
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                      </div>
                                                      <div class="category-price">
                                                          <p><span>$</span> 29.00</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                      </div>



                                  </div>

                                  <div class="col-xl-4 rtd-p">


                                      <h5>TOP RATED PRODUCTS</h5>

                                      <div class="rated">
                                          <div class="single-category">
                                              <img src="img/caterory1.jpg" alt="">
                                              <div class="category-content">
                                                  <h4>Men Gentle Shoes</h4>
                                                  <div class="category-name">
                                                      <div class="category-rating">
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                      </div>
                                                      <div class="category-price">
                                                          <p><span>$</span> 29.00</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>


                                          <div class="single-category">
                                              <img src="img/caterory1.jpg" alt="">
                                              <div class="category-content">
                                                  <h4>Men Gentle Shoes</h4>
                                                  <div class="category-name">
                                                      <div class="category-rating">
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                      </div>
                                                      <div class="category-price">
                                                          <p><span>$</span> 29.00</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="single-category">
                                              <img src="img/caterory1.jpg" alt="">
                                              <div class="category-content">
                                                  <h4>Men Gentle Shoes</h4>
                                                  <div class="category-name">
                                                      <div class="category-rating">
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                      </div>
                                                      <div class="category-price">
                                                          <p><span>$</span> 29.00</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="single-category">
                                              <img src="img/caterory1.jpg" alt="">
                                              <div class="category-content">
                                                  <h4>Men Gentle Shoes</h4>
                                                  <div class="category-name">
                                                      <div class="category-rating">
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                      </div>
                                                      <div class="category-price">
                                                          <p><span>$</span> 29.00</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                      </div>



                                  </div>

                                  <div class="col-xl-4 rtd-p">


                                      <h5>TOP RATED PRODUCTS</h5>

                                      <div class="rated">
                                          <div class="single-category">
                                              <img src="img/caterory1.jpg" alt="">
                                              <div class="category-content">
                                                  <h4>Men Gentle Shoes</h4>
                                                  <div class="category-name">
                                                      <div class="category-rating">
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                      </div>
                                                      <div class="category-price">
                                                          <p><span>$</span> 29.00</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>


                                          <div class="single-category">
                                              <img src="img/caterory1.jpg" alt="">
                                              <div class="category-content">
                                                  <h4>Men Gentle Shoes</h4>
                                                  <div class="category-name">
                                                      <div class="category-rating">
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                      </div>
                                                      <div class="category-price">
                                                          <p><span>$</span> 29.00</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="single-category">
                                              <img src="img/caterory1.jpg" alt="">
                                              <div class="category-content">
                                                  <h4>Men Gentle Shoes</h4>
                                                  <div class="category-name">
                                                      <div class="category-rating">
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                      </div>
                                                      <div class="category-price">
                                                          <p><span>$</span> 29.00</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="single-category">
                                              <img src="img/caterory1.jpg" alt="">
                                              <div class="category-content">
                                                  <h4>Men Gentle Shoes</h4>
                                                  <div class="category-name">
                                                      <div class="category-rating">
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                          <i class="far fa-star"></i>
                                                      </div>
                                                      <div class="category-price">
                                                          <p><span>$</span> 29.00</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                      </div>
                                  </div>


                              </div>
                          </div>
                      </div>
                  </div>

              </div> <!-- Column Left Ends -->



              <div class="col-xl-3 right-body-side">
                  <!-- Column Right Starts -->
                  <div class="browse-categories">
                      <h5>Browse Categories</h5>
                      <ul>
                          <select name="Fashion" id="">
                              <option value="1">Fashion</option>
                              <option value="1">Accessories</option>
                              <option value="1">Electronices</option>
                          </select>
                          <hr>
                          <select name="Accessories" id="">
                              <option value="1">Accessories</option>
                              <option value="1">Fashion</option>
                              <option value="1">Electronices</option>
                          </select>
                          <hr>
                          <select name="Electronices" id="">
                              <option value="1">Electronices</option>
                              <option value="1">Accessories</option>
                              <option value="1">Kids Fashion</option>
                          </select>
                          <hr>
                          <select name="Dress" id="">
                              <option value="1">Dress</option>
                              <option value="1">Electronices</option>
                              <option value="1">Accessories</option>
                          </select>
                      </ul>
                  </div>
                  <br>

                  <!-- Right Offer Section -->
                  <div class="offer">
                      <img src="img/Ellipse 5.png" alt="" style="margin-bottom: 5px;">
                      <span>
                          <h1 style="font-weight: 600;">45<sup style="margin-left: 1%; font-size: 20px;">%</sup><sub
                                  style="font-size: 14px; margin-left: -5%;">OFF</sub></h1>
                      </span>
                      <br>
                      <p>Lorem ipsum, dolor sit amet consectetur adipisicing</p>
                      <br>
                      <button class="btn"><a href="#">VIEW SALE</a></button>
                  </div>
                  <br>

                  <!-- Subscribe Section -->
                  <div class="subscribe-sec">
                      <h5 style="font-size: medium; font-weight: 600;">SUBSCRIBE NEWSLETTER</h5>
                      <p style="font-size: small;">Lorem ipsum dolor sit amet consectetur.</p>
                      <form action="">
                          <input type="email" placeholder="      Email Address">
                          <i class="fas fa-envelope-open-text"></i>
                      </form>
                      <br>
                      <button class="btn" type="submit"><a href="#">SUBMIT</a></button>
                  </div>
                  <br>


                  <div class="profile-sec">
                      <img src="img/image 55.png" alt="">
                      <h5>John Smith</h5>
                      <p class="position">CEO & Founder - Okler</p>
                      <br>
                      <i class="fas fa-quote-left quote"></i>
                      <p>Lorem Ipsum Dolor Sit Amet.
                          Lorem Ipsum Dolor Sit Amet Apa Kabar</p>
                  </div>
                  <br>

                  <div class="post-format-video">
                      <img src="img/03_300x 1.png" alt="" style="width: 260px;">
                      <h5>Post Format - Video</h5>
                      <p>Lorem Ipsum Dolor Sit Amet.
                          Lorem Ipsum Dolor Sit Amet Apa Kabar</p>

                      <a href="">Read more <i class="fas fa-angle-double-right"></i></a>
                  </div>

              </div> <!-- Column Right Ends -->



          </div>
      </div>
  </section>
  

@endsection

