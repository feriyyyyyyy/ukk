<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\TahunLulus;
use Illuminate\Http\Request;

class TahunLulusController extends Controller
{
    public function index()
    {
        $tahunLulus = TahunLulus::all();
        return view('admin.tahun-lulus.index', compact('tahunLulus'));
    }

    public function create()
    {
        return view('admin.tahun-lulus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tahun_lulus' => 'required|max:4',
            'keterangan' => 'nullable|max:50',
        ]);

        TahunLulus::create($request->all());
        return redirect()->route('tahun-lulus.index')->with('success', 'Tahun Lulus berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $tahunLulus = TahunLulus::findOrFail($id);
        return view('admin.tahun-lulus.edit', compact('tahunLulus'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tahun_lulus' => 'required|max:4',
            'keterangan' => 'nullable|max:50',
        ]);
    
        $tahunLulus = TahunLulus::findOrFail($id);
        $tahunLulus->update($request->all());
        return redirect()->route('tahun-lulus.index')->with('success', 'Tahun Lulus berhasil diperbarui.');
    }
    public function destroy($id)
    {
        // Mencari data berdasarkan id
        $tahunLulus = TahunLulus::find($id);
        
        // Mengecek apakah data ditemukan
        if ($tahunLulus) {
            // Menghapus data
            $tahunLulus->delete();
            // Redirect dengan pesan sukses
            return redirect()->route('tahun-lulus.index')->with('success', 'Data Tahun Lulus berhasil dihapus.');
        } else {
            // Jika data tidak ditemukan
            return redirect()->route('tahun-lulus.index')->with('error', 'Data tidak ditemukan.');
        }
    }
}
