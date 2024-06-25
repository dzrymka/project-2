@extends('layout._default.dashboard')
@section('content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Inventaris</h1>
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
                            </div>
                            <div class="col-auto">
                                <select class="form-select w-auto">
                                    <option selected value="option-1">All</option>
                                    <option value="option-2">This week</option>
                                    <option value="option-3">This month</option>
                                    <option value="option-4">Last 3 months</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <a class="btn app-btn-secondary" href="{{ route('inventaris.create') }}">
                                    Add inventaris
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                                            <th class="cell">Kode Barang</th>
                                            <th class="cell">Nama Barang</th>
                                            <th class="cell">Jenis Barang</th>
                                            <th class="cell">Jumlah Barang</th>
                                            <th class="cell">Deskripsi Barang</th>
                                            <th class="cell">Awal Masuk</th>
                                            <th class="cell">Status</th>
                                            <th class="cell">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($inventaris as $key => $inventaris)
                                            <tr>
                                                <td class="cell">{{ $key + 1 }}</td>
                                                <td class="cell">
                                                    <img src="{{ $inventaris->foto_bar ? asset($inventaris->foto_bar) : asset('images/default-image.jpg') }}"
                                                        alt="Image of {{ $inventaris->kode_bar }}" class="img-fluid rounded"
                                                        width="100">
                                                </td>
                                                <td class="cell">{{ $inventaris->kode_bar }}</td>
                                                <td class="cell">{{ $inventaris->nama_bar }}</td>
                                                <td class="cell">{{ $inventaris->inventaristype->jenis_bar }}</td>
                                                <td class="cell">{{ $inventaris->jumlah_bar }}</td>
                                                <td class="cell">{{ $inventaris->des_barang }}</td>
                                                <td class="cell">{{ $inventaris->awal_masuk }}</td>
                                                <td class="cell">
                                                    @if ($inventaris->status == 'ready')
                                                        <span
                                                            class="badge badge-success bg-primary">{{ $inventaris->status }}</span>
                                                    @else
                                                        <span
                                                            class="badge badge-danger bg-danger">{{ $inventaris->status }}</span>
                                                    @endif
                                                </td>
                                                <td class="cell">
                                                    <a class="btn-sm btn btn-warning"
                                                        href="{{ route('inventaris.edit', ['inventari' => $inventaris->id]) }}">Edit</a>
                                                    <a class="btn-sm btn btn-info"
                                                        href="{{ route('inventaris.show', ['inventari' => $inventaris->id]) }}">View</a>
                                                    <a onclick="handleHapusInventaris({{ $inventaris->id }})"
                                                        class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash" id="delete"></i> Hapus Data
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function handleHapusInventaris(id) {
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

                    fetch(`{{ config('app.url') }}/inventaris/${id}`, {
                            method: 'DELETE',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': csrfToken
                            },
                        })
                        .then(response => {
                            if (response.ok) {
                                Swal.fire('Deleted!', 'Data telah dihapus.', 'success').then(() => {
                                    window.location.reload();
                                });
                            } else {
                                Swal.fire('Failed!', 'Terjadi kesalahan saat menghapus data.', 'error');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            Swal.fire('Failed!', 'Terjadi kesalahan saat menghapus data.', 'error');
                        });
                }
            });
        }
    </script>
@endsection
