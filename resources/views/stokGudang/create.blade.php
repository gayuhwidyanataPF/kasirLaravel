@extends('layouts.main')

@section('container')
<h1 class="text-center my-3">Form Masukan Barang ke Gudang</h1>
    <form action="{{ route('stokGudang.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Barang</label>
            <select name="id_barang" id="id_barang" class="form-control @error('id_barang') is-invalid @enderror">
                <option selected>pilih nama barang</option>
                @foreach($barangs as $barang)
                    <option value="{{ $barang->id }}">{{ $barang->nama }}</option>
                @endforeach
            </select>

            @error('id_barang')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Gudang</label>
            <select name="id_gudang" id="id_gudang" class="form-control @error('id_gudang') is-invalid @enderror">
                <option selected>pilih Gudang</option>
                @foreach($gudangs as $gudang)
                    <option value="{{ $gudang->id }}">{{ $gudang->nama }}</option>
                @endforeach
            </select>

            @error('id_gudang')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="text" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ old('stok') }}" placeholder="Masukkan Stok">

            @error('stok')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-md btn-primary">Simpan</button>
        <button type="reset" class="btn btn-md btn-warning">Reset</button>
        <a href="/stokGudang" class="btn btn-md btn-dark">Kembali</a>

    </form>
@endsection