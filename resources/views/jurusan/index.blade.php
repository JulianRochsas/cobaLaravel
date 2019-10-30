@extends('layout/app')

@section('title', 'Jurusan')

@section('content')
<div class="col">
    <div class="card shadow">
      <div class="card-header border-0">
       <a href="/jurusan/create" class="btn btn-primary my-3 left">Tambah Data Jurusan</a>
      </div>

      @if (session('status'))
        <div class="alert alert-success border-0">
            {{ session('status') }}
        </div>
      @endif

      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Jurusan</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Jurusan</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($jurusan as $jurusan)
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{ $loop->iteration }}</span>
                        </div>
                      </div>
                    </th>
                    <th scope="row">
                        <div class="media align-items-center">
                              <div class="media-body">
                                <span class="mb-0 text-sm">{{ $jurusan->nama_jurusan }}</span>
                              </div>
                        </div>
                    </th>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="{{ $jurusan->id }}/edit">Edit</a>
                          <form action="{{ $jurusan->id }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="dropdown-item">Delete</button>
                          </form>
                        </div>
                      </div>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
