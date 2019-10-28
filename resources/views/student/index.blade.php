@extends('layout/app')

@section('title', 'Mahasiswa')

@section('content')
<div class="col">
    <div class="card shadow">
      <div class="card-header border-0">
       <a href="/students/create" class="btn btn-primary my-3 left">Tambah Data Mahasiswa</a>
      </div>

      @if (session('status'))
        <div class="alert alert-success border-0">
            {{ session('status') }}
        </div>
      @endif

      <div class="table-responsive">
            <ul class="list-group">
                @foreach ($students as $student)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      {{$student->nama}}
                        <a href="/students/{{$student->id}}" class="badge badge-info">Detail</a>
                    </li>
                @endforeach
            </ul>
      </div>
    </div>
  </div>
@endsection
