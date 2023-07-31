<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\JenisBarang;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BarangController extends Controller
{
    public function index(): View
    {
        $barangs = Barang::oldest()->paginate();

        return view('barang.barang', compact('barangs'), [
            'title' => "Form Barang",
        ]);
    }

    public function create(): View
    {
        $jenisBarangs = JenisBarang::all();
        return view('barang.create', compact('jenisBarangs'), [
            'title' => "Form Tambah Barang"
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'kode_jenis' => 'required',
            'kode_barang' => 'required|min:5',
            'nama' => 'required|min:3',
            'harga' => 'required|min:5',
        ]);

        Barang::create([
            'kode_jenis' => $request->kode_jenis,
            'kode_barang' => $request->kode_barang,
            'nama' => $request->nama,
            'harga' => $request->harga
        ]);

        //redirect to index
        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $barang = Barang::findOrFail($id);
        $jenisBarangs = JenisBarang::all();
        return view('barang.edit', compact('barang', 'jenisBarangs'), [
            'title' => 'Form Edit Barang'
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'kode_jenis' => 'required',
            'nama' => 'required|min:3',
            'harga' => 'required|min:5',
        ]);

        //get post by ID
        $post = Barang::findOrFail($id);

        $post->update([
            'kode_jenis' => $request->kode_jenis,
            'nama' => $request->nama,
            'harga' => $request->harga
        ]);

        //redirect to index
        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Barang::findOrFail($id);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
