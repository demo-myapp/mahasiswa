@extends('header')

<body>
  <div class="container">
    <div class="card">
      <div class="card-header container-fluid">
        <div class="row">
          <div class="col-md-10">
            <h3 class="w-75 p-3"></h3>
          </div>
          <div class="col-md-2 float-right">
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Add</a>
            <a href="{{ route('mahasiswa.report') }}" class="btn btn-info" style="margin-left: 1em">Report</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama Mahasiswa</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Usia</th>
              <th scope="col">Jenis Kelamin</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($mahasiswa as $mhs)
            <tr>
              <td>{{ $mhs->id }}</td>
              <td>{{ $mhs->nama_mahasiswa }}</td>
              <td>{{ $mhs->jurusan }}</td>
              <td>{{ $mhs->usia }}</td>
              <td>{{ $mhs->jenis_kelamin }}</td>
            </tr>
            @empty
            <tr>
              <td colspan="6" class="text-center">Empty data</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>

  @extends('footer')