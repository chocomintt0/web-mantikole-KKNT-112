@extends('mantikole.layout.app')

@section('content')
<section class="py-12 px-4">
  <div class="max-w-4xl mx-auto space-y-6">
    <h1 class="text-3xl font-bold text-blue-700">{{ $berita->judul }}</h1>
    <p class="text-gray-500">{{ $berita->published_at ? $berita->published_at->format('d M Y H:i') : '—' }}</p>

    @if($berita->gambar_url)
      <img src="{{ $berita->gambar_url }}" class="w-full max-h-[420px] object-cover rounded-xl" alt="gambar">
    @endif

    <article class="prose max-w-none">{!! nl2br(e($berita->isi)) !!}</article>
    <!-- <a href="{{ url()->previous() }}" class="inline-block mt-6 text-blue-600 hover:underline">← Kembali</a> -->
    <a href="{{ route('layanan.index') }}" class="inline-block mt-6 text-blue-600 hover:underline">
  ← Kembali
    </a>

  </div>
</section>
@endsection
