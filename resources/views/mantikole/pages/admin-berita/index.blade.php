@extends('mantikole.layout.admin')

@section('content')
<section class="py-12 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-blue-700">Kelola Berita</h1>
            <a href="{{ route('admin-berita.create') }}"
               class="bg-blue-600 text-white px-5 py-3 rounded-lg font-medium hover:bg-blue-700">+ Tambah Berita</a>
        </div>

        @if(session('success'))
            <div class="mb-6 p-4 rounded-lg bg-green-50 border border-green-200 text-green-800">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-2xl shadow overflow-hidden">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="text-left px-6 py-3">Judul</th>
                        <th class="text-left px-6 py-3">Slug</th>
                        <th class="text-left px-6 py-3">Terbit</th>
                        <th class="text-left px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($beritas as $b)
                    <tr class="border-t">
                        <td class="px-6 py-4">
                            <div class="font-semibold text-gray-800">{{ $b->judul }}</div>
                            <div class="text-sm text-gray-500 line-clamp-1">{{ $b->excerpt }}</div>
                        </td>
                        <td class="px-6 py-4 text-gray-600">{{ $b->slug }}</td>
                        <td class="px-6 py-4 text-gray-600">
                            {{ $b->published_at ? $b->published_at->format('d M Y H:i') : '—' }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-3">
                                <a href="{{ route('admin-berita.show', $b) }}" class="text-blue-600 hover:underline">Lihat</a>
                                <a href="{{ route('admin-berita.edit', $b) }}" class="text-amber-600 hover:underline">Edit</a>
                                <form action="{{ route('admin-berita.destroy', $b) }}" method="POST"
                                      onsubmit="return confirm('Hapus berita ini?')" class="inline">
                                    @csrf @method('DELETE')
                                    <button class="text-red-600 hover:underline">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-6 py-6 text-center text-gray-500">Belum ada berita.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $beritas->links() }}
        </div>
    </div>
</section>
@endsection