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
                    <li class="breadcrumb-item active" aria-current="page">Shop With Grid</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <!--start product details-->
    <section class="section-padding">
        <div class="container">
            @if(session('succes'))
                <div class="alert alert-success">
                    {{session('succes')}}
                </div>
            @endif
            <div class="d-flex align-items-center px-3 py-2 border mb-4">
                <div class="text-start">
                    <h4 class="mb-0 h4 fw-bold">Account - Orders</h4>
                </div>
            </div>
            <div class="btn btn-dark btn-ecomm d-xl-none position-fixed top-50 start-0 translate-middle-y"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarFilter"><span><i class="bi bi-person me-2"></i>Account</span></div>
            <div class="row">
                <div class="col-12 col-xl-3 filter-column">
                    <nav class="navbar navbar-expand-xl flex-wrap p-0">
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbarFilter" aria-labelledby="offcanvasNavbarFilterLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title mb-0 fw-bold text-uppercase" id="offcanvasNavbarFilterLabel">Account</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body account-menu">
                                <div class="list-group w-100 rounded-0">
                                    <a href="/profile/myorders" class="list-group-item active"><i class="bi bi-basket3 me-2"></i>Orders</a>
                                    <a href="/profile" class="list-group-item"><i class="bi bi-person me-2"></i>Profile</a>
                                    <a href="/profile/edit" class="list-group-item"><i class="bi bi-pencil me-2"></i>Edit Profile</a>
                                    <a href="/shop/wish" class="list-group-item"><i class="bi bi-suit-heart me-2"></i>Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-12 col-xl-9">

                    @foreach($orders as $order)
                        <hr>
                        <h4 class="m-4">
                            Order: {{$loop->iteration}}  
                        </h4>
                        <h5 class="m-4">
                            State: {{$order->state}} 
                        </h5>
                        <h6  class="m-4">  
                            @if($order->state == 'binding') 
                                <a href="/profile/cancelOrder/{{$order->id}}" class="btn btn-danger">cancel</a>
                                <a href="/profile/confirmOrder/{{$order->id}}" class="btn btn-dark">confirm</a>
                            @elseif($order->state == 'confirmed')
                                <a href="/profile/confirmOrderDelevary/{{$order->id}}" class="btn btn-dark">Delivered</a>
                            @endif
                        </h6>
                        @foreach($order->orderItems as $item)
                            <div class="card rounded-0 mb-3">
                                <div class="card-body">
                                    <div class="d-flex flex-column flex-xl-row gap-3">
                                        <div class="product-img">
                                            <img src="{{asset('storage/'.$item->product->photo)}}" width="120" alt="">
                                        </div>
                                        
                                        <div class="product-info flex-grow-1">
                                            <h5 class="fw-bold mb-1">{{$item->product->name}}</h5>
                                            <p class="fw-bold mb-0">Amount:  {{$item->amount}}</p>
                                            <p class="fw-bold mb-0">State:  {{$item->state}}</p>
                                            @if($item->state == 'sent')
                                                <a href="/profile/confirmOrderItem/{{$item->id}}" class="btn btn-dark">Delivered</a>
                                            @endif
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach

                </div>
            </div><!--end row-->
        </div>
    </section>
    <!--start product details-->

</div>
    <!--end page content-->
@endsection
