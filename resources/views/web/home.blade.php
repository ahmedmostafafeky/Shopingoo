@extends('web.layout.main')
@section('content')


    <!--start page content-->
    <div class="page-content">
        <!--start carousel-->
        <section class="slider-section">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active bg-primary">
                        <div class="row d-flex align-items-center">
                            <div class="col d-none d-lg-flex justify-content-center">
                                <div class="">
                                    <h3 class="h3 fw-light text-white fw-bold">New Arrival</h3>
                                    <h1 class="h1 text-white fw-bold">Women Fashion</h1>
                                    <p class="text-white fw-bold"><i>Last call for upto 25%</i></p>
                                    <div class=""><a class="btn btn-dark btn-ecomm" href="shop-grid.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <img src="/assets/images/sliders/s_1.webp" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item bg-red">
                        <div class="row d-flex align-items-center">
                            <div class="col d-none d-lg-flex justify-content-center">
                                <div class="">
                                    <h3 class="h3 fw-light text-white fw-bold">Latest Trending</h3>
                                    <h1 class="h1 text-white fw-bold">Fashion Wear</h1>
                                    <p class="text-white fw-bold"><i>Last call for upto 35%</i></p>
                                    <div class=""> <a class="btn btn-dark btn-ecomm" href="shop-grid.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <img src="/assets/images/sliders/s_2.webp" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item bg-purple">
                        <div class="row d-flex align-items-center">
                            <div class="col d-none d-lg-flex justify-content-center">
                                <div class="">
                                    <h3 class="h3 fw-light text-white fw-bold">New Trending</h3>
                                    <h1 class="h1 text-white fw-bold">Kids Fashion</h1>
                                    <p class="text-white fw-bold"><i>Last call for upto 15%</i></p>
                                    <div class=""><a class="btn btn-dark btn-ecomm" href="shop-grid.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <img src="/assets/images/sliders/s_3.webp" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item bg-yellow">
                        <div class="row d-flex align-items-center">
                            <div class="col d-none d-lg-flex justify-content-center">
                                <div class="">
                                    <h3 class="h3 fw-light text-dark fw-bold">Latest Trending</h3>
                                    <h1 class="h1 text-dark fw-bold">Electronics Items</h1>
                                    <p class="text-dark fw-bold"><i>Last call for upto 45%</i></p>
                                    <div class=""><a class="btn btn-dark btn-ecomm" href="shop-grid.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <img src="/assets/images/sliders/s_4.webp" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item bg-green">
                        <div class="row d-flex align-items-center">
                            <div class="col d-none d-lg-flex justify-content-center">
                                <div class="">
                                    <h3 class="h3 fw-light text-white fw-bold">Super Deals</h3>
                                    <h1 class="h1 text-white fw-bold">Home Furniture</h1>
                                    <p class="text-white fw-bold"><i>Last call for upto 24%</i></p>
                                    <div class=""><a class="btn btn-dark btn-ecomm" href="shop-grid.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <img src="/assets/images/sliders/s_5.webp" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!--end carousel-->


        <!--start Featured Products slider-->
        <section class="section-padding">
            <div class="container">
                @if(session('fail'))
                    <div class="alert alert-danger">
                        {{session('fail')}}
                    </div>
                @endif
                <div class="text-center pb-3">
                    <h3 class="mb-0 h3 fw-bold">Featured Products</h3>
                    <p class="mb-0 text-capitalize">The purpose of lorem ipsum</p>
                </div>
                <div class="product-thumbs">
                    @foreach($products as $product)
                    <div class="card">
                        <div class="position-relative overflow-hidden">
                            <div
                                class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                                
                                <form action="/shop/wish/add" method="post">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <button style="background-color:transparent; border:0" type="submit"><a style="color:#fff"><i class="bi bi-heart"></i></a></button>   
                                </form>
                                
                                <a href="{{ route('add_to_cart', $product->id) }}"><i class="bi bi-basket3"></i></a>
                                
                            </div>
                            <a href="product-details.html">
                                <img src="{{asset('storage/'.$product->photo)}}" class="card-img-top" alt="...">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="product-info text-center">
                                <h6 class="mb-1 fw-bold product-name">{{$product->name}}</h6>
                                <p class="mb-0 h6 fw-bold product-price">${{$product->price}}</p>
                                <p>Product Amount: {{$product->amount}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--end Featured Products slider-->

        <!--start features-->
        <section class="product-thumb-slider section-padding">
            <div class="container">
                <div class="text-center pb-3">
                    <h3 class="mb-0 h3 fw-bold">What We Offer!</h3>
                    <p class="mb-0 text-capitalize">The purpose of lorem ipsum</p>
                </div>
                <div class="row row-cols-1 row-cols-lg-4 g-4">
                    <div class="col d-flex">
                        <div class="card depth border-0 rounded-0 border-bottom border-primary border-3 w-100">
                            <div class="card-body text-center">
                                <div class="h1 fw-bold my-2 text-primary">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <h5 class="fw-bold">Free Delivery</h5>
                                <p class="mb-0">Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="card depth border-0 rounded-0 border-bottom border-danger border-3 w-100">
                            <div class="card-body text-center">
                                <div class="h1 fw-bold my-2 text-danger">
                                    <i class="bi bi-credit-card"></i>
                                </div>
                                <h5 class="fw-bold">Secure Payment</h5>
                                <p class="mb-0">Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="card depth border-0 rounded-0 border-bottom border-success border-3 w-100">
                            <div class="card-body text-center">
                                <div class="h1 fw-bold my-2 text-success">
                                    <i class="bi bi-minecart-loaded"></i>
                                </div>
                                <h5 class="fw-bold">Free Returns</h5>
                                <p class="mb-0">Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="card depth border-0 rounded-0 border-bottom border-warning border-3 w-100">
                            <div class="card-body text-center">
                                <div class="h1 fw-bold my-2 text-warning">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <h5 class="fw-bold">24/7 Support</h5>
                                <p class="mb-0">Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>
        <!--end features-->

        <!--start cartegory slider-->
        <section class="cartegory-slider section-padding bg-section-2">
            <div class="container">
                <div class="text-center pb-3">
                    <h3 class="mb-0 h3 fw-bold">Top Categories</h3>
                    <p class="mb-0 text-capitalize">Select your favorite categories and purchase</p>
                </div>
                <div class="cartegory-box">
                    @foreach($categories as $category)
                    <a href="shop-grid-type-4.html">
                        <div class="card">
                            <div class="card-body">
                                <div class="overflow-hidden">
                                    <img src="{{asset('storage/'.$category->photo)}}" class="card-img-top rounded-0" alt="...">
                                </div>
                                <div class="text-center">
                                    <h5 class="mb-1 cartegory-name mt-3 fw-bold">{{$category->name}}</h5>
                                    <h6 class="mb-0 product-number fw-bold"> {{$category->slug}}</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </section>
        <!--end cartegory slider-->

        <!--subscribe banner-->
        <section class="product-thumb-slider subscribe-banner p-5">
            <div class="row">
                <div class="col-12 col-lg-6 mx-auto">
                    <div class="text-center">
                        <h3 class="mb-0 fw-bold text-white">Get Latest Update by <br> Subscribe Our Newslater</h3>
                        <div class="mt-3">
                            <input type="text" class="form-control form-control-lg bubscribe-control rounded-0 px-5 py-3"
                                   placeholder="Enter your email">
                        </div>
                        <div class="mt-3 d-grid">
                            <button type="button" class="btn btn-lg btn-ecomm bubscribe-button px-5 py-3">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--subscribe banner-->

    </div>
    <!--end page content-->


@endsection
