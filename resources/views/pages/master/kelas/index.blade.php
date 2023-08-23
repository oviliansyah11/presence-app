@extends('layouts.app')

@section('content')
@section('kelas', 'active')
<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="card-header">
        <a href="{{ route('kelas.create') }}" type="button" class="btn btn-success">
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
                            <button type="button" class="btn btn-icon btn-primary">
                                <span class="tf-icons bx bx-customize"></span>
                            </button>
                            <form action="{{ route('kelas.destroy', $item->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-icon btn-danger ml-2"
                                    onclick="return confirm('Are you sure?')">
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
<!--/ Basic Bootstrap Table -->
@endsection
