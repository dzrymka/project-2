@extends('layout._default.dashboard')
@section('content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data Barang</h1>

            <!-- DataTales Example -->
            <div class="card shadow mb-4 col-lg-8">
                <br>
                <div class="card-header py-3">
                    <h3>Create Data Barang</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('inventaris.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" id="kode_bar" name="kode_bar" class="form-control"
                                placeholder="Kode Barang">
                            @error('kode_bar')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" id="nama_bar" name="nama_bar" class="form-control"
                                placeholder="Nama Barang">
                            @error('nama_bar')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <select id="inventaristype_id" name="inventaristype_id" class="form-control">
                                <option value="" disabled selected>Select Jenis Barang</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->jenis_bar }}</option>
                                @endforeach
                            </select>
                            @error('inventaristype_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="number" id="jumlah_bar" name="jumlah_bar" class="form-control"
                                placeholder="Jumlah Barang">
                            @error('jumlah_bar')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea id="des_barang" name="des_barang" class="form-control" placeholder="Deskripsi Barang"></textarea>
                            @error('des_barang')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="foto_bar">Foto Inventaris</label>
                            <input type="file" id="foto_bar" name="foto_bar" class="form-control-file">
                            @error('foto_bar')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
