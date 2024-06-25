@extends('layouts.app')
@section('content')<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data pegawai
    </h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4 col-lg-6">
        <br>
        <div class="card-header py-3">

            <h3>Detail Data Pegawai</h3>

        </div>

        <div class="card-body" >
        <form action="{{ route('detail_laporan', ['id' => $laporan->id]) }}" method="POST">
            <div class="form-group">
                <input type="text" id="nama_kegiatan" name="nama_kegiatan" class="form-control" placeholder="Nama Kegiatan" value="{{ $laporan->nama_kegiatan }}" readonly>
            </div>
            <div class="form-group">
                <input type="date" id="tanggal_kegiatan" name="tanggal_kegiatan" class="form-control" placeholder="Tanggal Masuk Darah" value="{{ $laporan->tanggal_kegiatan }}" readonly>
            </div>
            <div class="form-group">
                <input type="text" id="tmpt_pelkegiatan" name="tmpt_pelkegiatan" class="form-control" placeholder="Tempat Pelaksanaan Kegiatan" value="{{ $laporan->tmpt_pelkegiatan }}" readonly>
            </div>
            <div class="form-group">
                <a href="{{ route('laporan') }}" class="btn btn-primary">Kembali</a>
            </div>
        </form>

        </div>
    </div>

</div>
@endsection
