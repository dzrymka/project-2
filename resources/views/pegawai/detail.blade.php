@extends('layout._default.dashboard')
@section('content')
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Detail Relawan</h1>

        <div class="card shadow mb-4 col-lg-8">
            <br>

            <div class="card-body">
                <form>
                    <div class="form-group text-center">
                        @if ($relawan->foto_rel)
                            <img src="{{ $relawan->foto_rel ? asset($relawan->foto_rel) : asset('images/default-image.jpg') }}"
                                alt="Image of {{ $relawan->nama }}" class="img-fluid rounded" width="150">
                        @else
                            <img src="{{ asset('images/default.png') }}" alt="No Image" class="img-fluid rounded"
                                width="150">
                        @endif
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="nama">Nama Relawan</label>
                        <input type="text" id="nama" name="nama" class="form-control"
                            value="{{ $relawan->nama }}" readonly>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="umur">Umur Relawan</label>
                        <input type="number" id="umur" name="umur" class="form-control"
                            value="{{ $relawan->umur }}" readonly>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="alamat">Alamat Relawan</label>
                        <textarea id="alamat" name="alamat" class="form-control" readonly>{{ $relawan->alamat }}</textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email Relawan</label>
                        <input type="email" id="email" name="email" class="form-control"
                            value="{{ $relawan->email }}" readonly>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="no_telp">Nomor Handphone Relawan</label>
                        <input type="tel" id="no_telp" name="no_telp" class="form-control"
                            value="{{ $relawan->no_telp }}" readonly>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="awal_masuk">Awal Masuk</label>
                        <input type="date" id="awal_masuk" name="awal_masuk" class="form-control"
                            value="{{ $relawan->awal_masuk }}" readonly>
                    </div>
                    <br>
                    <div class="form-group">
                        <a href="{{ route('relawan.index') }}" class="btn btn-danger btn-sm">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
