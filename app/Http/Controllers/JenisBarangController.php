<?php

namespace App\Http\Controllers;

use App\Models\JenisBarang;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class JenisBarangController extends Controller
{
    public function index(): View
    {
        $jenisBarangs = JenisBarang::oldest()->paginate();

        return view('jenisBarang.jenisBarang', compact('jenisBarangs'), [
            'title' => "Form Jenis Barang",
        ]);
    }

    public function create(): View
    {
        return view('jenisBarang.create', [
            'title' => "Form Tambah Jenis Barang",
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'kode_jenis_barang' => 'required|min:7',
            'kategori_barang' => 'required|min:2'
        ]);

        JenisBarang::create([
            'kode_jenis_barang' => $request->kode_jenis_barang,
            'kategori_barang' => $request->kategori_barang
        ]);

        //redirect to index
        return redirect()->route('jenisBarang.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $jenisBarang = JenisBarang::findOrFail($id);

        return view('jenisBarang.edit', compact('jenisBarang'), [
            'title' => 'Form Edit Jenis Barang'
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'kategori_barang' => 'required|min:2',
        ]);

        //get post by ID
        $post = JenisBarang::findOrFail($id);

        $post->update([
            'kategori_barang'   => $request->kategori_barang
        ]);

        //redirect to index
        return redirect()->route('jenisBarang.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = JenisBarang::findOrFail($id);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('jenisBarang.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
