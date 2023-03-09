@extends('layouts.app')

@section('content')
<div class="">
<h3><span>Selamat Datang di Halaman Dashboard School Galery SMKN 2 Banjarmasin</span></h3>
</div>
<div class="mt-5">
<span>Jumlah Data Produk</span>
</div>
<div class="card text-center" style="width: 10rem;">
                <div class="card-body">
                    <h5 class="card-text">{{ $data }}</h5>
                    <h6 class="card-text">Produk</h6>
                </div>
            </div>

@endsection
