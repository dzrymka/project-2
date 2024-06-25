@extends('layout._default.dashboard')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <br>
        <div class="card shadow mb-4">
            <div class="card-header py-3">

                <h3>Create Laporan</h3>

            </div>

            <div class="card-body">
                <form action="{{ route('laporan.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" id="nama_kegiatan" name="nama_kegiatan" class="form-control"
                            placeholder="Nama Kegiatan">
                    </div>
                    <div class="form-group">
                        <input type="date" id="tanggal_kegiatan" name="tanggal_kegiatan" class="form-control"
                            placeholder="Tanggal Masuk Darah">
                    </div>
                    <div class="form-group">
                        <input type="text" id="tmpt_pelkegiatan" name="tmpt_pelkegiatan" class="form-control"
                            placeholder="Tempat Pelaksanaan Kegiatan">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
