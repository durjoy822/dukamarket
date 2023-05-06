@extends('home.layout.master')
@section('title')
    Product details
@endsection
@section('body')
    <main>
        <!-- breadcrumb__area-start -->
        <section class="breadcrumb__area box-plr-75">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__wrapper">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb__area-end -->

        <!-- product-details-start -->
        <div class="product-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="product__details-nav d-sm-flex align-items-start">
                            <ul class="nav nav-tabs flex-sm-column justify-content-between" id="productThumbTab" role="tablist">
                                @foreach ($product->otherImages as $key => $image)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link {{ $key == 0 ? 'active' : '' }}" id="thumb{{ $key + 1 }}-tab" data-bs-toggle="tab" data-bs-target="#thumb{{ $key + 1 }}" type="button" role="tab" aria-controls="thumb{{ $key + 1 }}" aria-selected="{{ $key == 0 ? 'true' : 'false' }}">
                                            <img src="{{asset($image->image)}}" alt="" style="width: 100px">                                        </button>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="product__details-thumb">
                                <div class="tab-content" id="productThumbContent">
                                    @foreach ($product->otherImages as $key => $image)
                                        <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="thumb{{ $key + 1 }}" role="tabpanel" aria-labelledby="thumb{{ $key + 1 }}-tab">
                                            <div class="product__details-nav-thumb w-img">
                                                <img src="{{asset($image->image)}}" alt="" style="height: 300px" >
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="product__details-content">
                            <h6>{{$product->name}}</h6>
                            <div class="pd-rating mb-10">
                                <ul class="rating">
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                </ul>
                                <span>(01 review)</span>
                                <span><a href="#">Add your review</a></span>
                            </div>
                            <div class="price mb-10">
                                <span>Tk. {{$product->selling_price}}</span>
                            </div>
                            <div class="features-des mb-20 mt-10">
                                <ul>
                                    {!! $product->short_description !!}
                                </ul>
                            </div>
                            <div class="product-stock mb-20">
                                <h5>Availability: <span> {{$product->stock_amount}} in stock</span></h5>
                            </div>
                            <div class="cart-option mb-15">
                                <div class="product-quantity mr-20">
                                    <div class="cart-plus-minus p-relative"><input type="text" value="1"><div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                                </div>
                                <a href="cart.html" class="cart-btn">Add to Cart</a>
                            </div>
                            <div class="details-meta">
                                <div class="d-meta-left">
                                    <div class="dm-item mr-20">
                                        <a href="#"><i class="fal fa-heart"></i>Add to wishlist</a>
                                    </div>
                                    <div class="dm-item">
                                        <a href="#"><i class="fal fa-layer-group"></i>Compare</a>
                                    </div>
                                </div>
                                <div class="d-meta-left">
                                    <div class="dm-item">
                                        <a href="#"><i class="fal fa-share-alt"></i>Share</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-tag-area mt-15">
                                <div class="product_info">
                                    <span class="sku_wrapper">
                                        <span class="title">Product Code:</span>
                                        <span class="sku">{{$product->code}}</span>
                                    </span>
                                    <span class="posted_in">
                                        <span class="title">Categories:</span>
                                        <a href="#">{{$product->category->name}}</a>
                                    </span>
                                    <span class="tagged_as">
                                        @if($product->discount!==null)
                                        <span class="title">Discount</span>
                                        <a href="#">{{$product->discount}} %</a>,
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-details-end -->

        <!-- product-details-des-start -->
        <div class="product-details-des mt-40 mb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="product__details-des-tab">
                            <ul class="nav nav-tabs" id="productDesTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="des-tab" data-bs-toggle="tab" data-bs-target="#des" type="button" role="tab" aria-controls="des" aria-selected="true">Description </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Reviews (1) </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="prodductDesTaContent">
                    <div class="tab-pane fade active show" id="des" role="tabpanel" aria-labelledby="des-tab">
                        {!! $product->long_description !!}
                    </div>
{{--                    <div class="tab-pane fade" id="aditional" role="tabpanel" aria-labelledby="aditional-tab">--}}
{{--                    </div>--}}
                    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                        <div class="product__details-review">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="review-rate">
                                        <h5>5.00</h5>
                                        <div class="review-star">
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </div>
                                        <span class="review-count">01 Review</span>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="review-des-infod">
                                        <h6>1 review for "<span>Wireless Bluetooth Over-Ear Headphones</span>"</h6>
                                        <div class="review-details-des">
                                            <div class="author-image mr-15">
                                                <a href="#"><img src="{{asset('frontend')}}/assets/img/author/author-sm-1.jpg" alt=""></a>
                                            </div>
                                            <div class="review-details-content">
                                                <div class="str-info">
                                                    <div class="review-star mr-15">
                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                    </div>
                                                    <div class="add-review-option">
                                                        <a href="#">Add Review</a>
                                                    </div>
                                                </div>
                                                <div class="name-date mb-30">
                                                    <h6> admin – <span> May 27, 2021</span></h6>
                                                </div>
                                                <p>A light chair, easy to move around the dining table and about the room. Duis aute irure dolor in reprehenderit in <br> voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="product__details-comment ">
                                        <div class="comment-title mb-20">
                                            <h3>Add a review</h3>
                                            <p>Your email address will not be published. Required fields are marked *</p>
                                        </div>
                                        <div class="comment-rating mb-20">
                                            <span>Overall ratings</span>
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="comment-input-box">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-xxl-6 col-xl-6">
                                                        <div class="comment-input">
                                                            <input type="text" placeholder="Your Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-6 col-xl-6">
                                                        <div class="comment-input">
                                                            <input type="email" placeholder="Your Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-12">
                                                        <textarea placeholder="Your review" class="comment-input comment-textarea"></textarea>
                                                    </div>
                                                    <div class="col-xxl-12">
                                                        <div class="comment-agree d-flex align-items-center mb-25">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    Save my name, email, and website in this browser for the next time I comment.
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-12">
                                                        <div class="comment-submit">
                                                            <button type="submit" class="cart-btn">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-details-des-end -->
    </main>
@endsection

