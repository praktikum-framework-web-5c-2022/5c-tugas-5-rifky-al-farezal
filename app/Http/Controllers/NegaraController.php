<?php

namespace App\Http\Controllers;

use App\Models\negara;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NegaraController extends Controller
{
    public function index()
    {
        $negaras = Negara::get();
        return view('negara.index', ['negaras' => $negaras]);
    }

    public function create()
    {
        return view('negara.create');
    }

    public function store(Request $request)
    {
        $validatenegara = $request->validate([
            'nama_negara' => 'required|min:3',
            'lokasi' => 'required|min:1'
        ]);
        $ibukota = $request->validate([
            'kode_ibukota' => 'required|numeric',
            'nama_ibukota' => 'required|min:3',
        ]);

        $negara = Negara::create($validatenegara);
        $negara->ibukota()->create($ibukota);
        return redirect()->route('negara.index')->with('message', "Data negara {$validatenegara['nama_negara']} berhasil ditambahkan");
    }

    public function destroy(Negara $negara)
    {
        $negara->ibukota()->delete($negara->id);
        $negara->delete($negara->id);
        return redirect()->route('negara.index')->with('message', "Data negara $negara->nama_negara berhasil dihapus");
    }

    public function edit(Negara $negara)
    {
        return view('negara.edit', ['negara' => $negara]);
    }

    public function update(Request $request, Negara $negara)
    {
        $validatenegara = $request->validate([
            'nama_negara' => 'required|min:3',
            'lokasi' => 'required|min:1'
        ]);

        $ibukota = $request->validate([
            'kode_ibukota' => 'required|numeric',
            'nama_ibukota' => 'required|min:3',
        ]);

        $negara1 = Negara::find($negara->id);
        $negara1->update($validatenegara);
        $negara1->ibukota()->update($ibukota);

        return redirect()->route('negara.index')->with('message', "Data negara $negara->nama_negara berhasil diubah");
    }
}
