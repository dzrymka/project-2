@extends('layout._default.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="flex-container">
            <h1 class="text-center mb-3">Selamat Datang Sistem Palang Merah Indonesia Kabupaten Subang</h1>
        </div>
    </div>

    <style>
        .flex-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: fit-content;
            /* Adjust width as needed */
            margin: 0 auto;
            /* Center the container horizontally */
            border-radius: 10px;
            /* Adjust border-radius for desired roundness */
        }

        .text-center {
            background-color: white;
            padding: 10px;
            /* Add padding to create space around the text */
            font-weight: bold;
            /* Make the text bold for emphasis */
        }
    </style>

    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <a href="{{ route('create_pegawai') }}" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-plus"></i> Tambah Data
                </a>
                <div class="nav-search ml-auto">
                    <form action="{{ route('datapegawai') }}" method="GET">
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
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>NO Telp</th>
                                <th>Awal Masuk</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($pegawai as $row)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>
                                        @if ($row->foto_peg)
                                            <img src="{{ asset('images/' . $row->foto_peg) }}" alt="Foto Pegawai"
                                                width="50">
                                        @else
                                            <img src="{{ asset('images/default.png') }}" alt="No Image" width="50">
                                        @endif
                                    </td>
                                    <td>{{ $row->nama }}</td>
                                    <td>{{ $row->umur }}</td>
                                    <td>{{ $row->alamat }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->no_telp }}</td>
                                    <td>{{ $row->awal_masuk }}</td>
                                    <td>
                                        @if ($row->status == 'aktif')
                                            <span class="badge badge-success">{{ $row->status }}</span>
                                        @else
                                            <span class="badge badge-danger">{{ $row->status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('detail_pegawai', ['id' => $row->id]) }}"
                                            class="btn btn-success btn-sm"><i class="fa-solid fa-eye"></i> Detail</a>
                                        <a href="{{ route('edit_pegawai', $row->id) }}" class="btn btn-warning btn-sm"><i
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
            </div> --}}
    </div>
    </div>
    {{-- <script>
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
    </script> --}}
@endsection
