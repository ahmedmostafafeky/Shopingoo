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
                        <li class="breadcrumb-item active" aria-current="page">{{$categoryname}}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->


        <!--start product grid-->
        <section class="py-4">
           
            <div class="container">
                <div class="btn btn-dark btn-ecomm d-xl-none position-fixed top-50 start-0 translate-middle-y"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarFilter"><span><i class="bi bi-funnel me-1"></i> Filters</span></div>
                <div class="row">                
                    <div class="col-12 col-xl-12">
                        <div class="shop-right-sidebar">
                            <div class="card rounded-0">
                                <div class="card-body p-2">
                                    <div class="d-flex align-items-center justify-content-between bg-light p-2">
                                        <div class="view-type hstack gap-2 d-none d-xl-flex">
                                            <p class="mb-0">{{$categoryname}}</p>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="product-grid mt-4">
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                    @foreach($products as $product)
                                        <div class="col">
                                            <div class="card border shadow-none">
                                                <div class="position-relative overflow-hidden">
                                                    <div class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                                                        <a href="javascript:;"><i class="bi bi-heart"></i></a>
                                                        <a href="{{ route('add_to_cart', $product->id) }}"><i class="bi bi-basket3"></i></a>
                                                    </div>
                                                    <a href="javascript:;">
                                                        <img src="{{asset('storage/'.$product->photo)}}" class="card-img-top" alt="...">
                                                    </a>
                                                </div>
                                                <div class="card-body border-top">
                                                    <h5 class="mb-0 fw-bold product-short-title">{{$product->name}}</h5>
                                                    <p class="mb-0 product-short-name">{{$product->description}}</p>
                                                    <div class="product-price d-flex align-items-center gap-2 mt-2">
                                                        <div class="h6 fw-bold">${{$product->price}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div><!--end row-->
                            </div>

                        </div>
                    </div>
                </div><!--end row-->
            </div>
        </section>
        <!--start product details-->




    </div>
    <!--end page content-->

@endsection
