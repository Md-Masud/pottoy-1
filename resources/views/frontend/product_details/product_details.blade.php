@extends('frontend.master')

@section('frontend_content')
<!-- Body Section -->
<section class="view-product">
    <div class="container">
        <div class="row">
            <div class="col-xl-4" id="image-sec">
                <div class="product-img">
                    <img src="img/caterory2.jpg" class="w-100" alt="">
                </div>
                <br>

                <div class="product-images">
                    <div class="slideshow-container">

                        <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                            <a href=""><img src="img/caterory2.jpg" style="width:50px"></a>
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <a href=""><img src="img/caterory2.jpg" style="width:50px"></a>

                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <a href=""><img src="img/caterory2.jpg" style="width:50px"></a>
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    </div>
                </div>
            </div>
            <div class="col-xl-5" id="about-sec">
                <h3>Stylish Mens Cap (Brown)</h3>
                <div class="category-rating">
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>

                    <a href="#">78 Ratings</a>
                    <a href="#">24 Answered Questions</a>
                </div>
                <div class="scocial-icons">
                    <a href="#"><i class="fas fa-share-alt"></i></a>
                    <a href="#"><i class="fas fa-heart"></i></a>
                </div>
                <hr>
                <div class="about">
                    <p><strong>Brand :</strong> No Brand</p>
                    <h5><strong>About Product</strong></h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nobis nesciunt cumque?</p>
                </div>
                <hr>
                <div class="pricing-sec">
                    <h4>$ 29.00</h4>
                    <h6 style="text-decoration: line-through;">$ 36.00</h6>
                </div>
                <hr>
                <div class="selection-sec">
                    <p>Select Colors</p>
                    <form action="">
                        <input type="checkbox"> Red.
                        <input type="checkbox"> Black.
                        <input type="checkbox"> White.
                    </form>
                    <br>
                    <div class="quantity-sec">
                        <p>Quantity:</p>
                        <input type="number" name="" id="" placeholder="Select Quantity" required>
                    </div><br>
                    <div class="confirm-buttons">
                        <button class="btn-buy"><a href="">BUY NOW</a></button>
                        <button class="btn-cart"><a href="">ADD TO CART</a></button>
                    </div>
                    <br>
                </div>
            </div>

            <div class="col-xl-3" id="location-sec">
                <h5 style="color: gray;">Delivery Options</h5>
                <div class="location">
                    <p><i class="fas fa-map-marker-alt"></i> Dhaka, Dhaka,Bangladesh</p>
                    <h6>House No. 12/A Road:2</h6>
                    <a href="#" style="color: rgb(58, 58, 206); margin-left: 72%;">CHANGE</a>
                </div>
                <hr>
                <div class="delivery-options">
                    <h6 style="color: gray;"><i class="fas fa-truck"></i> Home Delivery</h6>
                    <p>3-5 Days</p>
                    <h6 style="color: gray;"><i class="fas fa-hand-holding-usd"></i> Cash On Delivery</h6>
                    <p>Available</p>
                </div>
                <hr>
                <div class="seller-info-sec">
                    <p style="color: gray;">Sold By</p>
                    <h5>Company Name</h5> <a href="#" style="color: rgb(0, 119, 255); margin-left: 65%;">Chat Now</a>
                    <br>
                    <div class="row" style="padding: 5px;">
                        <div class="col-xl-4 small-boxes">
                            <p>Positive Seller Ratings</p>
                            <h4>98%</h4>
                        </div>
                        <div class="col-xl-4 small-boxes">
                            <p>Shipping on Time Rating</p>
                            <br>
                            <h4>99%</h4>
                        </div>
                        <div class="col-xl-4 small-boxes">
                            <p>Chat Response Rate</p>
                            <h4>95%</h4>
                        </div>
                    </div>
                </div>



            </div>
        </div>

        <!-- Related Products Section -->
        <div class="related-products">
            <h3>Related Products</h3>
            <div class="row">
                <div class="col-xl-3 col-xs-6">
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


                <div class="col-xl-3 col-xs-6">
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

                <div class="col-xl-3 col-xs-6">
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

                <div class="col-xl-3 col-xs-6">
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


                <div class="col-xl-3 col-xs-6">
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
            </div>
        </div>
    </div>
</section>

@endsection
