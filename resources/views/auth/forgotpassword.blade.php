<x-auth-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <!-- partial:index.partial.html -->

    <body>
        <section class="container"
            style="position: relative; width: 100%; height: 100vh; background-image: url('{{ asset('theme/assets/img/about.jpg') }}'); background-size: cover; background-position: center;">
            <div class="login-container"
                style="background: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px; max-width: 400px; margin: auto; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                <div class="form-container" style="text-align: center;">
                    <div class="background-image" style="margin-bottom: 20px;">
                        <img src="{{ asset('assets/image/logologin.png') }}" alt="Logo PMI"
                            style="width: 200px; height: auto;">
                    </div>
                    <h1 class="opacity">{{ $title }}</h1>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <input type="text" name="email" placeholder="EMAIL" />
                        <input type="password" name="password" placeholder="NEW PASSWORD" />
                        <input type="password" name="password" placeholder="COMFIRM PASSWORD" />
                        <button class="opacity" type="submit">CONFIRM</button>
                    </form>
                    <div class="register-forget opacity">
                        <a href="/login">LOGIN</a>
                    </div>
                </div>
                <div class="circle circle-two"></div>
            </div>
            <div class="theme-btn-container"></div>
        </section>
    </body>
    <!-- partial -->
    <script src="./script.js"></script>
</x-auth-layout>
