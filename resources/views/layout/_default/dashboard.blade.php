<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.partials.dashboard-meta')
</head>

<body class="app">
    <header class="app-header fixed-top">

        @include('layout.partials.dashboard-navbar')

        <x-sidebar-dashboard />
    </header><!--//app-header-->

    <div class="app-wrapper">

        @yield('content')

        {{-- @include('layout.partials.dashboard-footer') --}}

    </div><!--//app-wrapper-->

    @include('layout.partials.dashboard-script')
</body>

</html>
