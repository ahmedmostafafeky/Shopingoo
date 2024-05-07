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
                        <li class="breadcrumb-item active" aria-current="page">Wishlist </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->


        <!--start product wishlist-->
        <section class="section-padding">
            <div class="container">
                <div class="d-flex align-items-center px-3 py-2 border mb-4">
                    <div class="text-start">
                        <h4 class="mb-0 h4 fw-bold">Wishlist (10 Items)</h4>
                    </div>
                    <div class="ms-auto">
                        <button type="button" class="btn btn-light btn-ecomm">Continue Shopping</button>
                    </div>
                </div>

                <div class="similar-products">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 g-4">
                        @foreach($products as $product)
                            <div class="col">
                                <div class="card rounded-0">
                                    <form action="/shop/wish/delete" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        <button type="submit"><div class="btn-close wishlist-close position-absolute end-0 top-0"></div></button>
                                    </form>
                                    <a href="javascript:;">
                                        <img src="{{asset('storage/'.$product['photo'])}}" alt="" class="card-img-top rounded-0">
                                    </a>
                                    <div class="card-body border-top text-center">
                                        <p class="mb-0 product-short-name">${{$product->name}}</p>
                                        <div class="product-price d-flex align-items-center gap-2 mt-2 justify-content-center">
                                            <div class="h6 fw-bold">{{$product['price']}}</div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent text-center">
                                        <form action="/shop/wish/move" method="post">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                            <button type="submit" class="btn btn-ecomm w-100">Move to Bag</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!--end row-->
                </div>
            </div>
        </section>
        <!--start product details-->
    </div>
    <!--end page content-->


@endsection
