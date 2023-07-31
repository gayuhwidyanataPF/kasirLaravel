@extends('layouts.main')

@section('container')
<h1 class="text-center my-3">Form Edit Barang</h1>
    <form action="{{ route('barang.update', $barang->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Kategori Barang</label>
            <select name="kode_jenis" id="kode_jenis" class="form-control">
                @foreach($jenisBarangs as $jenisBarang)
                <option value="{{ $jenisBarang->id }}" @if($barang->kode_jenis == $jenisBarang->id) selected @endif>{{ $jenisBarang->kategori_barang }}</option>
                @endforeach
            </select>

            @error('kode_jenis')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $barang->nama) }}" placeholder="Masukkan Nama">

            @error('nama')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Pemasok</label>
            <select name="kode_pemasok" id="kode_pemasok" class="form-control">
                @foreach($pemasoks as $pemasok)
                <option value="{{ $pemasok->id }}" @if($barang->kode_pemasok == $pemasok->id) selected @endif>{{ $pemasok->nama }}</option>
                @endforeach
            </select>

            @error('kode_pemasok')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga', $barang->harga) }}" placeholder="Masukkan harga">

            <!-- error message untuk title -->
            @error('harga')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
        <button type="reset" class="btn btn-md btn-warning">RESET</button>
        <a href="/barang" class="btn btn-md btn-dark">Kembali</a>

    </form>
@endsection