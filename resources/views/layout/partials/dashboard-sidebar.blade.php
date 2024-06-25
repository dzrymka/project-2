<div id="app-sidepanel" class="app-sidepanel sidepanel-hidden">
    <div id="sidepanel-drop" class="sidepanel-drop"></div>
    <div class="sidepanel-inner d-flex flex-column">
        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
        <div class="app-branding">
            <a href="/login" style="display: flex; align-items: center;">
                <img src="{{ asset('images/logologin.jpg') }}" alt="image"
                    style="width: 50px; height: 50px; border-radius: 50%;">
                <span
                    style="font-weight: bold; font-family: 'Arial', sans-serif; color: #8B0000; margin-left: 10px; font-size: 24px;">PMI</span>
            </a>
        </div><!--//app-branding-->
        <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
            <ul class="app-menu list-unstyled accordion" id="menu-accordion">

                {{-- <li class="nav-item my-2">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link" href="{{ route('dashboard.index') }}">
                        <span class="nav-icon">
                            <i class="fa-solid fa-droplet"></i>
                        </span>
                        <span class="nav-link-text">Dashboard</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item--> --}}

                @foreach ($menus as $menu)
                    @if (in_array(auth()?->user()?->role, $menu['access']))
                        <li class="nav-item my-2">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="{{ route($menu['url']) }}">
                                <span class="nav-icon">
                                    {!! $menu['icon'] !!}
                                </span>
                                <span class="nav-link-text">{{ $menu['name'] }}</span>
                            </a><!--//nav-link-->
                        </li><!--//nav-item-->
                    @endif
                @endforeach

                {{-- <li class="nav-item my-2">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link" href="{{ route('donor.index') }}">
                        <span class="nav-icon">
                            <i class="fa-solid fa-users"></i>
                        </span>
                        <span class="nav-link-text">Pendonor</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->

                <li class="nav-item my-2">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link" href="{{ route('donor.index') }}">
                        <span class="nav-icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="nav-link-text">Pegawai</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->

                <li class="nav-item my-2">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link" href="{{ route('relawan.index') }}">
                        <span class="nav-icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="nav-link-text">Relawan</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->

                <li class="nav-item my-2">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link" href="{{ route('relawan.index') }}">
                        <span class="nav-icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="nav-link-text">Inventaris</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->

                <li class="nav-item my-2">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link" href="{{ route('relawan.index') }}">
                        <span class="nav-icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="nav-link-text">Laporan</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->

                <li class="nav-item my-2">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link" href="{{ route('relawan.index') }}">
                        <span class="nav-icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="nav-link-text">Jadwal Kegiatan</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item--> --}}

            </ul><!--//app-menu-->
        </nav><!--//app-nav-->
    </div><!--//sidepanel-inner-->
</div><!--//app-sidepanel-->
