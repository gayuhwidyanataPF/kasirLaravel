@extends('layouts.main')

@section('container')
<h1 class="text-center my-3">Form Edit Barang ke Gudang</h1>
    <form action="{{ route('stokGudang.update', $stokGudang->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Barang</label>
            @readonly(true)<select name="id_barang" id="id_barang" class="form-control" disabled>
                @foreach($barangs as $barang)
                    <option value="{{ $barang->id }}" @if($stokGudang->id_barang == $barang->id) @endif>{{ $barang->nama }}</option>
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
            <select name="id_gudang" id="id_gudang" class="form-control">
                @foreach($gudangs as $gudang)
                    <option value="{{ $gudang->id }}" @if($stokGudang->id_gudang == $gudang->id) selected @endif>{{ $gudang->nama }}</option>
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
            <input type="text" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ old('stok', $stokGudang->stok) }}" placeholder="Masukkan Stok">

            <!-- error message untuk title -->
            @error('stok')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
        <button type="reset" class="btn btn-md btn-warning">RESET</button>
        <a href="/stokGudang" class="btn btn-md btn-dark">Kembali</a>

    </form>
@endsection