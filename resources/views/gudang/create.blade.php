@extends('layouts.main')

@section('container')
<h1 class="text-center my-3">Form Tambah Gudang</h1>
    <form action="{{ route('gudang.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Kode Gudang</label>
            <input type="text" class="form-control @error('kode_gudang') is-invalid @enderror" name="kode_gudang" value="{{ old('kode_gudang') }}" placeholder="Masukkan Kode Gudang">

            @error('kode_gudang')
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

        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
        <button type="reset" class="btn btn-md btn-warning">RESET</button>

    </form>
@endsection