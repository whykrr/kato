@extends('website.layout')

@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ url('website/img/banner/3.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ url('website/img/banner/2.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ url('website/img/banner/1.png') }}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <div class="container pt-4 pt-md-5">
        <div class="row">
            <div class="col-12 segment-title">
                <a class=" avenirl-med text-primary" href="#">new arrivals</a>
            </div>
        </div>
        <div class="owl-carousel" id="oc-new">
            @for ($i = 0; $i < 12; $i++)
                <div class="col-12 item">
                    <div class="card-custom">
                        <img src="{{ url('website/img/product/' . rand(4, 7) . '.png') }}" class="card-img-top"
                            alt="Product Image">
                        <div class="card-body-custom">
                            <div class="card-title-custom">ALGAE GREEN SHORT (Celana Pendek Linen)</div>
                            <p class="card-text-custom"><s class="disabled">IDR 120,000</s> IDR 110,000</p>
                            <a class="stretched-link" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <div class="container pt-4 pt-md-5">
        <div class="row">
            <div class="col-12 segment-title avenirl-med">
                <a class=" avenirl-med text-primary" href="#">VOL.6 : ALGAE</a>
                <p class="d-inline font-s"> - Short Description</p>
            </div>
        </div>
        <div class="owl-carousel" id="oc-collection">
            <div class="col-12 item">
                <img src="{{ url('website/img/collection/1.webp') }}" class="card-img-top" alt="Product Image">
            </div>
            <div class="col-12 item">
                <img src="{{ url('website/img/collection/2.webp') }}" class="card-img-top" alt="Product Image">
            </div>
        </div>
    </div>

    <div class="container pt-4 pt-md-5">
        <div class="row">
            <div class="col-12 segment-title">
                <a class=" avenirl-med text-primary" href="#">best sellers</a>
            </div>
        </div>
        <div class="owl-carousel" id="oc-best">
            @for ($i = 0; $i < 12; $i++)
                <div class="col-12">
                    <div class="card-custom">
                        <img src="{{ url('website/img/product/' . rand(4, 7) . '.png') }}" class="card-img-top"
                            alt="Product Image">
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <div class="container pt-4 pt-md-5 pb-4">
        <div class="row">
            <div class="col-12 segment-title">
                <div class="avenirl-med text-primary">shop by category</div>
            </div>
        </div>
        <div class="row g-2 g-md-5">
            @php
                $categories = ['trousers', 'outwear', 'top', 'bags', 'accesories'];
            @endphp
            @foreach ($categories as $c)
                <div class="col">
                <div class="card card-category border-0">
                        <img src="{{ url('website/img/categories/' . $c . '.png') }}" class="card-img-top" alt="Categories">
                        <div class="card-body py-0">
                            <a class="stretched-link d-block" href="#">{{ $c }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
