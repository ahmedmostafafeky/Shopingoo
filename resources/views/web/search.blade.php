@extends('web.layout.main')
@section('content')

    <!--start page content-->

    <section class="section-padding bg-section-2">
        <div class="container mt-5">
            <div class="d-flex align-items-center">
                <div class="">
                    <h3 class="mb-0 fw-bold">Search Products</h3>
                </div>
            </div>
            <div class="search-box position-relative mt-4">
                <div class="position-absolute position-absolute top-50 start-0 translate-middle ms-4 fs-5 mt-5"><i class="bi bi-search"></i></div>
                <form method="post" action="/search">
                    @csrf
                    
                        <select class="form-select rounded-0" name="filter" >
                            <option value="Name">Name</option>
                            <option value="Price">Price</option>
                            <option value="Description">Description</option>
                        </select>
                    
                    <div class="mt-5">
                        <input class="form-control form-control-lg ps-5 rounded-0" name="search" type="text" placeholder="Type here to search">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="section-padding" style="height:500px">
        <div class="container">
        @if(isset($products))
        <div class="product-thumbs">
                    @foreach($products as $product)
                    <div class="card">
                        <div class="position-relative overflow-hidden">
                            <div
                                class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                                <a href="javascript:;"><i class="bi bi-heart"></i></a>
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
        @endif
    </section>

    <!--end page content-->

@endsection
