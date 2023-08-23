@extends('layouts.app')

@section('content')
@section('siswa', 'active')
<div class="container-sm container-p-y">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col">
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-2 col-form-label">NISN</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="number" value="Sneat" id="nisn"
                                        name="nisn" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-search-input" class="col-md-2 col-form-label">Nama</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" id="nama" name="nama" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-email-input" class="col-md-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="date" value="Sneat" id="tgl_lahir"
                                        name="tgl_lahir" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-url-input" class="col-md-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-md-10">
                                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin"
                                        aria-label="Default select example">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-tel-input" class="col-md-2 col-form-label">Alamat</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-password-input" class="col-md-2 col-form-label">No Telepon</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="number" name="no_telpon" id="no_telpon">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-number-input" class="col-md-2 col-form-label">Kelas</label>
                                <div class="col-md-10">
                                    <select class="form-select" id="kelas_id" name="kelas_id" required>
                                        @foreach ($kelas as $item)
                                            @if (old('kelas_id') == $item->id)
                                                <option value="{{ $item->id }}" selected>{{ $item->nama_kelas }}
                                                </option>
                                            @else
                                                <option value="{{ $item->id }}">{{ $item->nama_kelas }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-datetime-local-input" class="col-md-2 col-form-label">Password</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="password" name="password"
                                        autocomplete="new-password" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-date-input" class="col-md-2 col-form-label">Confirm Password</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="password" name="password_confirmation"
                                        autocomplete="username" required>
                                </div>
                            </div>

                            <div class="container">
                                <div class="row align-items-center">
                                    <button type="submit" type="button" class="btn btn-primary ">
                                        SUBMIT
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
