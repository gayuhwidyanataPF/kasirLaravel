@extends('layouts.main')

@section('container')
<h1 class="text-center my-3">Form Tambah Pemasok</h1>
    <form action="{{ route('pemasok.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Kode Pemasok</label>
            <input type="text" class="form-control @error('kode_pemasok') is-invalid @enderror" name="kode_pemasok" value="{{ old('kode_pemasok') }}" placeholder="Masukkan Kode Pemasok">

            <!-- error message untuk title -->
            @error('kode_pemasok')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Pemasok">

            <!-- error message untuk title -->
            @error('nama')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan alamat">

            <!-- error message untuk title -->
            @error('alamat')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">No Telepon</label>
            <input type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ old('no_telp') }}" placeholder="Masukkan No Telepon">

            <!-- error message untuk title -->
            @error('no_telp')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-md btn-primary">Simpan</button>
        <button type="reset" class="btn btn-md btn-warning">Reset</button>
        <a href="/pemasok" class="btn btn-md btn-dark">Kembali</a>

    </form>
@endsection