<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        return Karyawan::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:100',
            'posisi' => 'required|string|max:50',
            'nomor_telepon' => 'required|string|max:15|unique:karyawans',
        ]);

        return Karyawan::create($request->all());
    }

    public function show(Karyawan $karyawan)
    {
        return $karyawan;
    }

    public function update(Request $request, Karyawan $karyawan)
    {
        $karyawan->update($request->all());
        return $karyawan;
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return response()->json(null, 204);
    }
}
