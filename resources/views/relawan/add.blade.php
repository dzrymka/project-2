@extends('layout._default.dashboard')
@section('content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data Relawan</h1>

            <!-- DataTales Example -->
            <div class="card shadow mb-4 col-lg-8">
                <br>
                <div class="card-header py-3">
                    <h3>Create Data Relawan</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('relawan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" id="nama" name="nama" class="form-control"
                                placeholder="Nama Relawan">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="number" id="umur" name="umur" class="form-control"
                                placeholder="Umur Relawan">
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea id="alamat" name="alamat" class="form-control" placeholder="Alamat Relawan"></textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Email Relawan">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="tel" id="no_telp" name="no_telp" class="form-control"
                                placeholder="Nomor Handphone Relawan">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="date" id="awal_masuk" name="awal_masuk" class="form-control"
                                placeholder="Awal Masuk">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="foto_rel">Foto Relawan</label>
                            <input type="file" id="foto_rel" name="foto_rel" class="form-control-file">
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
