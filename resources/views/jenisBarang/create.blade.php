@extends('layouts.main')

@section('container')
<h1 class="text-center my-3">Form Tambah Jenis Barang</h1>
    <form action="{{ route('jenisBarang.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Kode Jenis Barang</label>
            <input type="text" class="form-control @error('kode_jenis_barang') is-invalid @enderror" name="kode_jenis_barang" value="{{ old('kode_jenis_barang') }}" placeholder="Masukkan Kode Jenis Barang">

            @error('kode_jenis_barang')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori Barang</label>
            <input type="text" class="form-control @error('kategori_barang') is-invalid @enderror" name="kategori_barang" value="{{ old('nkategori_barangama') }}" placeholder="Masukkan Kategori Barang">

            <!-- error message untuk title -->
            @error('nakategori_barangma')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
        <button type="reset" class="btn btn-md btn-warning">RESET</button>

    </form>
@endsection