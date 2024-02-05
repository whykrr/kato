@extends('website.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 font-s mb-3">
                <div class="col-12">
                    <div class="avenirl-med">Categories</div>
                    <a class="nav-link py-0" href="#">Top</a>
                    <a class="nav-link py-0" href="#">Trousers</a>
                    <a class="nav-link py-0" href="#">Outwear</a>
                    <a class="nav-link py-0" href="#">Bags</a>
                    <a class="nav-link py-0" href="#">Accesories</a>
                </div>

                @php
                    $variants = [
                        [
                            'slug' => 'colour',
                            'label' => 'Colour',
                            'item' => [
                                [
                                    'slug' => 'dark-grey',
                                    'label' => 'Dark Grey',
                                ],
                                [
                                    'slug' => 'red',
                                    'label' => 'Red',
                                ],
                                [
                                    'slug' => 'white',
                                    'label' => 'White',
                                ],
                                [
                                    'slug' => 'black',
                                    'label' => 'Black',
                                ],
                            ],
                        ],
                        [
                            'slug' => 'size',
                            'label' => 'Size',
                            'item' => [
                                [
                                    'slug' => 's',
                                    'label' => 'S',
                                ],
                                [
                                    'slug' => 'm',
                                    'label' => 'M',
                                ],
                                [
                                    'slug' => 'l',
                                    'label' => 'L',
                                ],
                                [
                                    'slug' => 'xl',
                                    'label' => 'XL',
                                ],
                            ],
                        ],
                    ];
                @endphp
                <form action="{{ url('explore') }}" method="GET">
                    @foreach ($variants as $v)
                        <div class="col-12 mt-3">
                            <label class="avenirl-med">{{ $v['label'] }}</label>
                            @foreach ($v['item'] as $vi)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="variants[]"
                                        id="{{ $v['slug'] . $vi['slug'] }}" value="{{ $v['slug'] . '.' . $vi['slug'] }}">
                                    <label class="form-check-label" for="{{ $v['slug'] . $vi['slug'] }}">
                                        {{ $vi['label'] }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-primary btn-block">Find Collection
                            <i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-9">
                <div class="row gy-3">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-3">
                            <div class="card-custom">
                                <img src="{{ url('website/img/product/' . rand(4, 7) . '.png') }}" class="card-img-top"
                                    alt="Product Image">
                                <div class="card-body-custom">
                                    <div class="card-title-custom">ALGAE GREEN SHORT (Celana Pendek Linen)</div>
                                    <p class="card-text-custom"><s class="disabled">IDR 120,000</s> IDR 110,000</p>
                                    <a class="stretched-link" href="{{ url('products') }}">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
