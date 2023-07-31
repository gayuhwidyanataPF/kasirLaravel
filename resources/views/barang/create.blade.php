@extends('layouts.main')

@section('container')
<h1 class="text-center my-3">Form Tambah Barang</h1>
    <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Kategori Barang</label>
            <select name="kode_jenis" id="kode_jenis" class="form-control">
                <option selected>pilih jenis barang</option>
                @foreach($jenisBarangs as $jenisBarang)
                    <option value="{{ $jenisBarang->id }}">{{ $jenisBarang->kategori_barang }}</option>
                @endforeach
            </select>

            @error('kode_jenis')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Kode Barang</label>
            <input type="text" class="form-control @error('kode_barang') is-invalid @enderror" name="kode_barang" value="{{ old('kode_barang') }}" placeholder="Masukkan Kode Barang">

            @error('kode_barang')
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
            <label class="form-label">Harga</label>
            <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga') }}" placeholder="Masukkan Harga">

            <!-- error message untuk title -->
            @error('harga')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-md btn-primary">Simpan</button>
        <button type="reset" class="btn btn-md btn-warning">Reset</button>
        <a href="/barang" class="btn btn-md btn-dark">Kembali</a>

    </form>
@endsection