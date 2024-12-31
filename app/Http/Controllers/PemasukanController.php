<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use Illuminate\Http\Request;

class PemasukanController extends Controller
{
    //
    public function index(){
        return Pemasukan::all();
    }

    public function store(Request $request){
        $request->validate([
            'id_barang' => 'required|exists:barangs,id',
            'id_karyawan' => 'required|exists:karyawans,id',
            'tanggal' => 'required|date',
            'jumlah' => 'required|integer',
            'total_harga' => 'required|numeric',
        ]);

        $pemasukan = Pemasukan::create($request->all());

        return response()->json($pemasukan, 201);
    }

    public function show($id){
        return Pemasukan::findOrFail($id);
    }

    public function update(Request $request,$id){
        $pemasukan = Pemasukan::findOrFail($id);
        $pemasukan->update($request->all());

        return response()->json($pemasukan,201);
    }

    public function destroy($id){
        Pemasukan::destroy($id);
        return response()->json(null,204);
    }
}
