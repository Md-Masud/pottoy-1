
@extends('frontend.master')

@section('frontend_content')

<section class="banner-slider">
    @foreach( $bannerproducts as $bannerproduct)
    <div class="banner-img-slide">
        <div class="banner_img">
            <img src="{{ url($bannerproduct->image)}} " class="img-fluid w-100" alt="...">

        </div>
        <div class="banner-txt">
            <p>{{ $bannerproduct->title}}</p>
            <span>discount-{{ $bannerproduct->discount}}</span>
        </div>

    </div>
    @endforeach
</section>

<!-- Banner-bottom-bar -->
<section class="feature-area">
    <div class="container-fluid ">
        <div class="row feature-bg">
            <div class="col-xl-4">
                <div class="single-feature">
                    <div class="feature-content">
                        <img src="{{asset('frontend_asset')}}/img/Vector.png" alt="">
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
            <div class="col-xl-3 right-body-side">
                <!-- Column Left Starts -->
                <div class="browse-categories">
                    <h3><strong>CATEGORIES</strong></h3>
                    <ul>
                        @foreach($categories as $category)
                        @php
                        $sub_categories=\App\Models\SubCategory::where('category_id',$category->id)->get();
                        @endphp
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbarDropdown" role="button" aria-expanded="true"
                                style="color: #000000;">
                                {{$category->category_name}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach($sub_categories as $sub_category)
                                <li><a class="dropdown-item" href="#">{{ $sub_category->sub_category_name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <br>
            </div> <!-- Column Right Ends -->
            <div class="col-xl-9">
                <!-- Column Right Starts -->
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
                                @foreach($featureds as $featured)
                                <div class="mix category-1 col-xl-4 col-xs-6" data-myorder="1">
                                    <a href="{{route('product.details.show',$featured->slug)}}">
                                        <div class="card" style="padding: 5px;">
                                            <div class="single-category">
                                                <img src="{{asset('public/files/product/'.$featured->thumbnail)}}"
                                                    alt="">
                                                <div class="category-content">
                                                    <ul class="category">
                                                        <li>
                                                            <span>{{$featured->name}}</span>
                                                        </li>
                                                        <li><i class="far fa-heart"></i></li>
                                                    </ul>
                                                    <div class="category-name">
                                                        <h6>{{$featured->brand->brand_name}}</h6>
                                                        <div class="category-rating">
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                        <div class="category-price " style="background-color: white">
                                                            @if($featured->discount_price==NULL)
                                                            <span
                                                                class="text-black">${{$featured->selling_price}}</span>
                                                            @else
                                                            <span
                                                                class="text-black">${{$featured->selling_price}}</span><br>
                                                            <del
                                                                class="text-black">${{ $featured->discount_price }}</del>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach

                                @foreach($latest_products as $latest_product)
                                <div class="mix category-2 col-xl-4 col-xs-6" data-myorder="2">
                                    <a href="view_product.html">
                                        <div class="card" style="padding: 5px;">
                                            <div class="single-category">

                                                <img src="{{asset('public/files/product/'.$latest_product->thumbnail)}}"
                                                    alt="">
                                                <div class="category-content">
                                                    <ul class="category">
                                                        <li>
                                                            <span>{{$latest_product->name}}</span>

                                                        </li>

                                                        <li><i class="far fa-heart"></i></li>
                                                    </ul>
                                                    <div class="category-name">
                                                        <h6>{{$latest_product->brand->brand_name}}</h6>
                                                        <div class="category-rating">
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                        <div class="category-price">
                                                            @if($latest_product->discount_price==NULL)
                                                            <span
                                                                class="card-price">${{$latest_product->selling_price}}</span>
                                                            @else
                                                            <span
                                                                class="card-price">${{$latest_product->selling_price}}</span><br>
                                                            <del
                                                                class="card-price">${{ $latest_product->discount_price }}</del>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>




                        <!-- Top Rated Section -->
                        <div class="col-xl-12">


                            <div class="top-rated-products">
                                <div class="row">

                                    <h5 style="font-weight: bold; margin-bottom: 20px;">TOP POPULAR PRODUCTS</h5>
                                  @foreach($popular_products as $popular_product)
                                    <div class="col-xl-4 rtd-p">
                                        <div class="card" style="padding: 5px;">
                                            <div class="single-category">
                                                <img src="{{asset('public/files/product/'.$popular_product->thumbnail)}}"
                                                     alt="">
                                                <div class="category-content">
                                                    <ul class="category">
                                                        <li>
                                                            <span>{{$popular_product->name}}</span>
                                                        </li>
                                                        <li><i class="far fa-heart"></i></li>
                                                    </ul>
                                                    <div class="category-name">
                                                        <h6>{{$popular_product->brand->brand_name}}</h6>
                                                        <div class="category-rating">
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                        <div class="category-price " style="background-color: white">
                                                            @if($popular_product->discount_price==NULL)
                                                                <span
                                                                    class="text-black">${{$popular_product->selling_price}}</span>
                                                            @else
                                                                <span
                                                                    class="text-black">${{$popular_product->selling_price}}</span><br>
                                                                <del
                                                                    class="text-black">${{ $popular_product->discount_price }}</del>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                </div> <!-- Column Right Ends -->
            </div>
        </div>
</section>
@endsection

