@extends('layout._default.dashboard')
@section('content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Data Relawan</h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <form class="table-search-form row gx-1 align-items-center">
                                    <div class="col-auto">
                                        <input type="text" id="search-orders" name="searchorders"
                                            class="form-control search-orders" placeholder="Search">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn app-btn-secondary">Search</button>
                                    </div>
                                </form>

                            </div><!--//col-->
                            <div class="col-auto">

                                <select class="form-select w-auto">
                                    <option selected value="option-1">All</option>
                                    <option value="option-2">This week</option>
                                    <option value="option-3">This month</option>
                                    <option value="option-4">Last 3 months</option>

                                </select>
                            </div>
                            <div class="col-auto">
                                <a class="btn app-btn-secondary" href="{{ route('relawan.create') }}">
                                    Tambah Relawan
                                </a>
                            </div>
                        </div><!--//row-->
                    </div><!--//table-utilities-->
                </div><!--//col-auto-->
            </div><!--//row-->

            <div class="tab-content" id="orders-table-tab-content">
                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th class="cell">NO</th>
                                            <th class="cell">Foto</th>
                                            <th class="cell">Nama</th>
                                            <th class="cell">Umur</th>
                                            <th class="cell">Alamat</th>
                                            <th class="cell">Email</th>
                                            <th class="cell">NO Telp</th>
                                            <th class="cell">Awal Masuk</th>
                                            <th class="cell">Status</th>
                                            <th class="cell">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($relawans as $key => $relawan)
                                            <tr>
                                                <td class="cell">{{ $key + 1 }}</td>
                                                <td class="cell">
                                                    <img src="{{ $relawan->foto_rel ? asset($relawan->foto_rel) : asset('images/default-image.jpg') }}"
                                                        alt="Image of {{ $relawan->nama }}" class="img-fluid rounded"
                                                        width="100">
                                                </td>
                                                <td class="cell">{{ $relawan->nama }}</td>
                                                <td class="cell">{{ $relawan->umur }}</td>
                                                <td class="cell">{{ $relawan->alamat }}</td>
                                                <td class="cell">{{ $relawan->email }}</td>
                                                <td class="cell">{{ $relawan->no_telp }}</td>
                                                <td class="cell">{{ $relawan->awal_masuk }}</td>
                                                <td class="cell">
                                                    @if ($relawan->status == 'aktif')
                                                        <span
                                                            class="badge badge-success bg-primary">{{ $relawan->status }}</span>
                                                    @else
                                                        <span
                                                            class="badge badge-danger bg-danger">{{ $relawan->status }}</span>
                                                    @endif
                                                </td>
                                                <td class="cell">
                                                    <a class="btn-sm btn btn-warning"
                                                        href="{{ route('relawan.edit', ['relawan' => $relawan->id]) }}">Edit</a>
                                                    <a class="btn-sm btn btn-info"
                                                        href="{{ route('relawan.show', ['relawan' => $relawan->id]) }}">View</a>
                                                    <a onclick="handleHapusRelawan({{ $relawan->id }})"
                                                        class="btn btn-danger btn-sm"><i class="fas fa-trash"
                                                            id="delete"></i> Hapus Data</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div><!--//table-responsive-->
                        </div><!--//app-card-body-->
                    </div><!--//app-card-->
                </div><!--//tab-pane-->
            </div><!--//tab-content-->
        </div><!--//container-fluid-->
    </div><!--//app-content-->
    <script>
        function handleHapusRelawan(id) {
            Swal.fire({
                title: "Apakah Admin Yakin?",
                text: "Data Akan Dihapus!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!"
            }).then((result) => {
                if (result.isConfirmed) {
                    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                    fetch(`{{ config('app.url') }}/relawan/${id}`, {
                            method: 'DELETE',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': csrfToken
                            },
                        })
                        .then(response => {
                            if (response.ok) {
                                Swal.fire(
                                    'Deleted!',
                                    'Data telah dihapus.',
                                    'success'
                                ).then(() => {
                                    window.location.reload();
                                });
                            } else {
                                Swal.fire(
                                    'Failed!',
                                    'Terjadi kesalahan saat menghapus data.',
                                    'error'
                                );
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            Swal.fire(
                                'Failed!',
                                'Terjadi kesalahan saat menghapus data.',
                                'error'
                            );
                        });
                }
            });
        }
    </script>
@endsection
