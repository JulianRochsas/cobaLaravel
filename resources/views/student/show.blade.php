@extends('layout/main')

@section('title', 'Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Daftar Mahasiswa</h1>

                <ul class="list-group">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$students->nama}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$students->nrp}}</h6>
                            <p class="card-text">{{$students->email}}</p>
                            <p class="card-text">{{$students->jurusan}}</p>

                            <a href="{{ $students->id }}/edit" class="btn btn-primary">Edit</a>

                            <form action="{{ $students->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="/students" class="card-link">Kembali</a>
                        </div>
                    </div>
                  </ul>
            </div>
        </div>
    </div>
@endsection
