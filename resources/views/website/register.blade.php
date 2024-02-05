@extends('website.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mx-md-auto font-s">
                <h5 class="mb-4 avenirl-med text-uppercase">Register</h5>
                <form action="{{ url('login') }}" method="POST">
                    <div class="mb-3">
                        <x-bs.input label="Name" type="text" name="name" />
                    </div>
                    <div class="mb-3">
                        <x-bs.input label="Email Address" type="email" name="email" />
                        <div class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <x-bs.input label="Password" type="password" name="password" />
                    </div>
                    <div class="mb-3">
                        <x-bs.input label="Password Verification" type="password" name="password_verification" />
                        <div id="passwordVerifHelp" class="form-text">Password and password verification must be same
                        </div>
                    </div>
                    <div class="mb-3">
                        <x-bs.input label="Reveral Code" type="text" name="referal_code" />
                        <div id="nameReveralCode" class="form-text">Insert your reveral code</div>
                    </div>
                    <div class="mb-3">
                        You already have account ? <a href="{{ url('login') }}">Login</a>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Register
                            <i class="fa fa-right-to-bracket"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
