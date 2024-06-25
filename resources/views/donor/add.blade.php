@extends('layout._default.dashboard')
@section('content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="col-auto">  
                <h1 class="app-page-title mb-3">Add Donor</h1>
            </div>

            <div class="app-card app-card-settings shadow-sm p-4 col-lg-6 col-md-6 col-sm-12">

                <div class="app-card-body">
                    <form class="settings-form" method="POST" action="{{ route('donor.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="number" name="nik" class="form-control" id="nik"
                                value="{{ old('nik') }}">
                            @error('nik')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" id="name"
                                value="{{ old('name') }}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">No Telp</label>
                            <input type="number" name="phone" class="form-control" id="phone"
                                value="{{ old('phone') }}">
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Umur</label>
                            <input type="number" name="age" class="form-control" id="age"
                                value="{{ old('age') }}">
                            @error('age')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Alamat</label>
                            <input type="text" name="address" class="form-control" id="address"
                                value="{{ old('address') }}">
                            @error('address')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Golongan Darah</label>
                            <select name="blood" id="blood" class="form-select">
                                <option value="pilih">-- Pilih --</option>
                                @foreach ($bloods as $key => $blood)
                                    <option value="{{ $blood->id }}"
                                        {{ old('blood') == $blood->id ? 'selected' : '' }}>
                                        {{ $blood->name }}</option>
                                @endforeach
                            </select>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="ukuran_kantong" class="form-label">Ukurang Kantong</label>
                            <input type="number" name="ukuran_kantong" class="form-control" id="ukuran_kantong"
                                value="{{ old('ukuran_kantong') }}">
                            @error('ukuran_kantong')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="qty" class="form-label">Kuantitas</label>
                            <input type="number" name="qty" class="form-control" id="qty"
                                value="{{ old('qty') }}">
                            @error('qty')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="expired" class="form-label">Kadalursa</label>
                            <input type="datetime-local" name="expired" class="form-control" id="expired"
                                value="{{ old('expired') }}">
                            @error('expired')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn app-btn-primary">Submit</button>
                    </form>
                </div><!--//app-card-body-->

            </div><!--//app-card-->


        </div><!--//container-fluid-->
    </div><!--//app-content-->
@endsection
