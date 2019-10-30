@extends('layout/app')

@section('title', 'Tambah Data Jurusan')

@section('content')
<div class="col">
        {{-- <div class="col-lg-6 col-md-8"> --}}
            <div class="card bg-secondary shadow border-10">
                <form role="form" method="post" action="/jurusan">
                            @csrf
                            <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control @error('nama_jurusan') is-invalid @enderror" placeholder="Nama Jurusan" name="nama_jurusan" type="text" value="{{ old('nama_jurusan') }}">
                                @error('nama_jurusan') <div class="invalid-feedback"> {{$message}} </div> @enderror
                            </div>
                            <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-4">Tambah Data</button>
                            </div>
                        </form>
            </div>
        {{-- </div> --}}
</div>
@endsection
