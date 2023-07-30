@extends('layouts.main')

@section('container')
<h1 class="text-center my-3">Form Gudang</h1>
    <a href="{{ route('gudang.create') }}" class="btn btn-md btn-success mb-3">TAMBAH GUDANG</a>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">KODE GUDANG</th>
            <th scope="col">NAMA</th>
            <th scope="col">ALAMAT</th>
            <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($gudangs as $gudang)
            <tr>
                <td>{{ $gudang->kode_gudang }}</td>
                <td>{{ $gudang->nama }}</td>
                <td>{{ $gudang->alamat }}</td>
                <td class="text-center">
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('gudang.destroy', $gudang->id) }}" method="POST">
                        <a href="{{ route('gudang.edit', $gudang->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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