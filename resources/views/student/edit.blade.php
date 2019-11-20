@extends('layout/app')

@section('title', 'Form Edit Student')

@section('content')
<div class="col">
        {{-- <div class="col-lg-6 col-md-8"> --}}
            <div class="card bg-secondary shadow border-10">
                    <form method="post" action="/students/{{ $students->id }}">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Your Name" name="nama" value="{{ $students->nama }}">
                          @error('nama') <div class="invalid-feedback"> {{$message}} </div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan NRP" name="nrp" value="{{ $students->nrp }}">
                            @error('nrp') <div class="invalid-feedback"> {{$message}} </div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Masukkan email" name="email" value="{{ $students->email }}">
                        </div>

                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select type="form" class="form-control" name="jurusan_id">
                                <option value="{{ $students->jurusan_id  }}">{{ $students->jurusan_id  }}</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </form>
            </div>
        {{-- </div> --}}
</div>
@endsection
