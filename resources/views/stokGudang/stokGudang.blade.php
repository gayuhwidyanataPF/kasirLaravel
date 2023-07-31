@extends('layouts.main')

@section('container')
<h1 class="text-center my-3">Form Barang Gudang</h1>
    <a href="{{ route('stokGudang.create') }}" class="btn btn-md btn-success mb-3">Tambah Barang ke Gudang</a>
    <a href="/" class="btn btn-md btn-dark mb-3">Kembali</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">NAMA BARANG</th>
                <th scope="col">NAMA GUDANG</th>
                <th scope="col">STOK</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($stokGudangs as $stokGudang)
            <tr>
                <td>{{ $stokGudang->RRbarang->nama }}</td>
                <td>{{ $stokGudang->RRgudang->nama }}</td>
                <td>{{ $stokGudang->stok }}</td>
                <td class="text-center">
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('stokGudang.destroy', $stokGudang->id) }}" method="POST">
                        <a href="{{ route('stokGudang.edit', $stokGudang->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                    </form>
                </td>
            </tr>
            @empty
                <div class="alert alert-danger">
                    Data Post belum Tersedia.
                </div>
            @endforelse
        </tbody>
    </table>
@endsection

<script>
    @if(session()->has('success'))

        toastr.success('{{ session('success') }}', 'BERHASIL!');

    @elseif(session()->has('error'))

        toastr.error('{{ session('error') }}', 'GAGAL!');

    @endif
</script>