@extends('layouts.main')

@section('container')
<h1 class="text-center my-3">Form Edit Kategor Barang</h1>
    <form action="{{ route('jenisBarang.update', $jenisBarang->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">kategori_barang</label>
            <input type="text" class="form-control @error('kategori_barang') is-invalid @enderror" name="kategori_barang" value="{{ old('kategori_barang', $jenisBarang->kategori_barang) }}" placeholder="Masukkan Kategori Barang">

            @error('kategori_barang')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
        <button type="reset" class="btn btn-md btn-warning">RESET</button>

    </form>
@endsection