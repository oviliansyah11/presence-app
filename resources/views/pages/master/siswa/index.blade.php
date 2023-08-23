@extends('layouts.app')

@section('content')
@section('siswa', 'active')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('siswa.create') }}" type="button" class="btn btn-success">
                <span class="tf-icons bx bx-plus"></span> Tambah Data
            </a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No Telpon</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($siswa as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nisn }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->tgl_lahir }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->no_telpon }}</td>
                            <td>{{ $item->kelas->nama_kelas }}</td>
                            <td>
                                <button type="button" class="btn btn-icon btn-primary">
                                    <span class="tf-icons bx bx-edit-alt" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                        data-bs-placement="top" data-bs-html="true"
                                        title="<span>Edit Data</span>"></span>
                                </button>
                                <form action="{{ route('siswa.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-icon btn-danger ml-2" data-bs-toggle="tooltip"
                                        data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                        title="<span>Hapus Data</span>" onclick="return confirm('Are you sure?')">
                                        <span class="tf-icons bx bx-trash"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" style="text-align: center">No data available yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
