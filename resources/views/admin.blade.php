@extends('layouts.main')

@section('container')
<h1 class="text-center my-5">Halaman Admin</h1>
<div class="row">
    <div class="col-md-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/500x300?user" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pemasok</h5>
              <a href="/pemasok" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
    <div class="col-md-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/500x300?emoji" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gudang</h5>
              <a href="/gudang" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
    <div class="col-md-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/500x300?people" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Jenis Barang</h5>
              <a href="/jenisBarang" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/500x300?place" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Toko</h5>
              <a href="/toko" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
    <div class="col-md-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/500x300?product" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Barang</h5>
              <a href="/barang" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
    <div class="col-md-4 d-flex justify-content-center">
        {{-- <div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/500x300?people" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Jenis Barang</h5>
              <a href="/jenisBarang" class="btn btn-primary">Go somewhere</a>
            </div>
          </div> --}}
    </div>
</div>

@endsection