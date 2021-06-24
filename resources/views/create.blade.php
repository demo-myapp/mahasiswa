@extends('header')

<div class="container-fluid">

  <!-- TAMBAHKAN ENCTYPE="" KETIKA MENGIRIMKAN FILE PADA FORM -->
  <form action="{{ route('mahasiswa.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Tambah Mahasiswa</h4>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="nama">Nama Mahasiswa</label>
              <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <input type="text" name="jurusan" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="usia">Usia</label>
              <input type="text" name="usia" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="jk">Jenis Kelamin</label>
              <input type="text" name="jk" class="form-control" required>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-sm">Add</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

@extends('footer')