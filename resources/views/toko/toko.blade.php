@extends('layouts.main')

@section('container')
<h1 class="text-center my-3">Form Toko</h1>
    <a href="{{ route('toko.create') }}" class="btn btn-md btn-success mb-3">Tambah TOKO</a>
    <a href="/" class="btn btn-md btn-dark mb-3">Kembali</a>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">KODE TOKO</th>
            <th scope="col">NAMA</th>
            <th scope="col">ALAMAT</th>
            <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tokos as $toko)
            <tr>
                <td>{{ $toko->kode_toko }}</td>
                <td>{{ $toko->nama }}</td>
                <td>{{ $toko->alamat }}</td>
                <td class="text-center">
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('toko.destroy', $toko->id) }}" method="POST">
                        <a href="{{ route('toko.edit', $toko->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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