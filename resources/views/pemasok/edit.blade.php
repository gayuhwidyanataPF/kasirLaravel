@extends('layouts.main')

@section('container')
<h1 class="text-center my-3">Form Edit Pemasok</h1>
    <form action="{{ route('pemasok.update', $pmasok->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $pmasok->nama) }}" placeholder="Masukkan Nama">

            @error('nama')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $pmasok->alamat) }}" placeholder="Masukkan alamat">

            <!-- error message untuk title -->
            @error('alamat')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">No Telepon</label>
            <input type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ old('no_telp', $pmasok->no_telp) }}" placeholder="Masukkan No Telepon">

            <!-- error message untuk title -->
            @error('no_telp')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
        <button type="reset" class="btn btn-md btn-warning">RESET</button>

    </form>
@endsection