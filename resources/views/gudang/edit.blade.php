@extends('layouts.main')

@section('container')
<h1 class="text-center my-3">Form Edit Gudang</h1>
    <form action="{{ route('gudang.update', $gudang->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $gudang->nama) }}" placeholder="Masukkan Nama">

            @error('nama')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $gudang->alamat) }}" placeholder="Masukkan alamat">

            <!-- error message untuk title -->
            @error('alamat')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
        <button type="reset" class="btn btn-md btn-warning">RESET</button>

    </form>
@endsection