@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Laporan Kegiatan</h1>
        <div class="section-title text-center mb-5">
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up"
            data-aos-delay="100">
            <div class="row g-3">
                <div class="col-lg-4 col-md-6 form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control border-danger" id="name"
                        placeholder="Nama Pegawai/ Nama Relawan" data-rule="minlen:4"
                        data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <label for="phone">Nomor Handphone</label>
                    <input type="text" class="form-control border-danger" name="phone" id="phone"
                        placeholder="Nomor Handphone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <label for="time">Waktu Kegiatan</label>
                    <input type="text" class="form-control border-danger" name="time" id="time"
                        placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <label for="people">Tanggal Kegiatan</label>
                    <input type="date" class="form-control border-danger" name="date" id="date"
                        placeholder="Tanggal Kegiatan" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                    <div class="validate"></div>
                </div>
            </div>
            <div class="form-group">
                <label for="foto_keg">Dokumentasi Kegiatan</label>
                <input type="file" id="foto_keg" name="foto_keg[]" multiple class="form-control-file">
            </div>
            <div class="form-group mt-4">
                <label for="message">Keterangan</label>
                <textarea class="form-control border-danger" name="message" rows="5" placeholder="Keterangan Kegiatan"></textarea>
                <div class="validate"></div>
            </div>
            <div class="mb-3">
                <div class="error-message"></div>
                <div class="sent-message">Terima Kasih Atas Laporan Anda. Laporan Anda Akan Admin Recap</div>
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Kirim Laporan</button>
            </div>
        </form>

    </div>

    <style>
        .section-title .title-label {
            display: inline-block;
            background: black;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .form-group input,
        .form-group textarea {
            border-radius: 0.25rem;
            border: 1px solid #ced4da;
        }

        .form-group input.border-danger,
        .form-group textarea.border-danger {
            border-color: red;
        }

        .php-email-form .validate {
            color: red;
            margin: 10px 0;
            display: none;
        }

        .php-email-form .error-message,
        .php-email-form .sent-message {
            display: none;
            font-size: 14px;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 3px;
        }

        .php-email-form .error-message {
            color: #fff;
            background: #ed3c0d;
            border: 1px solid #ed3c0d;
        }

        .php-email-form .sent-message {
            color: #fff;
            background: #18d26e;
            border: 1px solid #18d26e;
        }

        .php-email-form button[type=submit] {
            background: #5cb85c;
            border: 0;
            padding: 10px 24px;
            color: #fff;
            transition: 0.4s;
            border-radius: 4px;
        }

        .php-email-form button[type=submit]:hover {
            background: #4cae4c;
        }
    </style>
@endsection
