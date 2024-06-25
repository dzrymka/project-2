@if (session()->has('text'))
    <script>
        Swal.fire({
            title: `{{ session()->get('title') }}`,
            icon: `{{ session()->get('icon') }}`,
            text: `{{ session()->get('text') }}`
        });
    </script>
@endif

@yield('script')

<!-- Javascript -->
<script src="{{ asset('portal-b5') }}/assets/plugins/popper.min.js"></script>
<script src="{{ asset('portal-b5') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Page Specific JS -->
<script src="{{ asset('portal-b5') }}/assets/js/app.js"></script>
