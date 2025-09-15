@extends('mantikole.layout.admin')

@section('content')
<section class="py-12 px-4">
    <div class="max-w-4xl mx-auto space-y-6">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold text-blue-700">{{ $berita->judul }}</h1>
            <div class="flex gap-3">
                <a href="{{ route('admin-berita.edit', $berita) }}"
                   class="px-4 py-2 rounded-lg border hover:bg-gray-50">Edit</a>

                <form action="{{ route('admin-berita.destroy', $berita) }}" method="POST"
                      onsubmit="return confirm('Hapus berita ini?')">
                    @csrf @method('DELETE')
                    <button class="px-4 py-2 rounded-lg border text-red-600 hover:bg-red-50">Hapus</button>
                </form>
            </div>
        </div>

        <div class="text-gray-500">
            Dipublikasikan: {{ $berita->published_at ? $berita->published_at->format('d M Y H:i') : '—' }}
        </div>

        @if($berita->gambar_url)
            <img src="{{ $berita->gambar_url }}" class="w-full max-h-[420px] object-cover rounded-xl" alt="gambar">
        @endif

        <article class="prose max-w-none">
            {!! nl2br(e($berita->isi)) !!}
        </article>

        <div class="pt-6">
            <a href="{{ route('admin-berita.index') }}"
               class="inline-block px-5 py-3 rounded-lg bg-gray-100 text-gray-700 font-medium shadow hover:bg-gray-200 hover:shadow-md transition">
               ← Kembali
            </a>
        </div>
</section>
@endsection