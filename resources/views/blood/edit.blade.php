@extends('layout._default.dashboard')
@section('content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="col-auto">
                <h1 class="app-page-title mb-3">Edit Blood</h1>
            </div>

            <div class="app-card app-card-settings shadow-sm p-4 col-lg-6 col-md-6 col-sm-12">

                <div class="app-card-body">
                    <form class="settings-form" method="POST" action="{{ route('blood.update', ['blood' => $blood->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Blood Type</label>
                            <input type="text" name="name" class="form-control" id="name"
                                value="{{ old('name') ? old('name') : $blood->name }}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" rows="20" class="form-control">{{ old('description') ? old('description') : $blood->description }}</textarea>
                            @error('description')
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
