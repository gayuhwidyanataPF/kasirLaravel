@extends('layouts.main')

@section('container')
<h1 class="text-center my-3">Form Jenis Barang</h1>
    <a href="{{ route('jenisBarang.create') }}" class="btn btn-md btn-success mb-3">Tambah Jenis Barang</a>
    <a href="/" class="btn btn-md btn-dark mb-3">Kembali</a>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">KODE JENIS BARANG</th>
            <th scope="col">KATEGORI BARANG</th>
            <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($jenisBarangs as $jenisBarang)
            <tr>
                <td>{{ $jenisBarang->kode_jenis_barang }}</td>
                <td>{{ $jenisBarang->kategori_barang }}</td>
                <td class="text-center">
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('jenisBarang.destroy', $jenisBarang->id) }}" method="POST">
                        <a href="{{ route('jenisBarang.edit', $jenisBarang->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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