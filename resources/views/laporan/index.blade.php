@extends('layout._default.dashboard')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Data Laporan</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <a href="{{ route('laporan.create') }}" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-plus"></i> Tambah Data
                </a>
                <div class="nav-search ml-auto">
                    {{-- <form action="{{ route('datapegawai') }}" method="GET"> --}}
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Cari Data ..."
                            aria-label="search" aria-describedby="search" value="{{ request('search') }}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" id="search">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Nomor Handphone</th>
                                <th>Waktu Kegiatan</th>
                                <th>Tanggal Kegiatan</th>
                                <th>Keterangan</th>
                                <th>Dokumentasi Kegiatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($laporan as $row)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $row->nama_keg }}</td>
                                    <td>{{ $row->no_handphone }}</td>
                                    <td>{{ $row->tanggal_keg }}</td>
                                    <td>{{ $row->keterangan }}</td>
                                    <td>
                                        @if ($row->foto_peg)
                                            <img src="{{ asset('images/' . $row->foto_peg) }}" alt="Foto Pegawai"
                                                width="50">
                                        @else
                                            <img src="{{ asset('images/default.png') }}" alt="No Image" width="50">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('laporan.show', ['id' => $row->id]) }}"
                                            class="btn btn-success btn-sm"><i class="fa-solid fa-eye"></i> Detail</a>
                                        <a href="{{ route('laporan.edit', $row->id) }}" class="btn btn-warning btn-sm"><i
                                                class="fa-solid fa-pen-to-square"></i> Edit Data</a>
                                        <a onclick="handleHapusPegawai({{ $row->id }})"
                                            class="btn btn-danger btn-sm"><i class="fas fa-trash" id="delete"></i> Hapus
                                            Data</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function handleHapusPegawai(id) {
            Swal.fire({
                title: "Hapus Data Pegawai!",
                text: "Apakah Anda yakin ingin menghapus data pegawai?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#30085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Hapus!",
                cancelButtonText: "Tidak"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `{{ config('app.url') }}/hapus_pegawai/${id}`
                }
            });
        }
    </script>
@endsection
