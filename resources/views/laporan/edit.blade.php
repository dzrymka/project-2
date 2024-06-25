@extends('layout._default.dashboard')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Stok Darah
        </h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 col-lg-6">
            <br>
            <div class="card-header py-3">
                <h3>Edit Data Stok Darah</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('update_laporan', ['id' => $laporan->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <input type="text" id="nama_kegiatan" name="nama_kegiatan" class="form-control"
                            placeholder="Nama Kegiatan" value="{{ $laporan->nama_kegiatan }}">
                    </div>
                    <div class="form-group">
                        <input type="date" id="tanggal_kegiatan" name="tanggal_kegiatan" class="form-control"
                            placeholder="Tanggal Masuk Darah" value="{{ $laporan->tanggal_kegiatan }}">
                    </div>
                    <div class="form-group">
                        <input type="text" id="tmpt_pelkegiatan" name="tmpt_pelkegiatan" class="form-control"
                            placeholder="Tempat Pelaksanaan Kegiatan" value="{{ $laporan->tmpt_pelkegiatan }}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
