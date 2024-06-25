<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SISTEM PMI</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('theme/') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('theme/') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('theme/') }}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ asset('theme/') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('theme/') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('theme/') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('theme/') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('theme/') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('theme/') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('theme/') }}/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Restaurantly
  * Updated: Mar 13 2024 with Bootstrap v5.3.3
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-phone d-flex align-items-center"><span>+62 85721069156</span></i>
                <i class="bi bi-clock d-flex align-items-center ms-4"><span>
                        <?php
                        date_default_timezone_set('Asia/Jakarta'); // Set the timezone to Asia/Jakarta (WIB)
                        $date = date('Y-m-d H:i:s'); // Get current date and time
                        $hari = date_format(date_create($date), 'l');
                        $jam = date_format(date_create($date), 'H:i');
                        echo "$hari, jam $jam WIB";
                        ?>

                    </span></i>
            </div>
            <div class="languages d-none d-md-flex align-items-center">
            </div>
        </div>
    </div>


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0" style="text-align: center;">
                <a href="#" style="color: rgb(104, 11, 11);">PMI SUBANG</a>
            </h1>

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Dashboard</a></li>
                    <li><a class="nav-link scrollto" href="#why-us">Seputar PMI</a></li>
                    <li><a class="nav-link scrollto" href="#menu"></a></li>
                    <li><a class="nav-link scrollto" href="#specials">Laporan Kegiatan</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Dokumentasi PMI</a></li>
                    <li><a class="nav-link scrollto" href="#events"></a></li>
                    <li><a class="nav-link scrollto" href="#ketuapmi">Pemimpin PMI</a></li>
                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contact Person</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a href="/login" class="book-a-table-btn scrollto d-none d-lg-flex">Login</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Welcome to <span>PMI SUBANG</span></h1>
                    <h2>Setetes Darah Yang di berikan Menyelamatkan Kehidupan Seseorang</h2>

                    <div class="btns">
                        <a href="#menu" class="btn-menu animated fadeInUp scrollto">Menu</a>
                        <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Buku PMI</a>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative"
                    data-aos="zoom-in" data-aos-delay="200">
                    <a href="https://youtu.be/1r85NMC7XBw?si=puRx5dSjFmiDHUyv" class="glightbox play-btn"></a>
                </div>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Dashboard Darah ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="about-img">
                            <img src="{{ asset('theme') }}/assets/img/about.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>PALANG MERAH INDONESIA SUBANG</h3>
                        <p class="fst-italic">

                            <body>
                                <style>
                                    body {
                                        font-family: "Carter One", sans-serif;
                                        font-size: 20px;
                                    }

                                    .konten {
                                        position: absolute;
                                        top: 75px;
                                        width: 80%;
                                        text-align: justify;
                                    }

                                    .konten p {
                                        color: white;
                                    }
                                </style>
                                </head>

                                <body>
                                    <div class="konten">
                                        <p>PMI selalu mempunyai tujuh prinsip dasar Gerakan Internasional Palang Merah
                                            dan Bulan Sabit Merah yaitu kemanusiaan, kesamaan, kesukarelaan,
                                            kemandirian, kesatuan, kenetralan, dan kesemestaan. Sampai saat ini PMI
                                            telah berada di 33 PMI Daerah (tingkat provinsi) dan sekitar 408 PMI Cabang
                                            (tingkat kota/kabupaten) di seluruh Indonesia.</p>
                                    </div>
                                </body>
                            </body>
                        </p>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        {{-- <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>MENU STOK DARAH</h2>
                    <p>DATA STOK DARAH</p>
                </div>

                <div class="row">

                    <div class="box-container">
                        <div class="box">
                            <span>01</span>
                            <h4>Golongan Darah A</h4>
                            <p>Tersedia 40 kantong</p>
                            <p>Expire Tanggal 20 Oktober 2024</p>
                        </div>
                        <div class="box">
                            <span>02</span>
                            <h4>Golongan Darah B</h4>
                            <p>Tersedia 20 kantong</p>
                            <p>Expire Tanggal 15 September 2024</p>
                        </div>
                        <div class="box">
                            <span>03</span>
                            <h4>Golongan Darah AB</h4>
                            <p>Tersedia 10 kantong</p>
                            <p>Expire Tanggal 13 Desember 2024</p>
                        </div>
                        <div class="box">
                            <span>04</span>
                            <h4>Golongan Darah O</h4>
                            <p>Tersedia 30 kantong</p>
                            <p>Expire Tanggal 25 Juli 2024</p>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- End Why Us Section -->
        <section id="menu" class="menu section-bg">
            <div class="container" data-aos="fade-up">
                <div class="container">

                    <h1>Manajemen Pegawai</h1>
                    <div class="box-container"> --}}
        {{-- <div class="box">
                            <a href="{{ route('pegawai.tambah') }}" class="btn btn-danger text-white">Tambah
                                Pegawai</a>
                            <a href="{{ route('pegawai.tambah') }}" class="btn btn-danger text-white">Edit
                                Pegawai</a>
                        </div> --}}
        {{-- </div>
                    <table class="table table-striped table-bordered">
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">Umur</th>
                                        <th scope="col">Tempat Tanggal Lahir</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">NO Handphone</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Debby Permata R</td>
                                        <td>320231241242</td>
                                        <td>21</td>
                                        <td>Subang,23 Oktober 2001</td>
                                        <td>Debbypr@gmail.com</td>
                                        <td>08681724757</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Dzikry Maulady K</td>
                                        <td>32761887517</td>
                                        <td>20</td>
                                        <td>Sukabumi,18 Januari 2003</td>
                                        <td>Dzikrymk@gmail.com</td>
                                        <td>08247126527</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Krisna Arsya R</td>
                                        <td>32868216877</td>
                                        <td>30</td>
                                        <td>Ujung Genteng,29 Februari 2000</td>
                                        <td>Krisnaar@gmail.com</td>
                                        <td>08763256235</td>

                                    </tr>
                                </tbody>
                            </table>
                            <tbody> --}}

        {{-- @foreach ($pegawai as $pegawai)
                                <tr>

                                    <td>{{ $pegawai->nama }}</td>

                                    <td>{{ $pegawai->nik }}</td>

                                    <td>

                                        <a href="{{ route('pegawai.edit', $pegawai->id) }}"
                                            class="btn btn-sm btn-info">Edit</a>

                                        <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="post"
                                            style="display: inline-block;">

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>

                                        </form>

                                    </td>

                                </tr>
                            @endforeach --}}

        {{-- </tbody>

                    </table>

                </div>
        </section>

        <section id="menu" class="menu section-bg">
            <div class="container" data-aos="fade-up">
                <div class="container">
                    <h1>Manajemen Relawan</h1> --}}
        {{-- <div class="box-container">
                        <div class="box">
                            <a href="{{ route('pegawai.tambah') }}" class="btn btn-danger text-white">Tambah
                                Relawan</a>
                            <a href="{{ route('pegawai.tambah') }}" class="btn btn-danger text-white">Edit
                                Relawan</a>
                        </div> --}}
        {{-- </div>
                <table class="table table-striped table-bordered">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Umur</th>
                                    <th scope="col">Tempat Tanggal Lahir</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">NO Handphone</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Debby Permata R</td>
                                    <td>320231241242</td>
                                    <td>21</td>
                                    <td>Subang,23 Oktober 2001</td>
                                    <td>Debbypr@gmail.com</td>
                                    <td>08681724757</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Dzikry Maulady K</td>
                                    <td>32761887517</td>
                                    <td>20</td>
                                    <td>Sukabumi,18 Januari 2003</td>
                                    <td>Dzikrymk@gmail.com</td>
                                    <td>08247126527</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Krisna Arsya R</td>
                                    <td>32868216877</td>
                                    <td>30</td>
                                    <td>Ujung Genteng,29 Februari 2000</td>
                                    <td>Krisnaar@gmail.com</td>
                                    <td>08763256235</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </table>
            </div>
            </div>
        </section> --}}

        {{-- @foreach ($pegawai as $pegawai)
                                <tr>

                                    <td>{{ $pegawai->nama }}</td>

                                    <td>{{ $pegawai->nik }}</td>

                                    <td>

                                        <a href="{{ route('pegawai.edit', $pegawai->id) }}"
                                            class="btn btn-sm btn-info">Edit</a>

                                        <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="post"
                                            style="display: inline-block;">

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>

                                        </form>

                                    </td>

                                </tr>
                            @endforeach --}}

        {{-- </tbody>

        </table>

        </div>
        </section> --}}



        {{-- <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Menu Stok Darah</h2>
                    <p>Daftar Stok Darah yang Tersedia</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="menu-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-starters">Starters</li>
                            <li data-filter=".filter-salads">Salads</li>
                            <li data-filter=".filter-specialty">Specialty</li>
                        </ul>
                    </div>
                </div>

                <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="{{ asset('theme') }}/assets/img/menu/lobster-bisque.jpg" class="menu-img"
                            alt="">
                        <div class="menu-content">
                            <a href="#">Lobster Bisque</a><span>$5.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="{{ asset('theme') }}/assets/img/menu/bread-barrel.jpg" class="menu-img"
                            alt="">
                        <div class="menu-content">
                            <a href="#">Bread Barrel</a><span>$6.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="{{ asset('theme') }}/assets/img/menu/cake.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Crab Cake</a><span>$7.95</span>
                        </div>
                        <div class="menu-ingredients">
                            A delicate crab cake served on a toasted roll with lettuce and tartar sauce
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="{{ asset('theme') }}/assets/img/menu/caesar.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Caesar Selections</a><span>$8.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="{{ asset('theme') }}/assets/img/menu/tuscan-grilled.jpg" class="menu-img"
                            alt="">
                        <div class="menu-content">
                            <a href="#">Tuscan Grilled</a><span>$9.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Grilled chicken with provolone, artichoke hearts, and roasted red pesto
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="{{ asset('theme') }}/assets/img/menu/mozzarella.jpg" class="menu-img"
                            alt="">
                        <div class="menu-content">
                            <a href="#">Mozzarella Stick</a><span>$4.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Lorem, deren, trataro, filede, nerada
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="{{ asset('theme') }}/assets/img/menu/greek-salad.jpg" class="menu-img"
                            alt="">
                        <div class="menu-content">
                            <a href="#">Greek Salad</a><span>$9.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Fresh spinach, crisp romaine, tomatoes, and Greek olives
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="{{ asset('theme') }}/assets/img/menu/spinach-salad.jpg" class="menu-img"
                            alt="">
                        <div class="menu-content">
                            <a href="#">Spinach Salad</a><span>$9.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="{{ asset('theme') }}/assets/img/menu/lobster-roll.jpg" class="menu-img"
                            alt="">
                        <div class="menu-content">
                            <a href="#">Lobster Roll</a><span>$12.95</span>
                        </div>
                        <div class="menu-ingredients">
                            Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Menu Section --> --}}

        <!-- ======= Specials Section ======= -->
        <section id="specials" class="specials">

            <div class="container" data-aos="fade-up">

                {{-- <div class="section-title">
                    <h2>Inventaris PMI</h2>
                    <p>Barang Barang Yang tersedia</p>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Kantong Darah</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Tandu Darurat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Kotak PPPK</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Obat-obatan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Perban Luka</a>
                            </li>
                        </ul>
                    </div> --}}
                {{-- <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Kantung Darah</h3>
                                    <p class="fst-italic">berfungsi untuk menyimpan darah dengan komponen yang
                                        berbeda-beda. Berdasarkan sistem penggunaannya, blood bag atau kantong darah
                                        dibedakan menurut empat jenis, yaitu single blood bag, double blood bag,
                                        triple blood bag, dan quadruple blood bag</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('theme') }}/assets/img/specials-1.png" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Tandu Darurat</h3>
                                    <p class="fst-italic">merupakan alat yang digunakan untuk mengevakuasi
                                        seseorang yang mengalami kecelakaan atau korban bencana terluka ketempat
                                        yang layak untuk. Tandu merupakan alat yang digunakan untuk mengevakuasi
                                        seseorang yang mengalami kecelakaan atau korban bencana terluka ketempat
                                        yang layak untuk mendapat perawatan</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('theme') }}/assets/img/specials-2.png" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Kotak PPPK</h3>
                                    <p class="fst-italic">merupakan benda yang paling diperlukan untuk
                                        mengantisipasi kecelakaan ringan atau berat</p>
                                    <p class="fst-italic">sebagai penanganan awal terhadap cedera atau kejadian
                                        sakit yang terjadi di sekolah/madrasah sebelum dilakukan pemeriksaan lebih
                                        lanjut di fasilitas kesehatan apabila masalah cedera/sakit belum
                                        terselesaikan. Kegiatan ini bertujuan untuk mencegah perburukan
                                        penyakit/cedera.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('theme') }}/assets/img/specials-3.png" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Obat-obatan
                                    </h3>
                                    <p class="fst-italic">Obat adalah bahan atau panduan bahan-bahan yang siap
                                        digunakan untuk mempengaruhi atau menyelidiki sistem fisiologi atau keadaan
                                        patologi dalam rangka penetapan diagnosis, pencegahan, penyembuhan,
                                        pemulihan, peningkatan kesehatan dan kontrasepsi (Undang-Undang Kesehatan
                                        No. 23 tahun 1992)</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('theme') }}/assets/img/specials-4.png" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-5">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Perban Luka</h3>
                                    <p class="fst-italic"> merupakan perlengkapan medis yang digunakan untuk
                                        merawat dan membalut luka terbuka. Selain untuk menutup luka, perban juga
                                        berfungsi untuk melindungi area luka dari kontaminasi kotoran atau kuman
                                        patogen yang bisa menyebabkan infeksi.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('theme') }}/assets/img/specials-5.png" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
                {{-- <div class="box">
                    <a href="{{ route('pegawai.tambah') }}" class="btn btn-danger text-white">Tambah
                        Barang</a>
                    <a href="{{ route('pegawai.tambah') }}" class="btn btn-danger text-white">Edit
                        Barang</a>
                </div> --}}
            </div>
        </section><!-- End Specials Section -->

        <!-- ======= Jadwal Kegiatan ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Jadwal Kegiatan</h2>
                    <p>Informasi Jadwal Kegiatan</p>
                </div>

                <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="{{ asset('theme') }}/assets/img/event-birthday.jpg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Membantu masyarakat</h3>
                                    <div class="price">
                                        <p><span>PMI markas</span></p>
                                    </div>
                                    <p class="fst-italic">
                                        Ketika ada terjadi musibah alam atau ataupun diluar sana PMI bidang
                                        Markas akan
                                        turut ikut serta dalam membantu Pemadam kebakaran dalam menangani
                                        Masalah
                                    </p>
                                    {{-- <ul>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.
                                        </li>
                                        <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit
                                            in voluptate velit.
                                        </li>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.
                                        </li>
                                    </ul>
                                    <p>
                                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                        in reprehenderit in
                                        voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur
                                    </p> --}}
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="{{ asset('theme') }}/assets/img/event-private.jpg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Mengadakan Donor darah diluar</h3>
                                    <div class="price">
                                        <p><span>PMI UTD</span></p>
                                    </div>
                                    <p class="fst-italic">
                                        Biasanya PMI juga akan mengadakan Donor darah diluar gedung PMI atau
                                        acara donor
                                        darah Outdoor
                                    </p>
                                    {{-- <ul>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.
                                        </li>
                                        <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit
                                            in voluptate velit.
                                        </li>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.
                                        </li>
                                    </ul>
                                    <p>
                                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                        in reprehenderit in
                                        voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur
                                    </p> --}}
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        {{-- <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="{{ asset('theme') }}/assets/img/event-custom.jpg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Custom Parties</h3>
                                    <div class="price">
                                        <p><span>$99</span></p>
                                    </div>
                                    <p class="fst-italic">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore
                                        et dolore
                                        magna aliqua.
                                    </p>
                                    <ul>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.
                                        </li>
                                        <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit
                                            in voluptate velit.
                                        </li>
                                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat.
                                        </li>
                                    </ul>
                                    <p>
                                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                        in reprehenderit in
                                        voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item --> --}}

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Events Section -->

        <!-- ======= Book A Table Section ======= -->
        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Laporan</h2>
                    <p>Laporan Kegiatan</p>
                </div>

                <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Your Name" data-rule="minlen:4"
                                data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                            <input type="text" class="form-control" name="phone" id="phone"
                                placeholder="Your Phone" data-rule="minlen:4"
                                data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <input type="text" name="date" class="form-control" id="date"
                                placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <input type="text" class="form-control" name="time" id="time"
                                placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3">
                            <input type="number" class="form-control" name="people" id="people"
                                placeholder="# of people" data-rule="minlen:1"
                                data-msg="Please enter at least 1 chars">
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your booking request was sent. We will call back or send an
                            Email to
                            confirm your
                            reservation. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Kirim Laporan</button></div>
                </form>

            </div>
        </section><!-- End Book A Table Section -->

        <!-- ======= Testimonials Section ======= -->
        {{-- <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>What they're saying about us</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                    suscipit
                                    rhoncus. Accusantium
                                    quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at
                                    semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('theme') }}/assets/img/testimonials/testimonials-1.jpg"
                                    class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem
                                    cillum quid
                                    cillum eram malis
                                    quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim
                                    culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('theme') }}/assets/img/testimonials/testimonials-2.jpg"
                                    class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                    quem
                                    veniam duis minim
                                    tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('theme') }}/assets/img/testimonials/testimonials-3.jpg"
                                    class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export
                                    minim
                                    fugiat minim velit
                                    minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                    labore
                                    illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('theme') }}/assets/img/testimonials/testimonials-4.jpg"
                                    class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                    noster
                                    veniam enim culpa
                                    labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa
                                    fore nisi
                                    cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('theme') }}/assets/img/testimonials/testimonials-5.jpg"
                                    class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section --> --}}

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">

            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Dokumentasi</h2>
                    <p>Beberapa Dokumentasi dari hasil Kegiatan</p>
                </div>
            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-0">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('theme') }}/assets/img/gallery/gallery-1.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="{{ asset('theme') }}/assets/img/gallery/gallery-1.jpg" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('theme') }}/assets/img/gallery/gallery-2.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="{{ asset('theme') }}/assets/img/gallery/gallery-2.jpg" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('theme') }}/assets/img/gallery/gallery-3.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="{{ asset('theme') }}/assets/img/gallery/gallery-3.jpg" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('theme') }}/assets/img/gallery/gallery-4.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="{{ asset('theme') }}/assets/img/gallery/gallery-4.jpg" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('theme') }}/assets/img/gallery/gallery-5.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="{{ asset('theme') }}/assets/img/gallery/gallery-5.jpg" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('theme') }}/assets/img/gallery/gallery-6.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="{{ asset('theme') }}/assets/img/gallery/gallery-6.jpg" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('theme') }}/assets/img/gallery/gallery-7.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="{{ asset('theme') }}/assets/img/gallery/gallery-7.jpg" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('theme') }}/assets/img/gallery/gallery-8.jpg" class="gallery-lightbox"
                                data-gall="gallery-item">
                                <img src="{{ asset('theme') }}/assets/img/gallery/gallery-8.jpg" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Chefs Section ======= -->
        <section id="ketuapmi" class="ketuapmi">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Pemimpin PMI</h2>
                    <p>Orang-orang PMI</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <img src="{{ asset('theme') }}/assets/img/ketuapmi/ketuapmi-1.jpg" class="img-fluid"
                                alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>H. Adang Rochjana</h4>
                                    <span>Ketua PMI Subang</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <img src="{{ asset('theme') }}/assets/img/ketuapmi/ketuapmi-2.jpg" class="img-fluid"
                                alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Dr. H. Komir Bastaman, Drs, SH, M.Si</h4>
                                    <span>Dewan Penasehat PMI Subang</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="300">
                            <img src="{{ asset('theme') }}/assets/img/ketuapmi/ketuapmi-3.jpg" class="img-fluid"
                                alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Krisna Asya</h4>
                                    <span>Wakil PMI</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End ketuapmi Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <<div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Maps PMI</h2>
                    <p>Lokasi</p>
                </div>
                </div>

                <div data-aos="fade-up">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7359848043207!2d107.75994021125192!3d-6.554977164053568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e693c801423c36f%3A0x7f5ce7599f0c041c!2sMarkas%20PMI%20Kabupaten%20Subang!5e0!3m2!1sid!2sid!4v1716721588705!5m2!1sid!2sid"
                        width="2100" height="650" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <br>
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Contact Person</h2>
                        <p>Contact</p>
                    </div>
                </div>

                <div class="container" data-aos="fade-up">

                    <div class="row mt-5">

                        <div class="col-lg-4">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Lokasi:</h4>
                                    <p>Jl. Aipda KS Tubun No.6, Cigadung, Kec. Subang, Kabupaten Subang, Jawa Barat
                                        41211
                                    </p>
                                </div>

                                <div class="open-hours">
                                    <i class="bi bi-clock"></i>
                                    <h4>Jam Buka:</h4>
                                    <p>
                                        Senin-Minggu:<br>
                                        08:00 Pagi - 16:00 Sore
                                    </p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>PMISubang@gmail.com</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+62 8132452515</p>
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-8 mt-5 mt-lg-0">

                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>

                        </div>

                    </div>

                </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>PMI SUBANG</h3>
                            <p>
                                Jl. Aipda KS Tubun No.6, Cigadung, Kec. Subang, Kabupaten Subang, Jawa Barat
                                41211<br><br>
                                <strong>Phone:</strong> 0260411423<br>
                                <strong>Email:</strong> pmikabsubang@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fpmisubang"
                                    class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="https://www.facebook.com/pmisubang/" class="facebook"><i
                                        class="bx bxl-facebook"></i></a>
                                <a href="https://www.instagram.com/pmisubang/" class="instagram"><i
                                        class="bx bxl-instagram"></i></a>
                                <a href="https://www.pmi.or.id/" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Restaurantly</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('theme/') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('theme/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('theme/') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('theme/') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('theme/') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('theme/') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('theme/') }}/assets/js/main.js"></script>

</body>

</html>
