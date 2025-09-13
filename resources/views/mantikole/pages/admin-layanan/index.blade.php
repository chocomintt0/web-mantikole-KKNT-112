@extends('mantikole.layout.app')

@section('content')
    <section class="py-12 px-4">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="flex items-center justify-between mb-8">
                <h1 class="text-3xl font-bold text-blue-700">Kelola Layanan</h1>
                <a href="{{ route('admin-layanan.create') }}"
                    class="bg-blue-600 text-white px-5 py-2.5 rounded-xl shadow hover:bg-blue-700 transition">
                    <i class="fa-solid fa-plus mr-2"></i> Tambah Layanan
                </a>
            </div>

            @if (session('success'))
                <div class="mb-6 p-4 rounded-lg bg-green-50 border border-green-200 text-green-800 shadow-sm">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Table -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <table class="min-w-full table-auto border-collapse">
                    <thead class="bg-gradient-to-r from-blue-100 to-blue-200">
                        <tr class="text-left">
                            <th class="px-6 py-4 w-[20%] text-gray-700 font-semibold border-b border-gray-200">Nama Layanan
                            </th>
                            <th class="px-6 py-4 w-[55%] text-gray-700 font-semibold border-b border-gray-200">Deskripsi
                            </th>
                            <th class="px-6 py-4 w-[15%] text-gray-700 font-semibold text-center border-b border-gray-200">
                                Status</th>
                            <th class="px-6 py-4 w-[10%] text-gray-700 font-semibold text-center border-b border-gray-200">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($layanans as $l)
                            <tr class="even:bg-blue-50 border-b border-gray-100 hover:bg-blue-100 transition">
                                <!-- Nama Layanan -->
                                <td class="px-6 py-5 font-medium text-gray-800 align-middle">
                                    {{ $l->nama }}
                                </td>

                                <!-- Deskripsi -->
                                <td class="px-6 py-5 text-gray-600 align-middle">
                                    <p class="text-sm leading-relaxed line-clamp-3">
                                        {{ $l->deskripsi }}
                                    </p>
                                    @if (Str::length($l->deskripsi) > 120)
                                        <button onclick="showDeskripsi(`{{ $l->deskripsi }}`)"
                                            class="text-blue-600 text-sm font-medium hover:underline">
                                            Baca selengkapnya
                                        </button>
                                    @endif
                                </td>

                                <!-- Status -->
                                <td class="px-6 py-5 text-center align-middle">
                                    @if ($l->status === 'aktif')
                                        <span
                                            class="bg-green-100 text-green-700 px-3 py-1.5 rounded-full text-sm font-medium shadow-sm inline-flex items-center gap-1">
                                            <i class="fa-solid fa-circle-check"></i> Aktif
                                        </span>
                                    @else
                                        <span
                                            class="bg-red-100 text-red-700 px-3 py-1.5 rounded-full text-sm font-medium shadow-sm inline-flex items-center gap-1">
                                            <i class="fa-solid fa-circle-xmark"></i> Nonaktif
                                        </span>
                                    @endif
                                </td>

                                <!-- Aksi -->
                                <td class="px-6 py-4 text-center align-middle">
                                    <div class="flex justify-center items-center gap-2">
                                        <!-- Lihat -->
                                        <a href="{{ route('admin-layanan.show', $l) }}" title="Lihat"
                                            class="flex items-center justify-center w-8 h-8 rounded-lg bg-blue-500 hover:bg-blue-600 shadow-sm transition hover:scale-105">
                                            <img src="{{ asset('images/icons/eye.png') }}" alt="Lihat"
                                                class="w-4 h-4 invert brightness-0">
                                        </a>

                                        <!-- Edit -->
                                        <a href="{{ route('admin-layanan.edit', $l) }}" title="Edit"
                                            class="flex items-center justify-center w-8 h-8 rounded-lg bg-yellow-400 hover:bg-yellow-500 shadow-sm transition hover:scale-105">
                                            <img src="{{ asset('images/icons/pencil.png') }}" alt="Edit"
                                                class="w-4 h-4">
                                        </a>

                                        <!-- Hapus -->
                                        <form action="{{ route('admin-layanan.destroy', $l) }}" method="POST"
                                            onsubmit="return confirm('Hapus layanan ini?')" class="inline">
                                            @csrf @method('DELETE')
                                            <button type="submit" title="Hapus"
                                                class="flex items-center justify-center w-8 h-8 rounded-lg bg-red-500 hover:bg-red-600 shadow-sm transition hover:scale-105">
                                                <img src="{{ asset('images/icons/trash-bin.png') }}" alt="Hapus"
                                                    class="w-4 h-4 invert brightness-0">
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-8 text-center text-gray-500">
                                    Belum ada layanan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="mt-6">
                {{ $layanans->links() }}
            </div>
        </div>
    </section>

    <!-- Modal Deskripsi -->
    <div id="deskripsiModal"
        class="fixed inset-0 bg-black/50 hidden z-50 backdrop-blur-sm opacity-0 transition-opacity duration-300 items-center justify-center">
        <div
            class="bg-white rounded-2xl max-w-2xl w-11/12 max-h-[80vh] p-6 shadow-xl relative flex flex-col transform scale-95 transition-transform duration-300">
            <button onclick="closeDeskripsi()"
                class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-2xl">&times;</button>
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Deskripsi Layanan</h2>
            <div id="deskripsiContent"
                class="text-gray-700 leading-relaxed overflow-y-auto pr-2 scrollbar-thin scrollbar-thumb-slate-300 scrollbar-thumb-rounded hover:scrollbar-thumb-slate-400">
            </div>
        </div>
    </div>

    <script>
        function showDeskripsi(text) {
            const modal = document.getElementById('deskripsiModal');
            const modalBox = modal.querySelector('div');
            const content = document.getElementById('deskripsiContent');

            content.innerText = text;
            modal.classList.add('flex');
            modal.classList.remove('hidden');

            setTimeout(() => {
                modal.classList.add('opacity-100');
                modalBox.classList.remove('scale-95');
                modalBox.classList.add('scale-100');
            }, 10);
        }

        function closeDeskripsi() {
            const modal = document.getElementById('deskripsiModal');
            const modalBox = modal.querySelector('div');

            modal.classList.remove('opacity-100');
            modalBox.classList.remove('scale-100');
            modalBox.classList.add('scale-95');

            setTimeout(() => {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
            }, 300);
        }
    </script>
@endsection
