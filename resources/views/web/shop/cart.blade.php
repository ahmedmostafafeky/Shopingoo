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
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->


        <!--start product details-->
        <section class="section-padding">
            <div class="container">
                <div class="d-flex align-items-center px-3 py-2 border mb-4">
                    <div class="text-start">
                        <h4 class="mb-0 h4 fw-bold">My Bag</h4>
                    </div>
                    
                </div>
                <div class="row g-4">
                    <div class="col-12 col-xl-8">
                        @foreach(session()->get('cart') as $item)
                        <div class="card rounded-0 mb-3">
                            <div class="card-body">
                                <div class="d-flex flex-column flex-lg-row gap-3">
                                    <div class="product-img">
                                        <img src="{{asset('storage/'.$item['photo'])}}" width="150" alt="">
                                    </div>
                                    <div class="product-info flex-grow-1">
                                        <h5 class="fw-bold mb-0">{{$item['name']}}</h5>
                                        <div class="product-price d-flex align-items-center gap-2 mt-3">
                                            <div class="h6 fw-bold">${{$item['price']}}</div>
                                        </div>
                                        <div class="mt-3 hstack gap-2">
                                            <button type="button" class="btn btn-sm btn-light border rounded-0" data-bs-toggle="modal" data-bs-target="#QtyModal">Qty : {{$item['amount']}}</button>
                                        </div>
                                    </div>
                                    <div class="d-none d-lg-block vr"></div>
                                    <div class="d-grid gap-2 align-self-start align-self-lg-center">
                                        
                                        <table>
                                            <tr data-id="{{$item['id']}}">
                                                <td class="actions" data-th="">
                                                    <button type="submit" class="btn btn-ecomm remove-from-cart"><i class="bi bi-x-lg me-2"></i>Remove</button>
                                                </td>
                                            </tr>
                                        </table>
                                        <form action="/shop/cart/move" method="post">
                                            @csrf
                                            <input type="hidden" value="{{$item['id']}}" name ="id" />
                                            <button type="submit" class="btn dark btn-ecomm"><i class="bi bi-suit-heart me-2"></i>Move to Wishlist</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="card rounded-0 mb-3">
                            <div class="card-body">
                                <h5 class="fw-bold mb-4">Order Summary</h5>
                                <div class="hstack align-items-center justify-content-between">
                                    <p class="mb-0">Bag Total</p>
                                    <p class="mb-0">$599.00</p>
                                </div>
                                <hr>
                                <div class="hstack align-items-center justify-content-between">
                                    <p class="mb-0">Delivery</p>
                                    <p class="mb-0">$29.00</p>
                                </div>
                                <hr>
                                <div class="hstack align-items-center justify-content-between fw-bold text-content">
                                    <p class="mb-0">Total Amount</p>
                                    <p class="mb-0">$393.00</p>
                                </div>
                                <div class="d-grid mt-4">
                                    <a class="btn btn-dark btn-ecomm py-3 px-5"href="/checkout/pay">Place Order</a>
                                </div>
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
