<?php

namespace App\Http\Controllers;

use App\Models\SiswaBerprestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $query = Auth::user()->siswaBerprestasi()->orderBy('created_at', 'desc');
        
        if ($request->filled('search')) {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }
        

        if ($request->filled('filter_tingkat')) {
            $query->where('tingkat', $request->filter_tingkat);
        }

        $siswas = $query->paginate(10)->withQueryString();

        return view('dashboard', compact('siswas'));
    }

    public function home(Request $request)
{
    $query = SiswaBerprestasi::query();

    if ($request->filled('search')) {
        $query->where('nama', 'like', '%' . $request->search . '%');
    }

    if ($request->filled('filter_tingkat')) {
        $query->where('tingkat', $request->filter_tingkat);
    }

    $siswas = $query->paginate(10)->withQueryString();

    return view('welcome', compact('siswas'));
}


    public function create()
    {
        return view('siswa.tambah_siswa');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nis' => 'required|string|max:50',
            'jenis_kelamin' => 'required|in:L,P',
            'jurusan' => 'required|string|max:255',
            'tahun' => 'required|integer|min:2000|max:2099',
            'prestasi' => 'required|string|max:255',
            'pencapaian' => 'required|string|max:100',
            'tingkat' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'sertifikat' => 'nullable|file|mimes:pdf|max:2048',
            'foto' => 'nullable|image|max:2048',
        ]);

        $fotoPath = $request->file('foto') 
            ? $request->file('foto')->store('foto', 'public') 
            : null;

        $sertifikatPath = $request->file('sertifikat') 
            ? $request->file('sertifikat')->store('sertifikat', 'public') 
            : null;


        Auth::user()->siswaBerprestasi()->create([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jurusan' => $request->jurusan,
            'tahun' => $request->tahun,
            'prestasi' => $request->prestasi,
            'pencapaian' => $request->pencapaian,
            'tingkat' => $request->tingkat,
            'deskripsi' => $request->deskripsi,
            'sertifikat' => $sertifikatPath,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('dashboard')->with('success', 'Data siswa berhasil ditambahkan!');
    }

    public function edit(string $id)
    {
        $siswa = SiswaBerprestasi::findOrFail($id);

        if ($siswa->user_id !== Auth::id()) {
            abort(403);
        }

        return view('siswa.edit_siswa', compact('siswa'));
    }

    public function update(Request $request, string $id)
    {
        $siswa = SiswaBerprestasi::findOrFail($id);

        abort_if($siswa->user_id !== Auth::id(), 403);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'tahun' => 'required|integer',
            'prestasi' => 'required|string|max:255',
            'tingkat' => 'required|string|max:255',
            'sertifikat' => 'nullable|file|mimes:pdf',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('sertifikat')) {
            if ($siswa->sertifikat) {
                Storage::disk('public')->delete($siswa->sertifikat);
            }
            $validated['sertifikat'] = $request->file('sertifikat')->store('sertifikat', 'public');
        }

        if ($request->hasFile('foto')) {
            if ($siswa->foto) {
                Storage::disk('public')->delete($siswa->foto);
            }
            $validated['foto'] = $request->file('foto')->store('foto', 'public');
        }

        $siswa->update($validated);

        return redirect()->route('dashboard')->with('success', 'Data siswa berhasil diperbarui!');
    }


    public function destroy(string $id)
    {
        $siswa = SiswaBerprestasi::findOrFail($id);

        if ($siswa->user_id !== Auth::id()) {
            abort(403);
        }

        if ($siswa->sertifikat) {
            Storage::disk('public')->delete($siswa->sertifikat);
        }
        if ($siswa->foto) {
            Storage::disk('public')->delete($siswa->foto);
        }

        $siswa->delete();

        return redirect()->route('dashboard')->with('success', 'Data siswa berhasil dihapus!');
    }
}