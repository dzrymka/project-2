@extends('layout._default.auth')

@section('content')
    <div class="row g-0 app-auth-wrapper" style="min-height: 100vh; position: relative;">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5"
            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 2; background: rgba(255, 255, 255, 0.9); border-radius: 100px; height: 60vh; display: flex; flex-direction: column; justify-content: center;">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto" style="width: 100%; max-width: 400px;">
                    <div class="app-auth-branding mb-4">
                        <a class="app-logo" href="/login">
                            <img class="logo-icon me-2" src="{{ asset('images/logologin.jpg') }}"
                                style="background-size: cover" alt="logo">
                        </a>
                    </div>
                    <h2 class="auth-heading text-center mb-5">MANAJEMEN PMI</h2>
                    <div class="auth-form-container text-start">
                        <form class="auth-form login-form" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="judul mb-4">
                                <h1>Login</h1>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <div class="email mb-3">
                                <label class="sr-only" for="email">Email</label>
                                <input id="email" name="email" type="email" class="form-control nama"
                                    placeholder="Email address" required="required">
                            </div><!--//form-group-->
                            <div class="password mb-3">
                                <label class="sr-only" for="password">Password</label>
                                <div class="input-group">
                                    <input id="password" name="password" type="password" class="form-control password"
                                        placeholder="Password" required="required">
                                    <span class="input-group-text">
                                        <input type="checkbox" id="show-password" onclick="togglePassword()">
                                    </span>
                                </div>
                                <div class="extra mt-3 row justify-content-between">
                                    <div class="col-6">
                                    </div><!--//col-6-->
                                    <div class="col-6">
                                        <div class="forgot-password text-end">
                                            <a href="reset-password.html">Forgot password?</a>
                                        </div>
                                    </div><!--//col-6-->
                                </div><!--//extra-->
                            </div><!--//form-group-->
                            <div class="text-center">
                                <button type="submit" class="btn w-100 theme-btn mx-auto"
                                    style="background-color: #b90707e3; color: #fff">Log In</button>
                            </div>
                        </form>

                        <div class="auth-option text-center pt-5">No Account? Sign up <a href="/register">REGISTER</a>.
                        </div>
                    </div><!--//auth-form-container-->
                </div><!--//app-auth-body-->
            </div><!--//flex-column-->
            <footer class="app-auth-footer mt-auto">
                {{-- <div class="container text-center py-3">
                    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                    <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"
                            style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com"
                            target="_blank">Xiaoying Riley</a> for developers</small>
                </div> --}}
            </footer><!--//app-auth-footer-->
        </div><!--//auth-main-col-->
        <div class="col-12 auth-background-col"
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
            <div
                style="background-image: url('{{ asset('images/background-1.jpg') }}'); background-size: cover; background-repeat: no-repeat; width: 100%; height: 100%; position: relative;">
                <div
                    style="background: rgba(128, 0, 0, 0.5); width: 100%; height: 100%; position: absolute; top: 0; left: 0;">
                </div>
            </div>
        </div><!--//auth-background-col-->
    </div><!--//row-->

    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
@endsection
