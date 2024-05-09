@extends('web.layout.main')
@section('content')
    <!--start page content-->
    <div class="page-content">
        <section class="wrapper-invoice">
            <!-- switch mode rtl by adding class rtl on invoice class -->
            <div class="invoice">
                <div class="invoice-information">
                    <p><b>Invoice #</b> : {{$bill['id']}}</p>
                    <p><b>Created Date </b>: {{$bill['created_at']}}</p>
                </div>
                <!-- logo brand invoice -->
                <div class="invoice-logo-brand">
                <!-- <h2>Tampsh.</h2> -->
                    <img src="./assets/image/tampsh.png" alt="" />
                </div>
                <!-- invoice head -->
                <div class="invoice-head">
                    <div class="head client-info">
                        <p>SHOPINGOO, Inc.</p>
                        <p>Order ID: {{$bill['order_id']}}</p>
                        <p>Name: {{$bill['name']}}</p>
                        <p>Mobile: {{$bill['phone']}}</p>
                        <p>Email: {{$bill['email']}}</p>
                        <p>City: {{$bill['city']}} , Country: {{$bill['country']}}</p>
                        <p>Address: {{$bill['address']}}</p>
                        <p>ZIP Code: {{$bill['zip_code']}}</p>
                        <p>PaymentType: {{$bill->order->transaction->mode}}</p>
                    </div>
                </div>
                <!-- invoice body-->
                <div class="invoice-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Item Description</th>
                                <th>Amount</th>
                                <th>Price</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                            <tr>
                                <td>{{$item->product->id}}</td>
                                <td>{{$item->product->name}}</td>
                                <td>{{$item->amount}}</td>
                                <td>${{$item->product->price}}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <th>-</th>
                                <th>Total</th>
                                <th>-</th>   
                                <th>${{$bill->cart_cost}}</th>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex-table">
                        <div class="flex-column"></div>
                        <div class="flex-column">
                            <table class="table-subtotal">
                                <tbody>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td>${{session('total')}}</td>
                                    </tr>
                                    <tr>
                                        <td>Delivery</td>
                                        <td>${{session('total') * 0.25 }}</td>
                                    </tr>
                                    <tr>
                                        <td>TAXs 14%</td>
                                        <td>${{session('total') * 0.14 }}</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- invoice total  -->
                    <div class="invoice-total-amount">
                        <p>Total : {{ session('total')  + (session('total') * 0.25) +  (session('total') * 0.14)}}</p>
                    </div>
                </div>
                <!-- invoice footer -->
                <div class="invoice-footer">
                    <p>Thankyou, happy shopping again In SHOPINGOO</p>
                </div>
            </div>
        </section>
        <div class="m-4 wrapper-invoice">
            <form method="post" action="/checkout/save">
                @csrf
                <button type="submit" class="btn btn-dark btn-ecomm py-3 px-5">Confirm</button>
            </form>
        </div>
    </div>
@endsection