@extends('layouts.main')

@section('container')
<h1 class="text-center my-3">Form Barang</h1>
    <a href="{{ route('barang.create') }}" class="btn btn-md btn-success mb-3">Tambah Barang</a>
    <a href="/" class="btn btn-md btn-dark mb-3">Kembali</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">KODE BARANG</th>
                <th scope="col">KATEGORI BARANG</th>
                <th scope="col">NAMA</th>
                <th scope="col">HARGA</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($barangs as $barang)
            <tr>
                <td>{{ $barang->kode_barang }}</td>
                <td>{{ $barang->RjenisBarang->kategori_barang }}</td>
                <td>{{ $barang->nama }}</td>
                <td>{{ $barang->harga }}</td>
                <td class="text-center">
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('barang.destroy', $barang->id) }}" method="POST">
                        <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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