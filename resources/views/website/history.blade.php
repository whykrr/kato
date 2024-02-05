@extends('website.layout')

@section('content')
    <div class="container py-3">
        <div class="row">
            <h5 class="text-center mb-4">History Order</h5>
            <div class="col-12 col-md-8 mx-md-auto font-s">
                @for ($i = 1; $i <= 2; $i++)
                    <div class="row mb-3">
                        <div class="col-12 col-md-10">
                            <h5 class="avenirl-med">Order in 05/05/2023 13:00</h5>
                            <p class="mb-0">Order No : 123123</p>
                            <p class="mb-0">Status : <span class="text-success">Success</span></p>
                            <p class="mb-0">Shipping Date : 07/05/2023</p>
                            <p class="mb-0">Delivery Service : Nnja Van</p>
                            <p class="mb-0">Airway Bill : <a href="#">AWB-123</a></p>
                        </div>
                        <div class="col-4 col-md-2">
                            <a href="{{ url('history/' . $i) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                    <hr>
                @endfor
            </div>
        </div>
    @endsection
