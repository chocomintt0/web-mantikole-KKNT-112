@extends('mantikole.layout.app')

@section('content')
<section class="py-12 px-4">
    <div class="max-w-4xl mx-auto space-y-6">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold text-blue-700">{{ $adminLayanan->nama }}</h1>
            <div class="flex gap-3">
                <a href="{{ route('admin-layanan.edit', $adminLayanan) }}" class="px-4 py-2 rounded-lg border hover:bg-gray-50">Edit</a>
                <form action="{{ route('admin-layanan.destroy', $adminLayanan) }}" method="POST" onsubmit="return confirm('Hapus Layanan ini?')">
                    @csrf @method('DELETE')
                    <button class="px-4 py-2 rounded-lg border text-red-600 hover:bg-red-50">Hapus</button>
                </form>
            </div>
        </div>

        <!-- <div class="text-gray-500">
            Dipublikasikan: {{ $berita->published_at ? $berita->published_at->format('d M Y H:i') : '—' }}
        </div> -->

        <!-- @if($berita->gambar_url)
            <img src="{{ $berita->gambar_url }}" class="w-full max-h-[420px] object-cover rounded-xl" alt="gambar">
        @endif -->

        <article class="prose max-w-none">
            {!! nl2br(e($adminLayanan->deskripsi)) !!}
        </article>
    </div>
</section>
@endsection
