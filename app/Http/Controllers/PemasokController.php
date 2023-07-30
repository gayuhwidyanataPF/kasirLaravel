<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasok;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PemasokController extends Controller
{
    public function index(): View
    {
        $pemasok = Pemasok::oldest()->paginate();

        return view('pemasok.pemasok', compact('pemasok'), [
            'title' => "Form Pemasok",
        ]);
    }

    public function create(): View
    {
        return view('pemasok.create', [
            'title' => "Form Tambah Pemasok",
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'kode_pemasok' => 'required|min:7',
            'nama' => 'required|min:5',
            'alamat' => 'required|min:5',
            'no_telp' => 'required|min:12',
        ]);

        Pemasok::create([
            'kode_pemasok' => $request->kode_pemasok,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp
        ]);

        //redirect to index
        return redirect()->route('pemasok.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $pmasok = Pemasok::findOrFail($id);

        return view('pemasok.edit', compact('pmasok'), [
            'title' => 'Form Edit Pemasok'
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama' => 'required|min:5',
            'alamat' => 'required|min:5',
            'no_telp' => 'required|min:12',
        ]);

        //get post by ID
        $post = Pemasok::findOrFail($id);

        $post->update([
            'nama'     => $request->nama,
            'alamat'   => $request->alamat,
            'no_telp'   => $request->no_telp
        ]);

        //redirect to index
        return redirect()->route('pemasok.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Pemasok::findOrFail($id);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('pemasok.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
