<?php

namespace App\Http\Controllers;

use App\Models\AdminBerita;

class PublicBeritaController extends Controller
{
    public function show(string $slug)
    {
        $berita = AdminBerita::where('slug', $slug)->firstOrFail();
        return view('mantikole.pages.berita.show', compact('berita')); // <-- view publik
    }
}
