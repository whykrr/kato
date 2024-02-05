@extends('website.layout')

@section('content')
    <div class="container font-s">
        <div class="row">
            <div class="col-12 col-md-6">
                <h5 class="mb-4">Profile</h5>
                <div class="row mb-3">
                    <div class="col-12 col-md-4 avenirl-med">
                        Name
                    </div>
                    <div class="col-12 col-md-8 avenirl-med text-md-end">
                        Wahyu Kristiawan
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-md-4 avenirl-med">
                        Email
                    </div>
                    <div class="col-12 col-md-8 avenirl-med text-md-end">
                        whykris97@gmail.com
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <a href="{{ url('profile/update') }}" class="btn btn-primary">Update
                            Profil</a>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <a href="{{ url('profile/change-password') }}" class="btn btn-primary">Change Password</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <h5 class="mb-4">Address</h5>
                @for ($i = 1; $i <= 2; $i++)
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="mb-2 avenirl-med">
                                Wahyu Kristiawan
                            </div>
                            <div class="mb-2">
                                +6282313538886
                            </div>
                            <div class="mb-2">
                                Indonesia
                            </div>
                            <div class="mb-2">
                                Jl. Danuri Gg. Boga No7, Sukun / Bandung Rejosari, East Java, Kota Malang <br>
                            </div>
                            <div class="mb-2">
                                65148
                            </div>
                            <div class="mb-2">
                                <a href="{{ 'profile/address/' . $i }}" class="btn btn-primary"> Change</a>
                                <form class="d-inline-block" action="{{ url('profile/delete-adress/' . $i) }}"
                                    method="POST">
                                    <input type="hidden" name="id" value="{{ $i }}">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endfor
                <div class="mb-2 d-grid">
                    <a href="{{ 'profile/address' }}" class="btn btn-primary"> Add Address <i class="fa fa-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
