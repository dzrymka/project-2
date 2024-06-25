@extends('layout._default.auth')

@section('content')
    <div class="row g-0 app-auth-wrapper" style="min-height: 100vh; position: relative;">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5"
            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 2; background: rgba(255, 255, 255, 0.9); border-radius: 100px; height: 70vh; display: flex; flex-direction: column; justify-content: center;">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto" style="width: 100%; max-width: 400px;">
                    <div class="app-auth-branding mb-4">
                        <a class="app-logo" href="/login">
                            <img class="logo-icon me-2" src="{{ asset('images/logologin.jpg') }}"
                                style="background-size: cover" alt="logo">
                        </a>
                    </div>
                    <h2 class="auth-heading text-center mb-5">Registrasi PMI</h2>
                    <div class="auth-form-container text-start">
                        <form class="auth-form login-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="name mb-3">
                                <label class="sr-only" for="nama">Nama</label>
                                <input id="nama" name="nama" type="text" class="form-control nama"
                                    placeholder="Nama" required="required">
                            </div><!--//form-group-->
                            <div class="email mb-3">
                                <label class="sr-only" for="email">Email</label>
                                <input id="email" name="email" type="email" class="form-control email"
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
                            </div><!--//form-group-->
                            <div class="role mb-3">
                                <label class="sr-only" for="role">Role</label>
                                <select id="role" name="role" class="form-control" required="required">
                                    <option value="" disabled selected>Pilih Role Anda</option>
                                    <option value="admin">Admin</option>
                                    <option value="pegawai">Pegawai</option>
                                    <option value="relawan">Relawan</option>
                                    <option value="keuangan">Keuangan</option>
                                </select>
                            </div><!--//form-group-->
                            <div class="extra mt-3 row justify-content-between">
                                <div class="col-6">
                                </div><!--//col-6-->
                                <div class="col-6">
                                    <div class="forgot-password text-end">
                                        <a href="reset-password.html">Forgot password?</a>
                                    </div>
                                </div><!--//col-6-->
                            </div><!--//extra-->
                            <div class="text-center">
                                <button type="submit" class="btn w-100 theme-btn mx-auto"
                                    style="background-color: #b90707e3; color: #fff">Register</button>
                            </div>
                        </form>

                        <div class="auth-option text-center pt-5">Have an account? <a href="/login">Log In</a>.
                        </div>
                    </div><!--//auth-form-container-->
                </div><!--//app-auth-body-->
                {{-- <footer class="app-auth-footer mt-auto">
                    <div class="container text-center py-3">
                        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"
                                style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com"
                                target="_blank">Xiaoying Riley</a> for developers</small>
                    </div>
                </footer><!--//app-auth-footer--> --}}
            </div><!--//flex-column-->
        </div><!--//auth-main-col-->
        <div
            style="background-image: url('{{ asset('images/background-1.jpg') }}'); background-size: cover; background-repeat: no-repeat; width: 100%; height: 100%; position: relative;">
            <div style="background: rgba(128, 0, 0, 0.5); width: 100%; height: 100%; position: absolute; top: 0; left: 0;">
            </div>
        </div>
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
