<?php

namespace App\Http\Controllers;

use App\Models\AdminBerita;
use App\Models\AdminLayanan;
use Illuminate\Support\Str;

class LayananDesaController extends Controller
{
    public function index()
    {
        // Ambil berita terbaru
        $berita = AdminBerita::latest('published_at')
            ->latest('created_at')
            ->take(6)
            ->get()
            ->map(function ($b) {
                return [
                    'judul'  => $b->judul,
                    'isi'    => $b->excerpt ?? Str::limit(strip_tags($b->isi), 160),
                    'gambar' => $b->gambar_url,
                    'slug'   => $b->slug,
                ];
            });

        // Ambil pengumuman dari admin_layanan (yang statusnya aktif)
        $pengumuman = AdminLayanan::where('status', 'aktif')
            ->latest('created_at')
            ->take(6)
            ->get()
            ->map(function ($p) {
                return [
                    'judul'   => $p->nama,
                    'isi'     => $p->deskripsi,
                    'tanggal' => $p->created_at->format('Y-m-d'),
                ];
            });

        return view('mantikole.pages.layanan.index', compact('berita', 'pengumuman'));
    }
}
