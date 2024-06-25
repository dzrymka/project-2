<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarDashboard extends Component
{
    /**
     * Create a new component instance.
     */
    protected $sidebarMenu;

    public function __construct()
    {
        $this->sidebarMenu = [
            [
                'name' => 'Absen Pegawai',
                'icon' => '<i class="fa-solid fa-camera-retro"></i>',
                'url' => 'absensi.generate-qrcode',
                'access' => ['pegawai'],
            ],
            [
                'name' => 'Scanner Absensi',
                'icon' => '<i class="fa-solid fa-file"></i>',
                'url' => 'absensi.scan',
                'access' => ['admin'],
            ],
            [
                'name' => 'Kelola Absensi',
                'icon' => '<i class="fa-solid fa-file"></i>',
                'url' => 'absensi.scan',
                'access' => ['admin'],
            ],
            [
                'name' => 'Darah',
                'icon' => '<i class="fa-solid fa-droplet"></i>',
                'url' => 'blood.index',
                'access' => ['admin', 'pegawai'],
            ],
            [
                'name' => 'Donor',
                'icon' => '<i class="fa-solid fa-users"></i>',
                'url' => 'donor.index',
                'access' => ['admin', 'pegawai'],
            ],
            [
                'name' => 'Kelola Pegawai',
                'icon' => '<i class="fa-solid fa-user"></i>',
                'url' => 'pegawai.index',
                'access' => ['admin'],
            ],
            [
                'name' => 'Kelola Relawan',
                'icon' => '<i class="fa-solid fa-user"></i>',
                'url' => 'relawan.index',
                'access' => ['admin'],
            ],
            [
                'name' => 'Kelola Inventaris',
                'icon' => '<i class="fa-solid fa-sitemap"></i>',
                'url' => 'inventaris.index',
                'access' => ['admin', 'pegawai'],
            ],
            [
                'name' => 'Kelola Laporan',
                'icon' => '<i class="fa-solid fa-book"></i>',
                'url' => 'laporan.index',
                'access' => ['admin'],
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layout.partials.dashboard-sidebar', [
            'menus' => $this->sidebarMenu
        ]);
    }
}
