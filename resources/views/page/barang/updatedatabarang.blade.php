@extends('layouts.base_admin.base_dashboard') @section('judul', 'Tambah Barang')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Barang</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Barang</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<section class="content">

  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif

  <h1 class="text-center mb-4">Data Barang</h1>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form action="{{ route('barang.editdata', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
                <input type="text" name="KodeBarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->KodeBarang }}">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama barang</label>
                <input type="text" name="NamaBarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->NamaBarang }}">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Satuan</label>
                <input type="text" name="Satuan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->Satuan }}">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga Satuan</label>
                <input type="text" name="HargaSatuan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->HargaSatuan }}">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Stok</label>
                <input type="text" name="Stok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->Stok }}">
              </div>
              <button class="btn btn-info" type="submit">Submit</button>
              <a href="{{ route('barang.index') }}" class="btn btn-success">Kembali</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</section>
