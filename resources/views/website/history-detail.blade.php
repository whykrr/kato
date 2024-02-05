@extends('website.layout')

@section('content')
    <div class="container py-3">
        <div class="row">
            <h5 class="text-center mb-4">Order 123123</h5>
            <div class="col-12 col-md-8 mx-md-auto font-s">
                <div class="row avenirl-med text-uppercase mb-2">
                    <div class="d-none d-sm-block col-md-5">Product</div>
                    <div class="col-4 col-md-2">Price</div>
                    <div class="col-4 col-md-2 text-center">Qty</div>
                    <div class="col-4 col-md-3 text-end">Total</div>
                </div>
                @for ($i = 1; $i <= 2; $i++)
                    <div class="row mb-3">
                        <div class="col-12 col-md-5">
                            <div class="row mb-3 mb-md-0">
                                <div class="col-4">
                                    <img src="{{ url('website/img/product/' . rand(4, 7) . '.png') }}" width="100%"
                                        alt="Product Name">
                                </div>
                                <div class="col-8">
                                    ALGAE GREEN SHORT (Celana Pendek Linen)
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-2">
                            <s class="disabled">IDR 120,000</s> <br> IDR 110,000
                        </div>
                        <div class="col-4 col-md-2 text-center">1</div>
                        <div class="col-4 col-md-3 text-end">IDR 110,000</div>
                    </div>
                @endfor
                <div class="row mb-3">
                    <div class="col-12 col-md-5">
                        <p class="mb-0 avenirl-med">Order Date</p>
                        <p class="mb-0">
                            05/05/2023 13:00
                        </p>
                        <hr class="my-2">
                        <p class="mb-0 avenirl-med">Shipping Address</p>
                        <p class="mb-0">
                            Wahyu Kristiawan <br>
                            Indonesia <br>
                            Jl. Danuri Gg. Boga No7, Sukun / Bandung Rejosari, East Java, Kota Malang 65148 <br>
                            082132538886
                        </p>
                        <hr class="my-2">
                        <p class="mb-0 avenirl-med">Shipping Date</p>
                        <p class="mb-0">
                            07/05/2023
                        </p>
                        <hr class="my-2">
                        <p class="mb-0 avenirl-med">Payment</p>
                        <p class="mb-0">
                            Transfer BCA
                        </p>
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="row">
                            <div class="col avenirl-med">
                                Coupon
                            </div>
                            <div class="col text-end">
                                BLACKFRIDAY50
                            </div>
                        </div>
                        <hr class="my-2">
                        <div class="row">
                            <div class="col avenirl-med">
                                Sub Total
                            </div>
                            <div class="col text-end">
                                IDR 120,000
                            </div>
                        </div>
                        <hr class="my-2">
                        <div class="row">
                            <div class="col avenirl-med">
                                Discount
                            </div>
                            <div class="col text-end">
                                IDR 0
                            </div>
                        </div>
                        <hr class="my-2">
                        <div class="row">
                            <div class="col avenirl-med">
                                Shipping
                            </div>
                            <div class="col text-end">
                                IDR 21,000
                            </div>
                        </div>
                        <hr class="my-2">
                        <div class="row">
                            <div class="col avenirl-med">
                                Grand Total
                            </div>
                            <div class="col text-end">
                                IDR 120,000
                            </div>
                        </div>
                        <hr class="my-2">
                    </div>
                </div>
                <div class="row mb-3 font-l">
                    <a href="{{ url('history') }}">
                        <i class="fa fa-arrow-left"></i>
                        Go Back</a>
                </div>
            </div>
        </div>
    @endsection
