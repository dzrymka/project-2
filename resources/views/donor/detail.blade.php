@extends('layout._default.dashboard')
@section('content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="col-auto">
                <h1 class="app-page-title mb-3">Detail Donor</h1>
            </div>

            <div class="tab-content" id="orders-table-tab-content">
                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table class="table app-table-hover mb-0 text-left table-bordered border-danger">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="cell">NIK</th>
                                            <th class="cell">Name</th>
                                            <th class="cell">Tipe Darah</th>
                                            <th class="cell">Umur</th>
                                            <th class="cell">Jumlah Kantung</th>
                                            <th class="cell">Ukuran Kantung</th>
                                            <th class="cell">Tanggal Kadaluarsa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-danger">
                                            <td class="cell">{{ $donor->nik }}</td>
                                            <td class="cell">{{ $donor->name }}</td>
                                            <td class="cell">{{ $donor->blood->name }}</td>
                                            <td class="cell">{{ $donor->age }}</td>
                                            <td class="cell">{{ $donor->qty }}</td>
                                            <td class="cell">{{ $donor->ukuran_kantong }}</td>
                                            <td class="cell">{{ $donor->expired }}</td>
                                        </tr>
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
