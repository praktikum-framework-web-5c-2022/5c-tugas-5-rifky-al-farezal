@extends('master')
@section('title','Tambah Data')

@section('content')
    </style>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <h2>Tambah Data Negara Anda</h2>
                <p>Silahkan masukkan data Negara Anda dengan benar dan lengkap!</p>
                @if (session()->has('message'))
                    <div class="my-3">
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>
                    </div>
                @endif
                <form action="{{route('negara.store')}}" method="POST">
                    @csrf
                    <div class="form-row py-4">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <label for="kode_ibukota" class="form-label">Kode ibukota</label>
                                    <input type="text" name="kode_ibukota" id="kode_ibukota" placeholder="Masukkan Kode ibukota" class="form-control" value="{{old('kode_ibukota')}}">
                                    @error('kode_ibukota')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                    <div class="col">
                                    <label for="nama_negara" class="form-label">Nama negara</label>
                                    <input type="text" name="nama_negara" id="nama_negara" placeholder="Masukkan Nama negara" class="form-control" value="{{old('nama_negara')}}">
                                    @error('nama_negara')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col my-3">
                                    <label for="nama_ibukota" class="form-label">Nama ibukota</label>
                                    <input type="text" name="nama_ibukota" id="nama_ibukota" placeholder="Masukkan Nama ibukota" class="form-control" value="{{old('nama_ibukota')}}">
                                    @error('nama_ibukota')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="lokasi" class="form-label">lokasi negara</label>
                                <textarea name="lokasi" id="lokasi" class="form-control" placeholder="Masukkan lokasi negara">{{old('lokasi')}}</textarea>
                                @error('lokasi')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="d-flex flex-row-reverse py-3">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
