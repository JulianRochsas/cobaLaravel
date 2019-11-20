@extends('layout/app')

@section('title', 'Mahasiswa')

@section('content')
<div class="col">
    <div class="card shadow">
      <div class="card-header border-0">

      </div>

      @if (session('status'))
        <div class="alert alert-success border-0">
            {{ session('status') }}
        </div>
      @endif

      <div class="table-responsive">
        <ul class="list-group">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$students->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$students->nrp}}</h6>
                    <p class="card-text">{{$students->jurusan->nama_jurusan}}</p>
                    <p class="card-text">{{$students->email}}</p>
                    <p class="card-text">{{$students->nama_jurusan}}</p>
                    <a href="{{ $students->id }}/edit" class="btn btn-primary">Edit</a>
                    <form action="{{ $students->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/students" class="btn btn-warning">Kembali</a>
                </div>
            </div>
          </ul>
      </div>
    </div>
  </div>
@endsection
