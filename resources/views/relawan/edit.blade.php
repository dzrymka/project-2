@extends('layout._default.dashboard')
@section('content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data relawan
            </h1>

            <!-- DataTales Example -->
            <div class="card shadow mb-4 col-lg-8">
                <br>
                <div class="card-header py-3">

                    <h3>Edit Data Relawan</h3>

                </div>

                <div class="card-body">
                    <form action="{{ route('relawan.update', ['relawan' => $relawan->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <!-- Form fields for relawan data -->
                        <div class="form-group">
                            <input type="text" id="nama" name="nama" class="form-control"
                                placeholder="Nama Relawan" value="{{ $relawan->nama }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="number" id="umur" name="umur" class="form-control"
                                placeholder="Umur Relawan" value="{{ $relawan->umur }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea id="alamat" name="alamat" class="form-control" placeholder="Alamat Relawan">{{ $relawan->alamat }}</textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Email Relawan" value="{{ $relawan->email }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="tel" id="no_telp" name="no_telp" class="form-control"
                                placeholder="Nomor Handphone Relawan" value="{{ $relawan->no_telp }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="date" id="awal_masuk" name="awal_masuk" class="form-control"
                                placeholder="Awal Masuk" value="{{ $relawan->awal_masuk }}">
                        </div>
                        <div class="form-group mt-4">
                            <input type="file" id="foto_rel" name="foto_rel" class="form-control"
                                value="{{ $relawan->foto_rel }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="status">Status Relawan</label>
                            <select id="status" name="status" class="form-control">
                                <option value="aktif">Aktif</option>
                                <option value="tidak aktif">Tidak Aktif</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
