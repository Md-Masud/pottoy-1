@extends('frontend.master')

@section('frontend_content')
    <section class="banner-slider">
       
            
                @foreach( $bannerproducts as  $bannerproduct)
                <div class="banner-img-slide">
                    <div class="banner_img">
                        <img src="{{ url($bannerproduct->image)}} "  class="img-fluid w-100" alt="..."> 
                        
                    </div>
                    <div class="banner-txt">
                        <p>{{ $bannerproduct->title}}</p>
                        <span>discount-{{ $bannerproduct->discount}}</span>
                      </div>
                    
                </div>
                @endforeach
         
    </section>



<style>

    </style>




    <!-- Banner-bottom-bar -->
    <section class="feature-area">
        <div class="container-fluid ">
            <div class="row feature-bg">
                <div class="col-xl-4">
                    <div class="single-feature">

                        <div class="feature-content">
                            <img src="{{asset('frontend_asset')}}/img/Vector.png"  alt="">
                            <h6>FREE SHIPPING & RETURN</h6>
                            <p>Free Shipping on All Orders Over $99.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="single-feature">

                        <div class="feature-content">
                            <img src="{{asset('frontend_asset')}}/img/Vector (1).png" alt="">
                            <h6>MONEY BACK GUARANTEE</h6>
                            <p>100% Money Back Guarantee.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="single-feature">

                        <div class="feature-content">
                            <img src="{{asset('frontend_asset')}}/img/Vector (2).png" alt="">
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

                <div class="col-xl-3 right-body-side"> <!-- Column Left Starts -->
                    <div class="browse-categories">
                        <h3><strong>CATEGORIES</strong></h3>
                        <ul>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button"  aria-expanded="true" style="color: #000000;">
                                    Women's Accessories
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000000;">
                                    Mens's Accessories
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li><li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000000;">
                                    Kid's Accessories
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li><li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000000;">
                                    Electric Appliances
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000000;">
                                    Furniture
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000000;">
                                    Women's Accessories
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000000;">
                                    Mens's Accessories
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li><li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000000;">
                                    Kid's Accessories
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li><li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000000;">
                                    Electric Appliances
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000000;">
                                    Furniture
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000000;">
                                    Women's Accessories
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000000;">
                                    Mens's Accessories
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li><li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000000;">
                                    Kid's Accessories
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li><li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000000;">
                                    Electric Appliances
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #000000;">
                                    Furniture
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <br>

                </div> <!-- Column Right Ends -->

                <div class="col-xl-9"> <!-- Column Right Starts -->
                    <div class="row">
                        <div class="col-xl-12">


                            <div class="controls">


                                <div class="col-xl-9 col-xs-12 text-right">
                                    <a><button class="white-border filter" data-filter=".category-1">FEATURED PRODUCTS</button></a>
                                    <a><button class="white-border filter" data-filter=".category-2">LATEST PRODUCTS</button></a>

                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="col-xl-12"> <!-- Column Left Starts -->

                            <div id="product-grid" class="product-grid">
                                <div class="row">
                                    <div class="mix category-1 col-xl-4 col-xs-6" data-myorder="1">
                                        <a href="view_product.html">
                                            <div class="card" style="padding: 5px;">
                                                <div class="single-category">
                                                    <img src="{{asset('frontend_asset')}}/img/caterory2.jpg" class="w-100" alt="">
                                                    <div class="category-content">
                                                        <ul class="category">
                                                            <li>
                                                                <span>caps</span>
                                                                <span>dress</span>
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
                                                    <img src="{{asset('frontend_asset')}}/img/caterory3.jpg" class="w-100" alt="">
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
                                                    <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" class="w-100" alt="">
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

                                                    <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" class="w-100" alt="">
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
                                                    <img src="{{asset('frontend_asset')}}/img/caterory2.jpg" class="w-100" alt="">
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
                                                    <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" class="w-100" alt="">
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
                                                    <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" class="w-100" alt="">
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
                                                    <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" class="w-100" alt="">
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
                                                    <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" class="w-100" alt="">
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

                                                    <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" class="w-100" alt="">
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
                                                    <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" class="w-100" alt="">
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
                                                    <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" class="w-100" alt="">
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




                        <!-- Top Rated Section -->
                        <div class="col-xl-12">


                            <div class="top-rated-products">
                                <div class="row">


                                    <div class="col-xl-4 rtd-p">


                                        <h5>TOP RATED PRODUCTS</h5>

                                        <div class="rated">
                                            <div class="single-category">
                                                <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" alt="">
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
                                                <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" alt="">
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
                                                <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" alt="">
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
                                                <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" alt="">
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
                                    <br>
                                    <div class="col-xl-4 rtd-p">


                                        <h5>TOP RATED PRODUCTS</h5>

                                        <div class="rated">
                                            <div class="single-category">
                                                <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" alt="">
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
                                                <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" alt="">
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
                                                <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" alt="">
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
                                                <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" alt="">
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
                                    <br>
                                    <div class="col-xl-4 rtd-p">


                                        <h5>TOP RATED PRODUCTS</h5>

                                        <div class="rated">
                                            <div class="single-category">
                                                <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" alt="">
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
                                                <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" alt="">
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
                                                <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" alt="">
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
                                                <img src="{{asset('frontend_asset')}}/img/caterory1.jpg" alt="">
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
                </div> <!-- Column Right Ends -->

            </div>
        </div>
    </section>
    <br>





@endsection

