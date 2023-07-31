@extends('layouts.main')

@section('container')
<h1 class="text-center my-3">Form Tambah Toko</h1>
    <form action="{{ route('toko.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Kode Toko</label>
            <input type="text" class="form-control @error('kode_toko') is-invalid @enderror" name="kode_toko" value="{{ old('kode_toko') }}" placeholder="Masukkan Kode Toko">

            @error('kode_toko')
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

        <button type="submit" class="btn btn-md btn-primary">Simpan</button>
        <button type="reset" class="btn btn-md btn-warning">Reset</button>
        <a href="/toko" class="btn btn-md btn-dark">Kembali</a>

    </form>
@endsection