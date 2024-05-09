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
                        <li class="breadcrumb-item"><a href="javascript:;">checkout</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Billing Details</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <!--start product details-->
        <section class="section-padding">
            <form method="post" action="/checkout/bill/save">
                @csrf
                <div class="container">
                    <div class="d-flex align-items-center px-3 py-2 border mb-4">
                        <div class="text-start">
                            <h4 class="mb-0 h4 fw-bold">Billing Details</h4>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-12 col-lg-8 col-xl-8">

                            <h6 class="fw-bold mb-3 py-2 px-3 bg-light">Personal Details</h6>
                            <div class="card rounded-0 mb-3">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-12">
                                            <div class="form-floating">
                                                <input type="text" name="name" class="form-control rounded-0" id="floatingFirstName" placeholder="First Name" value="{{$userDate['name']}}">
                                                <label for="floatingFirstName">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-floating">
                                                <input type="text" name="email" class="form-control rounded-0" id="floatingEmail" placeholder="Email" value="{{$userDate['email']}}">
                                                <label for="floatingEmail">Email</label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-6">
                                            <div class="form-floating">
                                                <input type="text" name="mobile" class="form-control rounded-0" id="floatingMobileNo" placeholder="Mobile No" value="{{$userDate['phone']}}">
                                                <label for="floatingMobileNo">Mobile No</label>
                                            </div>
                                        </div>
                                        
                                    </div><!--end row-->
                                </div>
                            </div>

                            <h6 class="fw-bold mb-3 py-2 px-3 bg-light">Shipping Details</h6>
                            <div class="card rounded-0">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-12 col-lg-12">
                                            <div class="form-floating">
                                                <input type="text" name="address" class="form-control rounded-0" id="floatingStreetAddress" placeholder="Street Address" value="{{$userDate['address']}}"> 
                                                <label for="floatingStreetAddress">Street Address</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="form-floating">
                                                <input type="text" name="zip_code" class="form-control rounded-0" id="floatingZipCode" placeholder="Zip Code">
                                                <label for="floatingZipCode">Zip Code</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="form-floating">
                                                <input type="text" name="city" class="form-control rounded-0" id="floatingCity" placeholder="City">
                                                <label for="floatingCity">City</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="form-floating">
                                                <input type="text" name="country" class="form-control rounded-0" id="floatingCountry" placeholder="Country">
                                                <label for="floatingCountry">Country</label>
                                            </div>
                                        </div>
                                    </div><!--end row-->
                                </div>
                            </div>


                        </div>
                        <div class="col-12 col-lg-4 col-xl-4">
                            <div class="card rounded-0 mb-3">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-4">Order Summary</h5>
                                    <div class="hstack align-items-center justify-content-between">
                                        <p class="mb-0">Bag Total</p>
                                        <p class="mb-0">${{session('total')}}</p>
                                    </div>
                                    <hr>
                                    <div class="hstack align-items-center justify-content-between">
                                        <p class="mb-0">Delivery</p>
                                        <p class="mb-0">${{session('total') * 0.25 }}</p>
                                    </div>
                                    <hr>
                                    
                                    <div class="hstack align-items-center justify-content-between">
                                        <p class="mb-0">Taxs</p>
                                        <p class="mb-0">${{session('total') * 0.14 }}</p>
                                    </div>
                                    <hr>
                                    <div class="hstack align-items-center justify-content-between fw-bold text-content">
                                        <p class="mb-0">Total Amount</p>
                                        <p class="mb-0">${{ session('total')  + (session('total') * 0.25) +  (session('total') * 0.14)}}</p>
                                    </div>
                                    <div class="d-grid mt-4">
                                        <button type="submit" class="btn btn-dark btn-ecomm py-3 px-5">Continue</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!--end row-->
                </div>
            </form>
        </section>
        <!--start product details-->




    </div>
    <!--end page content-->


@endsection
