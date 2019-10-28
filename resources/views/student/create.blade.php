@extends('layout/app')

@section('title', 'Tambah Data Mahasiswa')

@section('content')
<div class="col">
        <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary shadow border-0">
                <form role="form" method="post" action="/students">
                            @csrf
                            <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" name="nama" type="text" value="{{ old('nama') }}">
                                @error('nama') <div class="invalid-feedback"> {{$message}} </div> @enderror
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control @error('nrp') is-invalid @enderror" placeholder="NRP" type="text" name="nrp" value="{{ old('nrp') }}">
                                @error('nrp') <div class="invalid-feedback"> {{$message}} </div> @enderror
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control @error('email') is-invalid @enderror" placeholder="Email" type="email" name="email" value="{{ old('email') }}">
                                @error('email') <div class="invalid-feedback"> {{$message}} </div> @enderror
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control @error('jurusan') is-invalid @enderror" placeholder="Jurusan" type="text" name="jurusan" value="{{ old('jurusan') }}">
                                @error('jurusan') <div class="invalid-feedback"> {{$message}} </div> @enderror
                            </div>
                            </div>
                            <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-4">Tambah Data</button>
                            </div>
                        </form>
            </div>
        </div>
</div>
@endsection






{{-- @extends('layout/main')

@section('title', 'Form Tambah Data Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>

                <form method="post" action="/students">
                    @csrf
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Your Name" name="nama" value="{{ old('nama') }}">
                      @error('nama') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan NRP" name="nrp" value="{{ old('nrp') }}">
                        @error('nrp') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Masukkan email" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ old('jurusan') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>

            </div>
        </div>
    </div>
@endsection --}}
