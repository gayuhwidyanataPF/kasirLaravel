@extends('layouts.main')

@section('container')
<h1 class="text-center my-3">Form Pemasok</h1>
    <a href="{{ route('pemasok.create') }}" class="btn btn-md btn-success mb-3">Tambah Pemasok</a>
    <a href="/" class="btn btn-md btn-dark mb-3">Kembali</a>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">KODE BARANG</th>
            <th scope="col">NAMA</th>
            <th scope="col">ALAMAT</th>
            <th scope="col">NO TELEPON</th>
            <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pemasok as $pmasok)
            <tr>
                <td>{{ $pmasok->kode_pemasok }}</td>
                <td>{{ $pmasok->nama }}</td>
                <td>{{ $pmasok->alamat }}</td>
                <td>{{ $pmasok->no_telp }}</td>
                <td class="text-center">
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pemasok.destroy', $pmasok->id) }}" method="POST">
                        <a href="{{ route('pemasok.edit', $pmasok->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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