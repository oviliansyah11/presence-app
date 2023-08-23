@extends('layouts.app')

@section('content')
@section('kelas', 'active')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header">
            <a href="/kelas/create" type="button" class="btn btn-success">
                <span class="tf-icons bx bx-plus"></span> Tambah Data
            </a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($kelas as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_kelas }}</td>
                            <td>

                                <a href="/qrcode/{{ $item->id }}" target="_blank" class="btn btn-icon btn-primary"
                                    data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top"
                                    data-bs-html="true" title="<span>Show QR Code</span>">
                                    <span class="tf-icons bx bx-qr-scan"></span>
                                </a>
                                <form action="/kelas/{{ $item->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-icon btn-danger ml-2" data-bs-toggle="tooltip"
                                        data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                        title="<span>Hapus Data</span>" onclick="return confirm('Data akan dihapus?')">
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
@endsection
