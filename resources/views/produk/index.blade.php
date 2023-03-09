<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tabel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Tabel Produk</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="/home" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-white">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/produk" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline text-white">Kelola Data Produk</span> </a>
                    </li>
                    
                    
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <li>
                <form action="/logout" method="POST">
                @csrf
            <button class="btn btn-danger">Logout</button>
                    </li>
                
            </div>
        </div>
        <div class="col py-3">
        </head>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kelola Data Produk</h1>
          </div><!-- /.col -->                              
 
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="row">
            @if ($message = Session::get('Sukses'))
            <div class="alert alert-info" role="alert">
              {{ $message }}
            </div>
          
            @endif
        </div>
    </div>
</div>
        </div>
    </div>
</div>




 <div class="card-body">
 <a href="/create" class="btn btn-success m-4">Tambah</a>
<table id="status" class="table table-striped table-bordered">

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Judul Produk</th>
      <th scope="col">Deskripsi Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Gambar</th>    
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    @php
      $no = 1;
    @endphp

    @foreach($data as $row)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $row->judulProduk }}</td>
      <td>{{ $row->deskripsi }}</td>
      <td>{{ $row->harga }}</td>
      <td><img src="{{ asset('foto/'.$row->gambar) }}" width="50px"></td>
      <td>
        <a href="/edit/{{ $row->id }}" class="btn btn-success ">Edit</a>
        <!-- Button trigger modal -->
        <a href="/hapus/{{ $row->id }}" class="btn btn-success">Hapus</a>

        
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>
</div>
</div>
</div>