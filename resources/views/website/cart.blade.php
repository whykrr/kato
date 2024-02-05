@extends('website.layout')

@section('content')
    <div class="container py-3">
        <div class="row">
            <h5 class="text-center mb-4">Shopping Cart</h5>
            <div class="col-12 col-md-8 mx-md-auto font-s">
                <div class="row avenirl-med text-uppercase mb-2">
                    <div class="d-none d-sm-block col-md-5">Product</div>
                    <div class="col-4 col-md-2">Price</div>
                    <div class="col-4 col-md-2 text-center">Qty</div>
                    <div class="col-4 col-md-2 text-end">Total</div>
                    <div class="d-none d-sm-block col-md-1"></div>
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
                        <div class="col-4 col-md-2 text-end">IDR 110,000</div>
                        <div class="col-12 col-md-1 text-end">
                            <form action="#" method="DELETE">
                                <input type="hidden" name="id" value="1">
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                @endfor
                <div class="row mb-3 justify-content-md-end">
                    <div class="col-12 col-md-7">
                        <div class="row gx-1 mb-2">
                            <div class="col-9">
                                <input type="text" class="form-control" placeholder="Coupon">
                            </div>
                            <div class="col-3 d-grid">
                                <button type="submit" class="btn btn-primary ">Apply</button>
                            </div>
                        </div>
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
                                Grand Total
                            </div>
                            <div class="col text-end">
                                IDR 120,000
                            </div>
                        </div>
                        <hr class="my-2">
                        <div class="row">
                            <div class="col-12 d-grid">
                                <button type="submit" class="btn btn-primary">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
