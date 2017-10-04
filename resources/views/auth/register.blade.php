@extends('layouts.auth')
@section('title','Login')
@section('content')
    <div class="animate form login_form">
        <section class="login_content">
            <form role="form" method="POST" action="{{ url('/register') }}">
                {{csrf_field()}}
                <h1>Create Account</h1>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Full Name" required="" />
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="email" required="" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Password confirmation" required="" />
                </div>
                <div>
                    <button class="btn btn-default submit" type="submit">Create Account</button>
                    <a class="reset_pass" href="{{ url('/password/reset') }}">Lost your password?</a>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                    <p class="change_link">Already Have an Account?
                        <a href="{{route('login')}}" class="to_register"> Sign In </a>
                    </p>

                    <div class="clearfix"></div>
                    <br />

                    <div>
                        <h1><i class="fa fa-plus-circle"></i> {{config('app.name')}}</h1>
                        <p>©{{date('Y')}} </p>
                    </div>
                </div>
            </form>
        </section>
    </div>

@endsection
