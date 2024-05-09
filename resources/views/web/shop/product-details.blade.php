@extends('web.layout.main')
@section('content')
    <!--start page content-->
    <div class="page-content">
        <!--start breadcrumb-->
        <div class="py-4 border-bottom">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Page Details</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <!--start product details-->
        <section class="py-4">
            <div class="container">
                <div class="row g-4">
                    <div class="col-12 col-xl-7">
                        <div class="product-images">
                            <div class="img-thumb-container overflow-hidden position-relative" data-fancybox="gallery" data-src="/assets/images/product-images/01.jpg">
                                <img src="{{asset('storage/'.$product->photo)}}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-5">
                        <div class="product-info">
                            <h4 class="product-title fw-bold mb-1">{{$product->name}}</h4>
                            <div class="product-rating">
                                <div class="hstack gap-2 border p-1 mt-3 width-content">
                                    <div><span class="rating-number">{{$reviewPercintage[0]}}</span><i class="bi bi-star-fill ms-1 text-warning"></i></div>
                                    <div class="vr"></div>
                                    <div>{{$reviewCounter[0]}} Ratings</div>
                                </div>
                            </div>
                            <hr>
                            <div class="product-price d-flex align-items-center gap-3">
                                <div class="h4 fw-bold">${{$product->price}}</div>
                            </div>
                            <div class="cart-buttons mt-3">
                                <div class="buttons d-flex flex-column flex-lg-row gap-3 mt-4">
                                    <a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-lg btn-dark btn-ecomm px-5 py-3 col-lg-6"><i class="bi bi-basket2 me-2"></i>Add to Bag</a>
                                    <form action="/shop/wish/add" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        <button class="btn btn-lg btn-outline-dark btn-ecomm px-5 py-3"><i class="bi bi-suit-heart me-2"></i>Wishlist</button>   
                                    </form>
                                </div>
                            </div>
                            <hr class="my-3">
                            <div class="product-info">
                                <h6 class="fw-bold mb-3">Product Details</h6>
                                <p class="mb-1">{{$product->description}}</p>
                                
                            <hr class="my-3">
                        </div>
                    </div>
                </div><!--end row-->
            </div>
        </section>
        <!--start product details-->
        <section class="py-4">
            <div class="container">
                <div class="row g-4">
                    <div class="customer-ratings">
                        <h6 class="fw-bold mb-3">Customer Ratings</h6>
                        <div class="d-flex align-items-center gap-4 gap-lg-5 flex-wrap flex-lg-nowrap">
                            <div class="">
                                <h1 class="mb-2 fw-bold">{{$reviewPercintage[0]}}</h1>
                                <div class="d-flex align-items-center">
                                @for($i = 0; $i < round($reviewPercintage[0]); ++$i) 
                                    <span class="fs-5 ms-2 text-warning"><i class="bi bi-star-fill"></i></span>
                                @endfor
                                </div>
                            </div>
                            <div class="vr d-none d-lg-block"></div>
                            <div class="w-100">
                                <div class="rating-wrrap hstack gap-2 align-items-center">
                                    <p class="mb-0">5</p>
                                    <div class=""><i class="bi bi-star"></i></div>
                                    <div class="progress flex-grow-1 mb-0 rounded-0" style="height: 4px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{$reviewPercintage[5]}}%"></div>
                                    </div>
                                    <p class="mb-0">{{$reviewCounter[5]}}</p>
                                </div>
                                <div class="rating-wrrap hstack gap-2 align-items-center">
                                    <p class="mb-0">4</p>
                                    <div class=""><i class="bi bi-star"></i></div>
                                    <div class="progress flex-grow-1 mb-0 rounded-0" style="height: 4px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{$reviewPercintage[4]}}%"></div>
                                    </div>
                                    <p class="mb-0">{{$reviewCounter[4]}}</p>
                                </div>
                                <div class="rating-wrrap hstack gap-2 align-items-center">
                                    <p class="mb-0">3</p>
                                    <div class=""><i class="bi bi-star"></i></div>
                                    <div class="progress flex-grow-1 mb-0 rounded-0" style="height: 4px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: {{$reviewPercintage[3]}}%"></div>
                                    </div>
                                    <p class="mb-0">{{$reviewCounter[3]}}</p>
                                </div>
                                <div class="rating-wrrap hstack gap-2 align-items-center">
                                    <p class="mb-0">2</p>
                                    <div class=""><i class="bi bi-star"></i></div>
                                    <div class="progress flex-grow-1 mb-0 rounded-0" style="height: 4px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{$reviewPercintage[2]}}%"></div>
                                    </div>
                                    <p class="mb-0">{{$reviewCounter[2]}}</p>
                                </div>
                                <div class="rating-wrrap hstack gap-2 align-items-center">
                                    <p class="mb-0">1</p>
                                    <div class=""><i class="bi bi-star"></i></div>
                                    <div class="progress flex-grow-1 mb-0 rounded-0" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{$reviewPercintage[1]}}%"></div>
                                    </div>
                                    <p class="mb-0">{{$reviewCounter[1]}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-3">
                    <div class="customer-reviews">
                        <h6 class="fw-bold mb-3">Customer Reviews ({{$reviewCounter[0]}})</h6>
                        <div class="reviews-wrapper">
                            @foreach($reviews as $review)
                                
                                <div class="d-flex flex-column flex-lg-row gap-3">
                                    <div class=""><span class="badge bg-green rounded-0">{{$review->rate}}<i class="bi bi-star-fill ms-1"></i></span></div>
                                    <div class="flex-grow-1">
                                        <p class="mb-2">{{$review->review}}</p>
                                        <div class="review-img">
                                            <img src="{{asset('storage/'.$users[$review->id]['image'])}}" alt="" width="70">
                                        </div>
                                        <div class="d-flex flex-column flex-sm-row gap-3 mt-3">
                                            <div class="hstack flex-grow-1 gap-3">
                                                <p class="mb-0">{{$users[$review->id]['name']}}</p>
                                                <div class="vr"></div>
                                                <div class="date-posted">{{$review->created_at->diffForHumans()}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
    
                               
                            <form action="/shop/product/add/review/{{$product->id}}" method="post">
                                @csrf
                                <div class="form-body">
                                    <h4 class="mb-0 fw-bold">Leave a review</h4>
                                    <div class="my-3 border-bottom"></div>
                                    <div class="mb-3">
                                        <label class="form-label">Your Review</label>
                                        <input type="text" name="review" class="form-control rounded-0">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Enter Email</label>
                                        <input  type="number" name="rate" class="form-control rounded-0">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-dark btn-ecomm">Send Your Review</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--end page content-->

@endsection
