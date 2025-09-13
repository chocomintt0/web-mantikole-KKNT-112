<?php

namespace App\Http\Controllers;

use App\Models\AdminBerita;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreAdminBeritaRequest;   // ← ganti
use App\Http\Requests\UpdateAdminBeritaRequest;  // ← ganti

class AdminBeritaController extends Controller
{
    public function index()
    {
        $beritas = AdminBerita::latest('published_at')->latest('created_at')->paginate(10);
        return view('mantikole.pages.admin-berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('mantikole.pages.admin-berita.create');
    }

    public function store(StoreAdminBeritaRequest $request) 
    {
        $data = $request->validated();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('berita','public');
        }

        AdminBerita::create($data);

        return redirect()->route('admin-berita.index')->with('success','Berita berhasil ditambahkan.');
    }

    public function show(AdminBerita $berita)
    {
        return view('mantikole.pages.admin-berita.show', compact('berita'));
    }

    public function edit(AdminBerita $berita)
    {
        return view('mantikole.pages.admin-berita.edit', compact('berita'));
    }

    public function update(UpdateAdminBeritaRequest $request, AdminBerita $berita) // ← ganti
    {
        $data = $request->validated();

        if ($request->hasFile('gambar')) {
            if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
                Storage::disk('public')->delete($berita->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('berita','public');
        }

        $berita->update($data);

        return redirect()->route('admin-berita.index')->with('success','Berita berhasil diperbarui.');
    }

    public function destroy(AdminBerita $berita)
    {
        if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
            Storage::disk('public')->delete($berita->gambar);
        }
        $berita->delete();

        return redirect()->route('admin-berita.index')->with('success','Berita berhasil dihapus.');
    }

    // app/Http/Controllers/AdminBeritaController.php
    public function publicShow(string $slug)
    {
        $berita = \App\Models\AdminBerita::where('slug', $slug)->firstOrFail();
        return view('mantikole.pages.admin-berita.show', compact('berita'));
    }

}

