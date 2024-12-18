<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        return Absensi::with('karyawan')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'karyawan_id' => 'required|exists:karyawans,id',
            'tanggal' => 'required|date',
            'waktu_masuk' => 'required|date_format:H:i',
            'waktu_keluar' => 'nullable|date_format:H:i',
            'keterangan' => 'nullable|string',
        ]);

        return Absensi::create($request->all());
    }

    public function show(Absensi $absensi)
    {
        return $absensi->load('karyawan');
    }

    public function update(Request $request, Absensi $absensi)
    {
        $absensi->update($request->all());
        return $absensi;
    }

    public function destroy(Absensi $absensi)
    {
        $absensi->delete();
        return response()->json(null, 204);
    }
}
