@extends('mantikole.layout.app')

@section('content')
    <section class="py-12 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-3xl font-bold text-blue-700">Kelola Berita</h1>
                <a href="{{ route('admin-berita.create') }}"
                    class="bg-blue-600 text-white px-5 py-3 rounded-lg font-medium hover:bg-blue-700">+ Tambah Berita</a>
            </div>

            @if (session('success'))
                <div class="mb-6 p-4 rounded-lg bg-green-50 border border-green-200 text-green-800">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white rounded-2xl shadow overflow-hidden">
                <table class="min-w-full table-fixed">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="w-1/6 px-6 py-3 text-left">Judul</th>
                            <th class="w-1/6 px-6 py-3 text-left">Slug</th>
                            {{-- <th class="w-1/4 px-6 py-3 text-left">Isi Berita</th>
                            <th class="w-1/4 px-6 py-3 text-left">Excerpt</th> --}}
                            <th class="w-1/6 px-6 py-3 text-left">Tanggal Terbit</th>
                            <th class="w-1/6 px-6 py-3 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($beritas as $b)
                            <tr class="border-t">
                                <td class="px-6 py-4 font-semibold text-gray-800 truncate">{{ $b->judul }}</td>
                                <td class="px-6 py-4 text-gray-600 truncate">{{ $b->slug }}</td>

                                {{-- Kolom Isi Berita --}}
                                {{-- <td class="px-6 py-4 text-gray-600">
                                    <div class="line-clamp-2">
                                        {{ $b->isi_berita }}
                                    </div>
                                    @if (strlen($b->isi_berita) > 100)
                                        <button onclick="openModal('Isi Berita', @js($b->isi_berita))"
                                            class="text-blue-600 text-sm hover:underline">Selengkapnya</button>
                                    @endif
                                </td> --}}

                                {{-- Kolom Excerpt --}}
                                {{-- <td class="px-6 py-4 text-gray-600">
                                    <div class="line-clamp-1">
                                        {{ $b->excerpt }}
                                    </div>
                                    @if (strlen($b->excerpt) > 50)
                                        <button onclick="openModal('Excerpt', @js($b->excerpt))"
                                            class="text-blue-600 text-sm hover:underline">Selengkapnya</button>
                                    @endif
                                </td> --}}

                                <td class="px-6 py-4 text-gray-600">
                                    {{ $b->published_at ? $b->published_at->format('d M Y H:i') : '—' }}
                                </td>

                                <td class="px-6 py-4 text-center align-middle">
                                    <div class="flex justify-center items-center gap-2">
                                        <!-- Lihat -->
                                        <a href="{{ route('admin-berita.show', $b) }}" title="Lihat"
                                            class="flex items-center justify-center w-8 h-8 rounded-lg bg-blue-500 hover:bg-blue-600 shadow-sm transition hover:scale-105">
                                            <img src="{{ asset('images/icons/eye.png') }}" alt="Lihat"
                                                class="w-4 h-4 invert brightness-0">
                                        </a>

                                        <!-- Edit -->
                                        <a href="{{ route('admin-berita.edit', $b) }}" title="Edit"
                                            class="flex items-center justify-center w-8 h-8 rounded-lg bg-yellow-400 hover:bg-yellow-500 shadow-sm transition hover:scale-105">
                                            <img src="{{ asset('images/icons/pencil.png') }}" alt="Edit"
                                                class="w-4 h-4">
                                        </a>

                                        <!-- Hapus -->
                                        <form action="{{ route('admin-berita.destroy', $b) }}" method="POST"
                                            onsubmit="return confirm('Hapus berita ini?')" class="inline">
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
                                <td colspan="6" class="px-6 py-6 text-center text-gray-500">Belum ada berita.</td>
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

    {{-- Modal --}}
    <div id="customModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white w-11/12 md:w-2/3 lg:w-1/2 rounded-xl shadow-lg p-6 max-h-[80vh] overflow-y-auto">
            <div class="flex justify-between items-center mb-4">
                <h2 id="modalTitle" class="text-xl font-bold text-gray-800"></h2>
                <button onclick="closeModal()" class="text-gray-600 hover:text-gray-800 text-2xl">&times;</button>
            </div>
            <p id="modalContent" class="text-gray-700 whitespace-pre-line"></p>
        </div>
    </div>

    <script>
        function openModal(title, content) {
            document.getElementById("modalTitle").textContent = title;
            document.getElementById("modalContent").textContent = content;
            document.getElementById("customModal").classList.remove("hidden");
            document.getElementById("customModal").classList.add("flex");
        }

        function closeModal() {
            document.getElementById("customModal").classList.remove("flex");
            document.getElementById("customModal").classList.add("hidden");
        }
    </script>
@endsection
