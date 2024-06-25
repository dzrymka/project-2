@extends('layout._default.dashboard')
@section('content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="col-auto">
                <h1 class="app-page-title mb-3">Detail Blood</h1>
            </div>

            <div class="app-card app-card-settings shadow-sm p-4 col-lg-6 col-md-6 col-sm-12 mb-3">
                <div class="app-card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Blood Type</label>
                        <input type="text" class="form-control" value="{{ $blood->name }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea rows="20" class="form-control" readonly>{{ $blood->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Stock</label>
                        <input type="text" class="form-control" value="{{ $blood->blood_stock->qty }}" readonly>
                    </div>
                </div><!--//app-card-body-->
            </div><!--//app-card-->

            <div class="tab-content" id="orders-table-tab-content">
                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4>Data Stok Darah</h4>
                                <form class="table-search-form d-flex align-items-center"
                                    action="{{ route('blood.show', $blood->id) }}" method="GET">
                                    <div class="me-2">
                                        <input type="text" id="search-orders" name="search"
                                            class="form-control search-orders" placeholder="Search"
                                            value="{{ request()->search }}">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn app-btn-secondary">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th class="cell">NIK</th>
                                            <th class="cell">Name</th>
                                            <th class="cell">Tipe Darah</th>
                                            <th class="cell">Umur</th>
                                            <th class="cell">Jumlah Kantung</th>
                                            <th class="cell">Tanggal Kadaluarsa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($donors as $key => $donor)
                                            <tr>
                                                <td class="cell">{{ $donor->nik }}</td>
                                                <td class="cell">{{ $donor->name }}</td>
                                                <td class="cell">{{ $donor->blood->name }}</td>
                                                <td class="cell">{{ $donor->age }}</td>
                                                <td class="cell">{{ $donor->qty }}</td>
                                                <td class="cell">{{ $donor->expired }}</td>
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
@endsection
