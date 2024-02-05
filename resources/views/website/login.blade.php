@extends('website.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mx-md-auto font-s">
                <h5 class="mb-4 avenirl-med text-uppercase">Welcome</h5>
                <form action="{{ url('login') }}" method="POST">
                    <div class="mb-3">
                        <x-bs.input label="Email address" type="email" name="email" />
                        <div class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <x-bs.input label="Password" type="password" name="password" />
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="showPassword">
                        <label class="form-check-label" for="showPassword">Show Password</label>
                    </div>
                    <div class="mb-3">
                        <a href="{{ url('forget-password') }}">Forget Password</a>
                    </div>
                    <div class="mb-3">
                        You haven't account ? <a href="{{ url('register') }}">Create An Account</a>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Login
                            <i class="fa fa-right-to-bracket"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#showPassword').change(function() {
            if ($(this).is(':checked')) {
                $('#passwordForm').attr('type', 'text');
            } else {
                $('#passwordForm').attr('type', 'password');
            }
        })
    </script>
@endsection
