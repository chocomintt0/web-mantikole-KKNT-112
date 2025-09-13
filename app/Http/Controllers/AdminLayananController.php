<?php

namespace App\Http\Controllers;

use App\Models\AdminLayanan;
use App\Http\Requests\StoreAdminLayananRequest;
use App\Http\Requests\UpdateAdminLayananRequest;

class AdminLayananController extends Controller
{
    public function index()
    {
        // urutkan berdasarkan created_at saja, karena published_at tidak ada di tabel
        $layanans = AdminLayanan::latest('created_at')->paginate(10);
        return view('mantikole.pages.admin-layanan.index', compact('layanans'));
    }

    public function create()
    {
        return view('mantikole.pages.admin-layanan.create');
    }

    public function store(StoreAdminLayananRequest $request)
    {
        AdminLayanan::create($request->validated());
        return redirect()->route('admin-layanan.index')->with('success', 'Layanan berhasil ditambahkan');
    }

    public function show(AdminLayanan $adminLayanan)
    {
        return view('mantikole.pages.admin-layanan.show', compact('adminLayanan'));
    }

    public function edit(AdminLayanan $adminLayanan)
    {
        return view('mantikole.pages.admin-layanan.edit', compact('adminLayanan'));
    }

    public function update(UpdateAdminLayananRequest $request, AdminLayanan $adminLayanan)
    {
        $adminLayanan->update($request->validated());
        return redirect()->route('admin-layanan.index')->with('success', 'Layanan berhasil diperbarui');
    }

    public function destroy(AdminLayanan $adminLayanan)
    {
        $adminLayanan->delete();
        return redirect()->route('admin-layanan.index')->with('success', 'Layanan berhasil dihapus');
    }
}
