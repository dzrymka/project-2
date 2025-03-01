<div class="app-header-inner">
    <div class="container-fluid py-2">
        <div class="app-header-content">
            <div class="row justify-content-between align-items-center">

                <div class="col-auto">
                    <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                            role="img">
                            <title>Menu</title>
                            <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"
                                d="M4 7h22M4 15h22M4 23h22"></path>
                        </svg>
                    </a>
                </div><!--//col-->
                <div class="search-mobile-trigger d-sm-none col">
                    <i class="search-mobile-trigger-icon fa-solid fa-magnifying-glass"></i>
                </div><!--//col-->
                <div class="app-search-box col">
                    <span>
                        <?php
                        date_default_timezone_set('Asia/Jakarta'); // Set the timezone to Asia/Jakarta (WIB)
                        $date = date('Y-m-d H:i:s'); // Get current date and time
                        $hari = date_format(date_create($date), 'l');
                        $jam = date_format(date_create($date), 'H:i');
                        echo "$hari, jam $jam WIB";
                        ?>
                    </span>
                </div><!--//app-search-box-->

                <div class="app-utilities col-auto">
                    <div class="app-utility-item app-user-dropdown dropdown">
                        <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#"
                            role="button" aria-expanded="false">
                            <span>
                                <img src="{{ asset('portal-b5/assets/images/user.png') }}" alt="user profile">
                                {{ auth()->user()->nama }}
                                {{ auth()->user()->role }}
                            </span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                            <li><a class="dropdown-item" href="{{ route('profile') }}">Account</a></li>
                            <li><a class="dropdown-item" href="settings.html">Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="d-flex justify-content-center">
                                <button type="button" class="btn btn-danger" onclick="handleLogout()">
                                    <i class="typcn typcn-cog text-primary"></i>
                                    Logout
                                </button>
                            </li>

                            <script>
                                function handleLogout() {
                                    Swal.fire({
                                        title: "Konfirmasi Logout",
                                        text: "Apakah Anda yakin ingin logout?",
                                        icon: "warning",
                                        showCancelButton: true,
                                        confirmButtonColor: "#3085d6",
                                        cancelButtonColor: "#d33",
                                        confirmButtonText: "Ya, Logout",
                                        cancelButtonText: "Tidak"
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            $.ajax({
                                                url: `{{ config('app.url') }}/logout`,
                                                method: 'POST',
                                                data: {
                                                    _token: `{{ csrf_token() }}`,
                                                },
                                                success: (response) => {
                                                    Swal.fire({
                                                        title: response.title,
                                                        icon: response.icon,
                                                        text: response.text
                                                    }).then((result1) => {
                                                        if (result1.isConfirmed) {
                                                            window.location.href = `{{ config('app.url') }}/login`;
                                                        }
                                                    });
                                                },
                                                error: (error) => console.error(error)
                                            });
                                        }
                                    });
                                }
                            </script>

                        </ul>
                    </div><!--//app-user-dropdown-->
                </div><!--//app-utilities-->
            </div><!--//row-->
        </div><!--//app-header-content-->
    </div><!--//container-fluid-->
</div><!--//app-header-inner-->
