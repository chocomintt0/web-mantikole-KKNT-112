@extends('mantikole.layout.admin')

@section('content')
<section class="py-12 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-blue-700">Kelola Pengumuman</h1>
            <a href="{{ route('admin-layanan.create') }}"
               class="bg-blue-600 text-white px-5 py-3 rounded-lg font-medium hover:bg-blue-700">+ Tambah Pengumuman</a>
        </div>

        @if (session('success'))
            <div class="mb-6 p-4 rounded-lg bg-green-50 border border-green-200 text-green-800">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-2xl shadow overflow-hidden">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="text-left px-6 py-3">Nama Pengumuman</th>
                        <th class="text-left px-6 py-3">Deskripsi</th>
                        <th class="text-left px-6 py-3">Status</th>
                        <th class="text-left px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($layanans as $l)
                        <tr class="border-t">
                            <td class="px-6 py-4 font-semibold text-gray-800">{{ $l->nama }}</td>
                            <td class="px-6 py-4 text-gray-600">
                                <div class="text-sm line-clamp-1">{{ $l->deskripsi }}</div>
                            </td>
                            <td class="px-6 py-4">
                                @if ($l->status === 'aktif')
                                    <span class="text-green-600 font-medium">Aktif</span>
                                @else
                                    <span class="text-red-600 font-medium">Nonaktif</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex gap-3">
                                    <a href="{{ route('admin-layanan.show', $l) }}" class="text-blue-600 hover:underline">Lihat</a>
                                    <a href="{{ route('admin-layanan.edit', $l) }}" class="text-amber-600 hover:underline">Edit</a>
                                    <form action="{{ route('admin-layanan.destroy', $l) }}" method="POST" onsubmit="return confirm('Hapus layanan ini?')" class="inline">
                                        @csrf @method('DELETE')
                                        <button class="text-red-600 hover:underline">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-6 text-center text-gray-500">Belum ada layanan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $layanans->links() }}
        </div>
    </div>
</section>
@endsection