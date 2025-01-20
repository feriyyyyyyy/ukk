<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use App\Models\TracerKuliah;
use App\Models\TracerKerja;

class DataController extends Controller
{
    // ================= ALUMNI ====================
    public function editAlumni($id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('alumni.profile.alumni', compact('alumni'));
    }

    public function editKuliah($id)
    {
        $tracerKuliah = TracerKuliah::findOrFail($id);
        return view('alumni.profile.kuliah', compact('tracerKuliah'));
    }

    public function editKerja($id)
    {
        $tracerKerja = TracerKerja::findOrFail($id);
        return view('alumni.profile.kerja', compact('tracerKerja'));
    }
    public function updateAlumni(Request $request, $id)
    {
        $request->validate([
            'nisn' => 'required|string|max:20',
            'nik' => 'required|string|max:20',
            'nama_depan' => 'required|string|max:50',
            'nama_belakang' => 'nullable|string|max:50',
            'jenis_kelamin' => 'required|in:L,P',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required|string|max:50',
            'no_hp' => 'required|string|max:15',
            // 'email' => 'required|email|max:50',
        ]);

        $alumni = Alumni::findOrFail($id);
        $alumni->update($request->all());

        return redirect()->route('alumni.profile.index', $id)
            ->with('success', 'Data alumni berhasil diperbarui!');
    }

    public function updateKuliah(Request $request, $id)
    {
        $request->validate([
            'tracer_kuliah_kampus' => 'required|string|max:45',
            'tracer_kuliah_status' => 'required|string|max:45',
            'tracer_kuliah_jenjang' => 'required|string|max:45',
            'tracer_kuliah_jurusan' => 'required|string|max:45',
            'tracer_kuliah_linier' => 'required|string|max:45',
            'tracer_kuliah_alamat' => 'nullable|string|max:45',
        ]);

        $tracerKuliah = TracerKuliah::findOrFail($id);
        $tracerKuliah->update($request->all());

        return redirect()->route('alumni.profile.index', $id)
            ->with('success', 'Data kuliah berhasil diperbarui!');
    }

    public function updateKerja(Request $request, $id)
    {
        $request->validate([
            'tracer_kerja_pekerjaan' => 'required|string|max:50',
            'tracer_kerja_nama' => 'required|string|max:50',
            'tracer_kerja_jabatan' => 'required|string|max:50',
            'tracer_kerja_status' => 'required|string|max:50',
            'tracer_kerja_lokasi' => 'required|string|max:50',
            'tracer_kerja_alamat' => 'nullable|string|max:50',
            'tracer_kerja_tgl_mulai' => 'required|date',
            'tracer_kerja_gaji' => 'nullable|string|max:50',
        ]);

        $tracerKerja = TracerKerja::findOrFail($id);
        $tracerKerja->update($request->all());

        return redirect()->route('alumni.profile.index', $id)
            ->with('success', 'Data kerja berhasil diperbarui!');
    }

}
