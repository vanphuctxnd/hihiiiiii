@extends('front.layout.master')

@section('title', 'Login')

@section('body')

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="/"><i class="fa fa-home"></i> Home</a>
                    <span>Login</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>Login</h2>

                    @if(session('notification'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('notification') }}
                        </div>
                    @endif 

                    <form action="" method="post">
                        @csrf
                        <div class="group-input">
                            <label for="username">Username or email address *</label>
                            <input type="email" id="username" name="email">
                        </div>
                        <div class="group-input">
                            <label for="pass">Password *</label>
                            <div class="password-input-wrapper">
                                <input type="password" id="pass" name="password">
                                <span toggle="#pass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                        </div>
                        <div class="group-input gi-check">
                            <div class="gi-more">
                                <label>
                                    Save Password
                                    <input type="checkbox" id="save-pass" name="remember">
                                    <span class="checkmark"></span>
                                </label>
                                <a href="#" class="forget-pass">Forget your Password</a>
                            </div>
                        </div>
                        <button type="submit" class="site-btn login-btn">Sign In</button>
                    </form>
                    <div class="switch-login">
                        <a href="./account/register" class="or-login">Or Create An Account</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Register Section End -->


@endsection