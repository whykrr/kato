@extends('website.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 font-s">
                <h5 class="mb-4 avenirl-med text-uppercase">Change Password</h5>
                <form action="{{ url('profile/change-password') }}" method="POST">
                    <div class="mb-3">
                        <x-bs.input label="Old Password" type="password" name="old_password" />
                    </div>
                    <div class="mb-3">
                        <x-bs.input label="New Password" type="password" name="new_password" />
                    </div>
                    <div class="mb-3">
                        <x-bs.input label="New Password Verification" type="password" name="new_password_verification" />
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Change
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
