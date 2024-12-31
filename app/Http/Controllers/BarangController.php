<?php

namespace App\Http\Controllers;

USE App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function index(){
        return Barang::all();
    }

    public function store(Request $request){
        $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required|integer',
            'stok' => 'required|numeric',
        ]);

        $barang = Barang::create($request->all());

        return response()->json($barang, 201);
    }

    public function show($id){
        return Barang::findOrFail($id);
    }

    public function update(Request $request,$id){
        $barang = Barang::findOrFail($id);
        $barang->update($request->all());

        return response()->json($barang,201);
    }

    public function destroy($id){
        Barang::destroy($id);
        return response()->json(null,204);
    }
}
