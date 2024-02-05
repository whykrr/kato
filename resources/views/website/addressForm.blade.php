@extends('website.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 font-s">
                <h5 class="mb-4 avenirl-med text-uppercase">
                    @if (isset($id))
                        Change
                    @else
                        Add
                    @endif
                    Address
                </h5>
                <form action="{{ url('profile/change-password') }}" method="POST">
                    <div class="mb-3">
                        <x-bs.input label="Name" type="text" name="name" />
                    </div>
                    <div class="mb-3">
                        @php
                            $country = [
                                'ID' => 'Indonesia',
                                'SG' => 'Singapore',
                            ];
                        @endphp
                        <x-bs.select label="Country" name="country" :options="$country" />
                    </div>
                    <div class="mb-3">
                        <x-bs.textarea label="Address" name="address" />
                    </div>
                    <div class="mb-3">
                        <x-bs.input label="State / Province" type="text" name="state" />
                    </div>
                    <div class="mb-3">
                        <x-bs.input label="City" type="text" name="city" />
                    </div>
                    <div class="mb-3">
                        <x-bs.input label="District" type="text" name="district" />
                    </div>
                    <div class="mb-3">
                        <x-bs.input label="Subdistrict" type="text" name="subdistrict" />
                    </div>
                    <div class="mb-3">
                        <x-bs.input label="Postal Code" type="text" name="postal_code" />
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Save
                        </button>
                    </div>
                    <div class="mb-3 font-l">
                        <a href="{{ url('profile') }}">
                            <i class="fa fa-arrow-left"></i>
                            Go Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
