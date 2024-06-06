<!DOCTYPE html>
<html lang="en">

<x-head />

<body class="hompage bg-accent-light">

    <x-header />

    <section id="fashion-trending" class="product-store padding-large position-relative overflow-hidden">
        <div class="container mb-5">
            <div class="section-header text-center">
                <h2 class="section-title">What’s trending</h2>
                <p>These are the products that are trending now.</p>
            </div>
            <div class="row">
                <div class="swiper product-swiper">
                    <div class="swiper-wrapper">
                        @foreach($product as $pr)
                        <div class="swiper-slide">
                            <div class="product-item position-relative">
                                <div class="image-holder">
                                    <img src="{{$pr->image}}" alt="product-item" class="product-image">
                                </div>
                                <div class="cart-concern">
                                    <div class="cart-button d-flex flex-wrap">
                                        <div class="btn-left">
                                            <a href="#" class="btn btn-medium btn-light">Shop Cart
                                            </a>
                                        </div>
                                        <button type="button" class="btn btn-light wishlist-btn">
                                            <i class="icon icon-like"></i>
                                        </button>
                                        <button type="button" class="btn btn-light view-btn d-flex">
                                            <i class="icon icon-crop"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-detail text-center">
                                    <h3 class="product-title">
                                        <a href="#">{{$pr->name}}</a>
                                    </h3>
                                    <span class="item-price text-primary">{{$pr->price}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-button swiper-button-next"></div>
                <div class="swiper-button swiper-button-prev"></div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>

    <section id="new-arrivals" class="product-store padding-large position-relative overflow-hidden">
        <div class="container mb-5">
            <div class="section-header text-center">
                <h2 class="section-title">New Arrivals</h2>
                <p>These are the products that are new.</p>
            </div>
            <div class="row">
                <div class="swiper product-swiper">
                    <div class="swiper-wrapper">
                        @foreach($product as $pr)
                        <div class="swiper-slide">
                            <div class="product-item position-relative">
                                <div class="image-holder">
                                    <img src="{{$pr->image}}" alt="product-item" class="product-image">
                                </div>
                                <div class="cart-concern">
                                    <div class="cart-button d-flex flex-wrap">
                                        <div class="btn-left">
                                            <a href="#" class="btn btn-medium btn-light">Shop Cart
                                            </a>
                                        </div>
                                        <button type="button" class="btn btn-light wishlist-btn">
                                            <i class="icon icon-like"></i>
                                        </button>
                                        <button type="button" class="btn btn-light view-btn d-flex">
                                            <i class="icon icon-crop"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="product-detail text-center">
                                    <h3 class="product-title">
                                        <a href="#">{{$pr->name}}</a>
                                    </h3>
                                    <span class="item-price text-primary">{{$pr->price}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-button swiper-button-next"></div>
                <div class="swiper-button swiper-button-prev"></div>
            </div>
        </div>
        <div class="swiper-pagination1"></div>
    </section>


    <x-footer />
</body>

</html>