@extends('website.layout')

@section('content')
    <div class="container">
        <div class="row flex-md-row-reverse">
            <div class="col-12 col-md-8 mb-4">
                <div class="row g-0 g-md-3">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-6">
                            <img src="{{ url('website/img/product/' . rand(4, 7) . '.png') }}" width="100%"
                                alt="Product Photo">
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="sticky-top" style="top: 80px">
                    <div class="avenirl-med mb-1">ALGAE GREEN SHORT (Celana Pendek Linen)</div>
                    <div class="font-m mb-3">
                        <s class="disabled">IDR 120,000</s> <br> IDR 110,000
                    </div>
                    <div class="font-s">
                        <p>
                            Lingkar Dada : 105 cm (M) / 114 cm (L) <br>
                            Panjang Baju : 69 cm (M) / 72 cm (L)
                        </p>

                        <p>—
                            Material: Linen
                        </p>

                        <p>
                            Kain tidak mengandung polyester sehingga lebih ramah lingkungan.
                        </p>

                        <p>
                            Sejuk. Menyerap keringat. Nyaman digunakan untuk bersantai atau bekerja.
                        </p>

                        <p>
                            Model:
                            Model Menggunakan Size L
                            Tinggi : 185 cm
                            Berat : 77 kg
                        </p>
                        <p>
                            Dikemas dengan aman menggunakan box dan dan cassava-bag yang ramah lingkungan dan compostable.
                        </p>

                        <p>
                            #KATOPLUS
                        </p>
                    </div>
                    <form action="#">
                        <div class="col-12">
                            <label class="avenirl-med">Size</label>
                        </div>
                        <div class="col-12">
                            @php
                                $size = ['S', 'M', 'L', 'XL'];
                            @endphp
                            @foreach ($size as $i)
                                <input type="radio" class="btn-check" name="options-outlined"
                                    id="size-{{ $i }}" autocomplete="off">
                                <label class="btn btn-outline-primary font-monospace"
                                    for="size-{{ $i }}">{{ $i }}</label>
                            @endforeach
                        </div>

                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-link px-0">Add to Cart</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
