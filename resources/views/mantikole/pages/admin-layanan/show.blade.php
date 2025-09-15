@extends('mantikole.layout.admin')

@section('content')
<section class="py-12 px-4">
    <div class="max-w-4xl mx-auto space-y-6">
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold text-blue-700">{{ $adminLayanan->nama }}</h1>
            <div class="flex gap-3">
                <a href="{{ route('admin-layanan.edit', $adminLayanan) }}"
                   class="px-4 py-2 rounded-lg border hover:bg-gray-50">Edit</a>

                <form action="{{ route('admin-layanan.destroy', $adminLayanan) }}" method="POST"
                      onsubmit="return confirm('Hapus Layanan ini?')">
                    @csrf @method('DELETE')
                    <button class="px-4 py-2 rounded-lg border text-red-600 hover:bg-red-50">Hapus</button>
                </form>
            </div>
        </div>

        <article class="prose max-w-none">
            {!! nl2br(e($adminLayanan->deskripsi)) !!}
        </article>

        <div class="pt-6">
            <a href="{{ route('admin-layanan.index') }}"
               class="inline-block px-5 py-3 rounded-lg bg-gray-100 text-gray-700 font-medium shadow hover:bg-gray-200 hover:shadow-md transition">
               ← Kembali
            </a>
        </div>
    </div>
</section>
@endsection