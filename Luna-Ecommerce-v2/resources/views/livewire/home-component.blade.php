<div>
   <!-- Hero Section Begin -->
   <section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All departments</span>
                    </div>
                    <ul>
                        @foreach ($categories as $category)
                            <li><a href="{{ route('product.category',['slug'=>$category->slug]) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        @livewire('header-search-componet')
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
                <div class="hero__item set-bg" data-setbg="{{ asset('assets/img/hero/banner.jpg') }}">
                    <div class="hero__text">
                        <span>FRUIT FRESH</span>
                        <h2>Vegetable <br />100% Organic</h2>
                        <p>Free Pickup and Delivery Available</p>
                        <a href="#" class="primary-btn">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('assets/img/categories/cat-1.jpg') }}">
                        <h5><a href="#">Fresh Fruit</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('assets/img/categories/cat-2.jpg') }}">
                        <h5><a href="#">Dried Fruit</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('assets/img/categories/cat-1.jpg') }}">
                        <h5><a href="#">Vegetables</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('assets/img/categories/cat-1.jpg') }}">
                        <h5><a href="#">drink fruits</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('assets/img/categories/cat-1.jpg') }}">
                        <h5><a href="#">drink fruits</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
                {{-- <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".oranges">Oranges</li>
                        <li data-filter=".fresh-meat">Fresh Meat</li>
                        <li data-filter=".vegetables">Vegetables</li>
                        <li data-filter=".fastfood">Fastfood</li>
                    </ul>
                </div> --}}
            </div>
        </div>
        <div class="row featured__filter">
            @php
                $witems = Cart::instance('wishlist')->content()->pluck('id');
            @endphp
            @foreach ($featured as $feature)
            <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('assets/images/products')}}/{{ $feature->image }}">
                            <ul class="featured__item__pic__hover">
                                @if ($witems->contains($feature->id))
                                    <li><a href="#" wire:click.prevent="removeWishlist({{ $feature->id }})"><i class="fa fa-heart" style="color: #ec4d09;"></i></a></li>
                                @else
                                    <li><a href="#" wire:click.prevent="addToWishlist({{ $feature->id }},'{{ $feature->name }}',{{ $feature->regular_price }})"><i class="fa fa-heart"></i></a></li>
                                @endif
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#" wire:click.prevent="store({{ $feature->id }},'{{ $feature->name }}', {{ $feature->regular_price }})" ><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="{{ route('product.detail',['slug'=>$feature->slug]) }}">{{ $feature->name }}</a></h6>
                            <h5>{{ $feature->regular_price }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="{{ asset('assets/img/banner/banner-1.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="{{ asset('assets/img/banner/banner-2.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Latest Product Section Begin -->
<section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Latest Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            @foreach ($lsproduct as $product)
                                <a href="{{ route('product.detail',['slug'=>$product->slug]) }}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('assets/images/products')}}/{{ $product->image }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{ $product->name }}</h6>
                                        <span>{{ $product->regular_price }}</span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Sale Product</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            @foreach ($saleProduct as $sale)
                            <a href="{{ route('product.detail',['slug'=>$sale->slug]) }}" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('assets/images/products')}}/{{ $sale->image }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>{{ $sale->name }}</h6>
                                    <div class="product__item__price">{{ $sale->sale_price }} <span>{{ $sale->regular_price }}</span></div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Product Section End -->

</div>
 