<!--start cart-->
<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasRight" style=" overflow: scroll;"
     aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header bg-section-2">
        <h5 class="mb-0 fw-bold" id="offcanvasRightLabel">My cart</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body" >
        <div class="cart-list">
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
            
            <div class="d-flex align-items-center gap-3">
                <div class="bottom-product-img">
                    <a href="product-details.html">
                        <img src="{{asset('storage/'.$details['photo'])}}" width="60" alt="">
                    </a>
                </div>
                <div class="">
                    <h6 class="mb-0 fw-light mb-1">{{$details['name']}} </h6>
                    <p class="mb-0"><strong>{{$details['price']}}$</strong></p>
                    <p class="mb-0"><strong>Amount:</strong> {{$details['amount']}}</p>
                </div>
                <div class="ms-auto fs-5">
                        <table>
                            <tr data-id="{{ $id }}">
                                <td class="actions" data-th="">
                                    <a class="btn btn-primary" href="{{ route('add_to_cart', $id) }}"><i class="bi bi-plus-lg"></i></a>
                                    <button type="submit" class="btn btn-warning remove-from-cart"><i class="bi bi-dash-lg"></i></i></button>
                                    <a class="btn btn-danger" href="{{ route('remove_all_from_cart', $id) }}"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        </table>

                </div>
            </div>
            <hr>
            @endforeach
        @endif
        </div>
    </div>
    <div class="offcanvas-footer p-3 border-top">
        <div class="d-grid">
            <p>Total Price: {{session('total').'$'}}</p>
        </div>
    </div>
    <div class="offcanvas-footer p-3 border-top">
        <div class="d-grid">
            <a class="btn btn-lg btn-dark btn-ecomm px-5 py-3" href="/checkout/pay" style="color:#fff">Checkout</a>
        </div>
    </div>

</div>
<!--end cat-->
