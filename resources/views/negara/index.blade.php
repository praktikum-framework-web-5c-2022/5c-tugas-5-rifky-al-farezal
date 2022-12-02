@extends('master')
@section('title', 'Dashboard negara')

@section('content')
    <style>
        .bdr {
            border-radius: 8px;
            overflow: hidden;
        }
    </style>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <h2>Dashboard negara</h2>
                    <form class="form-inline">
                        <a href="{{ route('negara.create') }}" class="btn btn-danger">Tambah</a>
                    </form>
                </div>
                <div class="py-4">
                    @if (session()->has('message'))
                        <div class="my-3">
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        </div>
                    @endif
                </div>
                <div class="table-responsive bdr ">
                    <table class="table table-striped">
                        <thead class="bg-danger text-white">
                            <tr align="center">
                                <th>No</th>
                                <th>Kode ibukota</th>
                                <th>Nama negara</th>
                                <th>Nama ibukota</th>
                                <th>Lokasi negara</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($negaras as $negara)
                                <tr align="center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $negara->ibukota->kode_ibukota ?? 0 }}</td>
                                    <td>{{ $negara->nama_negara }}</td>
                                    <td>{{ $negara->ibukota->nama_ibukota ?? 0 }}</td>
                                    <td>{{ $negara->lokasi }}</td>
                                    <td>
                                        <div class="d-flex justify-content-around">
                                            <a href="{{ route('negara.edit', ['negara' => $negara->id]) }}"
                                                class="btn btn-warning btn-block">Edit</a>
                                            <form action="{{ route('negara.destroy', ['negara' => $negara->id]) }}"
                                                method="POST" class="ms-1">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="11">Tidak ada data...</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
