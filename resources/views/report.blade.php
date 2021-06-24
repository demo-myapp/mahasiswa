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
            <button class="btn btn-info" style="margin-left: 1em">Report</button>
          </div>
        </div>
      </div>
      <form action="{{ route('mahasiswa.report') }}" method="post">
        @csrf
        <div class="container">
          <div class="form-group">
            <label for="gb">Filter GroupBy</label>
            <select name="gb" class="form-control" required>
              <option>{{ $title }}</option>
              <option value="1">Usia</option>
              <option value="2">Jenis Kelamin</option>
              <option value="3">Jurusan</option>
            </select>
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-sm">Change</button>
          </div>
        </div>
    </div>
    </form>
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
          <?php $mahasiswaByGroup = $mahasiswa; ?>
          @foreach ($mahasiswaByGroup as $group => $mahasiswa)
          <tr>
            <td colspan="5">{{ $title }} = {{ $group }}</td>
          </tr>
          @foreach ($mahasiswa as $mhs)
          <tr>
            <td>{{ $mhs->id }}</td>
            <td>{{ $mhs->nama_mahasiswa }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>{{ $mhs->usia }}</td>
            <td>{{ $mhs->jenis_kelamin }}</td>
          </tr>
          @endforeach
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  </div>

  @extends('footer')