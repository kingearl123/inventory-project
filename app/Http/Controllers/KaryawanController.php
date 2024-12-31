<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    //
    public function index(){
        return Karyawan::all();
    }

    public function store(Request $request){
        $request->validate([
            'nama_karyawan' => 'required',
            'alamat' => 'required',
            'telepon' => 'required|numeric',
            'id_user' => 'required|exists:users,id',
        ]);

        $karyawan = Karyawan::create($request->all());

        return response()->json($karyawan, 201);
    }

    public function show($id){
        return Karyawan::findOrFail($id);
    }

    public function update(Request $request,$id){
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->update($request->all());

        return response()->json($karyawan,201);
    }

    public function destroy($id){
        Karyawan::destroy($id);
        return response()->json(null,204);
    }
}
