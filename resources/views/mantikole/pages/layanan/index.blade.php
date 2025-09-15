@extends('mantikole.layout.app')

@section('content')
    <section class="relative bg-gradient-to-br from-blue-50 via-indigo-50 to-blue-100 py-20 px-6">
        <div class="max-w-7xl mx-auto space-y-24">

            {{-- Berita Desa --}}
            <div>
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-extrabold text-blue-800 mb-3">Berita Desa</h2>
                    <p class="text-gray-600">Update terbaru kegiatan dan informasi penting Desa Mantikole</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse($berita as $item)
                        <div
                            class="bg-white rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 overflow-hidden border-l-4 border-blue-500">

                            @if ($item['gambar'])
                                <img src="{{ $item['gambar'] }}" alt="gambar" class="w-full h-48 object-cover">
                            @endif
                            <hr>

                            <div class="p-4">
                                <h3 class="font-bold text-lg text-gray-900">{{ $item['judul'] }}</h3>
                                <p class="text-gray-600 mt-2 text-sm leading-relaxed">
                                    {{ $item['isi'] }}
                                </p>

                                <a href="{{ route('berita.show', $item['slug']) }}" class="text-blue-600 mt-3 inline-block font-medium hover:underline">
                                        Baca selengkapnya →
                                </a>
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500 text-center col-span-3">Belum ada berita desa.</p>
                    @endforelse
                </div>
            </div>
            {{-- Modal --}}
            <div id="beritaModal"
                class="fixed inset-0 bg-black/50 hidden justify-center items-center z-50 transition-opacity duration-300">
                <div id="modalCard"
                    class="bg-white max-w-xl w-full mx-4 rounded-2xl shadow-xl relative flex flex-col max-h-[90vh] transform scale-95 opacity-0 transition-all duration-300">

                    {{-- Tombol Close --}}
                    <button onclick="closeModal()"
                        class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-2xl">&times;</button>

                    {{-- Konten scrollable --}}
                    <div id="modalContent"
                        class="p-6 overflow-y-auto max-h-[80vh] scrollbar-thin scrollbar-thumb-blue-500 scrollbar-track-gray-100">
                        <img id="modalGambar" class="w-full rounded-lg mb-4">
                        <h3 id="modalJudul" class="text-2xl font-bold text-blue-700 mb-3"></h3>
                        <p id="modalIsi" class="text-gray-700 leading-relaxed whitespace-pre-line"></p>
                    </div>
                </div>
            </div>

            <script>
                function openModal(judul, gambar, isi) {
                    document.getElementById('modalJudul').textContent = judul;
                    document.getElementById('modalIsi').textContent = isi;
                    document.getElementById('modalGambar').src = gambar;

                    const modal = document.getElementById('beritaModal');
                    const card = document.getElementById('modalCard');

                    modal.classList.remove('hidden');
                    modal.classList.add('flex');

                    setTimeout(() => {
                        card.classList.remove('scale-95', 'opacity-0');
                        card.classList.add('scale-100', 'opacity-100');
                    }, 10);
                }

                function closeModal() {
                    const modal = document.getElementById('beritaModal');
                    const card = document.getElementById('modalCard');

                    card.classList.remove('scale-100', 'opacity-100');
                    card.classList.add('scale-95', 'opacity-0');

                    setTimeout(() => {
                        modal.classList.remove('flex');
                        modal.classList.add('hidden');
                    }, 300);
                }
            </script>

            {{-- Pengumuman Desa --}}
            <div>
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-extrabold text-blue-800 mb-3">Pengumuman Desa</h2>
                    <p class="text-gray-600">Informasi resmi dan pemberitahuan terbaru Desa Mantikole</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                    @forelse($pengumuman as $item)
                        <div
                            class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border-l-4 border-blue-600 p-6">
                            <h3 class="text-xl font-semibold text-gray-900 group-hover:text-blue-700 transition">
                                {{ $item['judul'] }}
                            </h3>
                            <hr class="my-3 border-gray-200">
                            <p class="text-gray-700 line-clamp-3">{{ $item['isi'] }}</p>
                            <button
                                class="text-blue-600 mt-4 inline-flex items-center font-medium hover:underline baca-selengkapnya"
                                data-judul="{{ $item['judul'] }}" data-isi="{{ $item['isi'] }}">
                                Baca selengkapnya →
                            </button>
                        </div>
                    @empty
                        <p class="text-gray-500 text-center col-span-3">Belum ada pengumuman desa.</p>
                    @endforelse
                </div>
            </div>

            {{-- Modal --}}
            <div id="modal-detail"
                class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 transition-opacity duration-300">
                <div
                    class="bg-white rounded-2xl shadow-2xl max-w-2xl w-full mx-4 p-8 relative max-h-[80vh] overflow-y-auto">
                    <button id="close-modal" class="absolute top-3 right-3 text-gray-500 hover:text-red-500">
                        ✕
                    </button>
                    <h3 id="modal-judul" class="text-2xl font-bold text-blue-800 mb-4"></h3>
                    <p id="modal-isi" class="text-gray-700 leading-relaxed"></p>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const modal = document.getElementById('modal-detail');
                    const modalJudul = document.getElementById('modal-judul');
                    const modalIsi = document.getElementById('modal-isi');
                    const closeModal = document.getElementById('close-modal');

                    document.querySelectorAll('.baca-selengkapnya').forEach(button => {
                        button.addEventListener('click', () => {
                            modalJudul.textContent = button.getAttribute('data-judul');
                            modalIsi.textContent = button.getAttribute('data-isi');
                            modal.classList.remove('hidden');
                            setTimeout(() => modal.classList.add('opacity-100'), 10);
                        });
                    });

                    closeModal.addEventListener('click', () => {
                        modal.classList.remove('opacity-100');
                        setTimeout(() => modal.classList.add('hidden'), 200);
                    });

                    modal.addEventListener('click', (e) => {
                        if (e.target === modal) {
                            modal.classList.remove('opacity-100');
                            setTimeout(() => modal.classList.add('hidden'), 200);
                        }
                    });
                });
            </script>

            {{-- Form Pengaduan --}}
            <div>
            <div class="text-center mb-12">
                <h2 class="text-4xl font-extrabold text-blue-800 mb-3">Form Pengaduan</h2>
                <p class="text-gray-600">Sampaikan aspirasi, kritik, dan saran Anda kepada pemerintah desa</p>
            </div>

            <div class="max-w-2xl mx-auto">
                <form name="submit-to-google-sheet" action="#" method="POST"
                    class="bg-white p-10 rounded-2xl shadow-md hover:shadow-xl transition border-t-4 border-blue-600 space-y-6">
                @csrf
                <div>
                    <label class="block text-gray-700 font-semibold">Nama</label>
                    <input type="text" name="nama"
                        class="w-full mt-2 border rounded-xl p-3 focus:ring-2 focus:ring-blue-300 focus:border-blue-500"
                        placeholder="Masukkan nama Anda" required>
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold">Isi Pengaduan</label>
                    <textarea name="isi" rows="5"
                            class="w-full mt-2 border rounded-xl p-3 focus:ring-2 focus:ring-blue-300 focus:border-blue-500"
                            placeholder="Tuliskan pengaduan Anda..." required></textarea>
                </div>

                <div class="flex items-center justify-between">
                    <button id="btn-submit" type="submit"
                            class="bg-blue-600 text-white px-8 py-3 rounded-xl font-semibold shadow hover:bg-blue-700 transition">
                    Kirim Pengaduan
                    </button>
                    <span id="msg" class="text-sm text-gray-600"></span>
                </div>
                </form>
            </div>
            </div>
        </div>

        <script>
            const scriptURL = 'https://script.google.com/macros/s/AKfycbxX99PnPkAP1ZllQ80pIPuInUWeHXZwwkJj1rVFlucPZJNJKN9CTiSpFkELrBsT9Xm3/exec';

            const form = document.forms['submit-to-google-sheet'];
            const msg = document.getElementById('msg');
            const btn = document.getElementById('btn-submit');

            form.addEventListener('submit', async (e) => {
                e.preventDefault();

                // UX: set loading state
                const prevText = btn.textContent;
                btn.disabled = true;
                btn.textContent = 'Mengirim...';
                msg.textContent = '';

                try {
                const res = await fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form), // otomatis kirim name=value sesuai input
                });

                // Opsional: baca JSON balasan
                let ok = res.ok;
                try {
                    const data = await res.json();
                    ok = ok && data?.success !== false;
                } catch (_) {
                    // jika bukan JSON, anggap saja sukses bila status OK
                }

                if (!ok) throw new Error('Gagal submit');

                msg.textContent = 'Terima kasih! Pengaduan Anda sudah kami terima.';
                form.reset();
                setTimeout(() => (msg.textContent = ''), 1000);
                } catch (err) {
                console.error(err);
                msg.textContent = 'Terjadi kesalahan. Silakan coba lagi.';
                } finally {
                btn.disabled = false;
                btn.textContent = prevText;
                }
            });
        </script>
    </section>
@endsection