<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class GudangController extends Controller
{
    public function index(): View
    {
        $gudangs = Gudang::oldest()->paginate();

        return view('gudang.gudang', compact('gudangs'), [
            'title' => "Form Gudang",
        ]);
    }

    public function create(): View
    {
        return view('gudang.create', [
            'title' => "Form Tambah gudang",
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'kode_gudang' => 'required|min:7',
            'nama' => 'required|min:5',
            'alamat' => 'required|min:5',
        ]);

        Gudang::create([
            'kode_gudang' => $request->kode_gudang,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);

        //redirect to index
        return redirect()->route('gudang.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $gudang = Gudang::findOrFail($id);

        return view('gudang.edit', compact('gudang'), [
            'title' => 'Form Edit Gudang'
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama' => 'required|min:5',
            'alamat' => 'required|min:5',
        ]);

        //get post by ID
        $post = Gudang::findOrFail($id);

        $post->update([
            'nama'     => $request->nama,
            'alamat'   => $request->alamat
        ]);

        //redirect to index
        return redirect()->route('gudang.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Gudang::findOrFail($id);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('gudang.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
