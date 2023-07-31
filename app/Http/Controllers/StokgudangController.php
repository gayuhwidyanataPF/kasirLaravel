<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Gudang;
use App\Models\StokGudang;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class StokgudangController extends Controller
{
    public function index(): View
    {
        $stokGudangs = StokGudang::oldest()->paginate();

        return view('stokGudang.stokGudang', compact('stokGudangs'), [
            'title' => "Form Stok Gudang",
        ]);
    }

    public function create(): View
    {
        $barangs = Barang::all();
        $gudangs = Gudang::all();
        return view('stokGudang.create', compact('barangs', 'gudangs'), [
            'title' => "Form Tambah Stok Gudang"
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'id_barang' => 'required',
            'id_gudang' => 'required',
            'stok' => 'required|min:1',
        ]);

        StokGudang::create([
            'id_barang' => $request->id_barang,
            'id_gudang' => $request->id_gudang,
            'stok' => $request->stok
        ]);

        //redirect to index
        return redirect()->route('stokGudang.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $stokGudang = StokGudang::findOrFail($id);
        $barangs = Barang::all();
        $gudangs = Gudang::all();
        return view('stokGudang.edit', compact('stokGudang', 'barangs', 'gudangs'), [
            'title' => 'Form Edit Barang ke Gudang'
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            // 'id_barang' => 'required',
            'id_gudang' => 'required',
            'stok' => 'required|min:1',
        ]);

        //get post by ID
        $post = StokGudang::findOrFail($id);

        $post->update([
            // 'id_barang' => $request->id_barang,
            'id_gudang' => $request->id_gudang,
            'stok' => $request->stok
        ]);

        //redirect to index
        return redirect()->route('stokGudang.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = StokGudang::findOrFail($id);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('stokGudang.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
