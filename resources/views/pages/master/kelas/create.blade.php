@extends('layouts.app')

@section('content')
@section('kelas', 'active')
<form action="{{ route('kelas.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Nama Kelas</label>
                            <input type="text" class="form-control" id="class_name" name="nama_kelas" required
                                value="{{ old('class_name') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
