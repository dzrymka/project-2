@extends('layout._default.dashboard')
@section('title', $title)

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Profil') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('penyuluh.profil.update', ['id' => $user->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                        value="{{ $user->name }}" readonly>
                                </div>
                            </div>

                            <!-- Assuming role is a related model -->
                            @if (is_object($user->role) && property_exists($user->role, 'name'))
                                <div class="form-group row">
                                    <label for="role"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                                    <div class="col-md-6">
                                        <input id="role" type="text" class="form-control" name="role"
                                            value="{{ $user->role->name }}" readonly>
                                    </div>
                                </div>
                            @else
                                <!-- Assuming role is just a string in the users table -->
                                <div class="form-group row">
                                    <label for="role"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                                    <div class="col-md-6">
                                        <input id="role" type="text" class="form-control" name="role"
                                            value="{{ $user->role }}" readonly>
                                    </div>
                                </div>
                            @endif

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                        value="{{ $user->email }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="avatar"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>
                                <div class="col-md-6">
                                    <img src="{{ asset('storage/avatars/' . $user->avatar) }}" alt="Profile Picture"
                                        class="img-thumbnail mb-2">
                                    <input id="avatar" type="file"
                                        class="form-control @error('avatar') is-invalid @enderror" name="avatar">
                                    @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <a href="/admin" class="btn btn-secondary">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <button type="button" class="btn btn-danger" onclick="deleteProfile()">Hapus
                                        Profile</button>
                                </div>
                            </div>
                        </form>
                        <form id="delete-form" action="{{ route('penyuluh.profil.delete', ['id' => $user->id]) }}"
                            method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function deleteProfile() {
            if (confirm('Are you sure you want to delete your profile?')) {
                event.preventDefault();
                document.getElementById('delete-form').submit();
            }
        }
    </script>
@endsection
