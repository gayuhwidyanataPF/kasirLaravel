<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class TokoController extends Controller
{
    public function index(): View
    {
        $tokos = Toko::oldest()->paginate();

        return view('toko.toko', compact('tokos'), [
            'title' => "Form Toko",
        ]);
    }

    public function create(): View
    {
        return view('toko.create', [
            'title' => "Form Tambah Toko",
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'kode_toko' => 'required|min:5',
            'nama' => 'required|min:5',
            'alamat' => 'required|min:5'
        ]);

        Toko::create([
            'kode_toko' => $request->kode_toko,
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        //redirect to index
        return redirect()->route('toko.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $toko = Toko::findOrFail($id);

        return view('toko.edit', compact('toko'), [
            'title' => 'Form Edit Toko'
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama' => 'required|min:5',
            'alamat' => 'required|min:5'
        ]);

        //get post by ID
        $post = Toko::findOrFail($id);

        $post->update([
            'nama'     => $request->nama,
            'alamat'   => $request->alamat
        ]);

        //redirect to index
        return redirect()->route('toko.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Toko::findOrFail($id);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('toko.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
