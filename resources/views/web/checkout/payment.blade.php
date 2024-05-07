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
                        <li class="breadcrumb-item"><a href="javascript:;">Checkout</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Payment Method</li>
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
                        <h4 class="mb-0 h4 fw-bold">Select Payment Method</h4>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-12 col-lg-8 col-xl-8">
                        <div class="card rounded-0 payment-method">
                            <div class="row g-0">
                                <div class="col-12 col-lg-4 bg-light">
                                    <div class="nav flex-column nav-pills">
                                        <button class="nav-link active rounded-0" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"><i class="bi bi-cash-stack me-2"></i>Cash On Delivery</button>
                                        <button class="nav-link rounded-0" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button"><i class="bi bi-paypal me-2"></i>Paypal</button>
                                        <button class="nav-link  rounded-0" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button"><i class="bi bi-credit-card-2-back me-2"></i>Credit/Debit Card</button>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-8">
                                    <div class="tab-content p-3">
                                        <div class="tab-pane fade show active" id="v-pills-home">
                                            <form method="post" action="/checkout/pay/cod">
                                                @csrf
                                                <h5 class="mb-3 fw-bold">I would like to pay after product delivery</h5>
                                                <button type="submit" class="btn btn-ecomm btn-dark w-100 py-3 px-5">Place Order</button>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile">
                                            <div class="mb-3">
                                                <p>Select your Paypal Account type</p>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">Domestic</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">International</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-block">	<a href="javscript:;" class="btn btn-outline-dark btn-ecomm rounded-0"><i class="bi bi-paypal me-2"></i>Login to my Paypal</a>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <p class="mb-0">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order.</p>
                                            </div>
                                            <button type="button" class="btn btn-ecomm btn-dark w-100 py-3 px-5">Pay Now</button>
                                        </div>
                                        <div class="tab-pane fade " id="v-pills-messages">
                                            <div class="row g-3">
                                                <form action="/checkout/pay/cridet" method="post">
                                                    @csrf
                                                    <div class="col-12">
                                                        <button type="sucmit" class="btn btn-ecomm btn-dark w-100 py-3 px-5">Pay Now</button>
                                                    </div>
                                                </form>
                                                
                                            </div><!--end row-->
                                        </div>
                                    </div>
                                </div>
                            </div><!--end row-->
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
