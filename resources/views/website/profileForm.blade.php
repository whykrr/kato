@extends('website.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 font-s">
                <h5 class="mb-4 avenirl-med text-uppercase">Update Profil</h5>
                <form action="{{ url('profile/update-profile') }}" method="POST">
                    <div class="mb-3">
                        <x-bs.input label="Name" type="text" name="name" />
                    </div>
                    <div class="mb-3">
                        <x-bs.input label="Email address" type="text" name="name" />
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update
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
