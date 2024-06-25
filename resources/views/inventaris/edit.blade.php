@extends('layout._default.dashboard')
@section('content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="col-auto">
                <h1 class="app-page-title mb-3">Edit Inventaris</h1>
            </div>

            <div class="app-card app-card-settings shadow-sm p-4 col-lg-6 col-md-6 col-sm-12">

                <div class="app-card-body">
                    <form class="settings-form" method="POST"
                        action="{{ route('inventaris.update', ['inventari' => $inventaris->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="kode_bar" class="form-label">Kode Barang</label>
                            <input type="text" name="kode_bar" class="form-control" id="kode_bar"
                                value="{{ old('kode_bar') ? old('kode_bar') : $inventaris->kode_bar }}">
                            @error('kode_bar')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama_bar" class="form-label">Nama Barang</label>
                            <input type="text" name="nama_bar" class="form-control" id="nama_bar"
                                value="{{ old('nama_bar') ? old('nama_bar') : $inventaris->nama_bar }}">
                            @error('nama_bar')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inventaristype_id" class="form-label">Jenis Inventaris</label>
                            <select name="inventaristype_id" class="form-control" id="inventaristype_id">
                                <option value="">Pilih Jenis Inventaris</option>
                                @foreach ($jenis_inventaris as $jenis)
                                    <option class="text-dark" value="{{ $jenis->id }}"
                                        {{ $inventaris->inventaristype_id == $jenis->id ? 'selected' : '' }}>
                                        {{ $jenis->jenis_bar }}</option>
                                @endforeach
                            </select>
                            @error('inventaristype_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="des_barang" class="form-label">Deskripsi Barang</label>
                            <textarea name="des_barang" id="des_barang" rows="5" class="form-control">{{ old('des_barang') ? old('des_barang') : $inventaris->des_barang }}</textarea>
                            @error('des_barang')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jumlah_bar" class="form-label">Jumlah Barang</label>
                            <input type="text" name="jumlah_bar" class="form-control" id="jumlah_bar"
                                value="{{ old('jumlah_bar') ? old('jumlah_bar') : $inventaris->jumlah_bar }}">
                            @error('jumlah_bar')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="foto_bar" class="form-label">Foto Barang</label>
                            <input type="file" name="foto_bar" class="form-control" id="foto_bar">
                            @error('foto_bar')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-danger">Edit</button>
                    </form>
                </div><!--//app-card-body-->

            </div><!--//app-card-->

        </div><!--//container-fluid-->
    </div><!--//app-content-->
@endsection
