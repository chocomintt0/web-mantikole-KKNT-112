@extends('mantikole.layout.app')

@section('content')
    {{-- CSS TAMBAHAN HANYA UNTUK EFEK FADE GAMBAR SLIDESHOW --}}
    <style>
        .slideshow-image {
            transition: opacity 0.7s ease-in-out;
        }

        /* Animasi untuk modal galeri */
        #gallery-modal-overlay.show {
            display: flex;
            animation: fadeIn 0.3s ease-out forwards;
        }
        #gallery-modal-overlay.show #gallery-modal-content {
            animation: slideUp 0.4s ease-out forwards;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

    {{-- BAGIAN HERO --}}
    <section class="relative bg-slate-50 py-20 md:py-32 overflow-hidden">
        <div class="absolute top-0 -left-48 w-96 h-96 bg-gradient-to-tr from-blue-200 to-indigo-200 rounded-full blur-3xl opacity-40"></div>
        <div class="absolute -bottom-48 right-0 w-96 h-96 bg-gradient-to-tr from-cyan-200 to-blue-200 rounded-full blur-3xl opacity-40"></div>
        
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-4xl sm:text-5xl font-bold text-blue-800 leading-tight">
                    Selamat Datang di <br> Website Desa Mantikole
                </h1>
                <p class="mt-6 text-gray-700 leading-relaxed text-base md:text-lg">
                    Website ini hadir sebagai sarana <strong class="font-semibold text-blue-700">informasi dan layanan digital</strong> bagi seluruh warga Desa Mantikole dan masyarakat umum.
                    Melalui platform ini, kami berkomitmen untuk menyajikan berita terbaru, profil desa, layanan publik,
                    serta data dan dokumentasi penting secara <strong class="font-semibold text-gray-800">terbuka, mudah diakses, dan akurat.</strong>
                </p>
                
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('profil-desa.index') }}" 
                       class="inline-block bg-blue-700 text-white font-semibold px-8 py-3 rounded-lg shadow-lg hover:bg-blue-800 transition-all duration-300 transform hover:scale-105">
                        Jelajahi Profil Desa
                    </a>
                    <a href="#" 
                       class="inline-block bg-white text-blue-700 font-semibold px-8 py-3 rounded-lg shadow-lg ring-1 ring-inset ring-blue-200 hover:bg-blue-50 transition-all duration-300 transform hover:scale-105">
                        Lihat Berita
                    </a>
                </div>
            </div>

            <div class="hidden md:flex justify-center">
                <img src="{{ asset('images/air terjun.png') }}" alt="Air Terjun Desa Mantikole"
                     class="rounded-2xl shadow-2xl w-full md:w-[90%] transform hover:scale-105 transition-transform duration-500 ease-out">
            </div>
        </div>
    </section>

    {{-- BAGIAN SAMBUTAN KEPALA DESA --}}
    <section class="bg-gradient-to-r from-white to-blue-50 py-16 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-8">
            <div class="bg-white rounded-2xl shadow-2xl p-6 md:p-14 flex flex-col md:grid md:grid-cols-3 gap-8 md:gap-12 items-center border border-gray-100">
                
                <div class="text-center flex flex-col items-center">
                    <div class="relative w-48 h-48 md:w-64 md:h-64">
                        <div class="absolute inset-0 bg-gradient-to-tr from-blue-200 to-indigo-200 rounded-full transform scale-105 shadow-lg"></div>
                        <img src="{{ asset('images/kades.jpg') }}" alt="Kepala Desa"
                             class="relative rounded-full w-full h-full object-cover border-4 border-white shadow-xl">
                    </div>
                    <h2 class="mt-6 text-3xl font-bold text-gray-800">Rasyid</h2>
                    <p class="text-indigo-600 font-semibold">Kepala Desa Mantikole</p>
                </div>
                
                <div class="md:col-span-2">
                    <div class="flex items-start mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-200 mr-4 flex-shrink-0" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z"/>
                        </svg>
                        <h2 class="text-2xl sm:text-3xl font-bold text-blue-800 leading-tight">Sambutan Kepala Desa Mantikole</h2>
                    </div>
                    
                    <blockquote class="border-l-4 border-blue-500 bg-blue-50 p-4 rounded-r-lg mb-6">
                        <p class="text-lg italic text-blue-900 leading-relaxed">
                            "Selamat datang di Website Resmi Desa Mantikole."
                        </p>
                    </blockquote>

                    <div class="space-y-4 text-gray-700 leading-relaxed">
                        <p>
                            Dengan hadirnya website ini, kami berharap dapat memberikan kemudahan bagi masyarakat dalam mengakses informasi seputar pemerintahan desa, layanan publik, serta kegiatan dan potensi yang ada di Desa Mantikole. Website ini menjadi bentuk komitmen kami dalam mewujudkan tata kelola pemerintahan desa yang transparan, akuntabel, dan partisipatif.
                        </p>
                        <p>
                            Kami juga membuka ruang bagi masyarakat untuk memberikan masukan, saran, maupun partisipasi aktif demi kemajuan bersama. Semoga melalui media ini, komunikasi antara pemerintahan desa dan masyarakat semakin terjalin dengan baik.
                        </p>
                    </div>

                    <div class="mt-8 text-right">
                        <p class="font-semibold text-gray-800">Terima kasih atas kunjungan Anda,</p>
                        <p class="mt-4 font-bold text-xl text-gray-900">Rasyid</p>
                        <p class="text-sm text-gray-600">Kepala Desa Mantikole</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- BAGIAN JELAJAHI DESA --}}
    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-8">
            <div class="bg-white rounded-2xl shadow-xl border border-gray-200 p-6 md:p-14">
                <div class="text-center mb-12">
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-blue-800">Jelajahi Desa</h2>
                    <p class="mt-2 text-lg text-gray-600 max-w-3xl mx-auto">
                        Temukan semua informasi penting mengenai Desa Mantikole melalui tautan navigasi di bawah ini.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <a href="{{ route('profil-desa.index') }}" class="group block p-6 md:p-8 bg-slate-50 rounded-xl border border-slate-200 transition-all duration-300 hover:border-blue-400 hover:bg-blue-50 hover:shadow-lg hover:-translate-y-2">
                        <div class="flex items-center space-x-4 md:space-x-6">
                            <div class="flex-shrink-0 bg-blue-100 text-blue-600 rounded-full p-4 transform transition-transform duration-300 group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M15 21v-1a6 6 0 00-1.78-4.125a4 4 0 11-6.44 0A6 6 0 003 20v1h12z" /></svg>
                            </div>
                            <div>
                                <h3 class="text-lg md:text-xl font-bold text-gray-800">Profil Desa</h3>
                                <p class="mt-1 text-sm text-gray-600">Kenali sejarah, visi & misi, serta struktur pemerintahan desa.</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('infografis.index') }}" class="group block p-6 md:p-8 bg-slate-50 rounded-xl border border-slate-200 transition-all duration-300 hover:border-blue-400 hover:bg-blue-50 hover:shadow-lg hover:-translate-y-2">
                        <div class="flex items-center space-x-4 md:space-x-6">
                            <div class="flex-shrink-0 bg-blue-100 text-blue-600 rounded-full p-4 transform transition-transform duration-300 group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                            </div>
                            <div>
                                <h3 class="text-lg md:text-xl font-bold text-gray-800">Data Statistik Desa</h3>
                                <p class="mt-1 text-sm text-gray-600">Lihat data kependudukan dan informasi demografis lainnya.</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="group block p-6 md:p-8 bg-slate-50 rounded-xl border border-slate-200 transition-all duration-300 hover:border-blue-400 hover:bg-blue-50 hover:shadow-lg hover:-translate-y-2">
                        <div class="flex items-center space-x-4 md:space-x-6">
                            <div class="flex-shrink-0 bg-blue-100 text-blue-600 rounded-full p-4 transform transition-transform duration-300 group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3h3m-3 4h3m-3 4h3m-3 4h3" /></svg>
                            </div>
                            <div>
                                <h3 class="text-lg md:text-xl font-bold text-gray-800">Berita & Pengumuman</h3>
                                <p class="mt-1 text-sm text-gray-600">Dapatkan informasi dan pengumuman terbaru dari pemerintah desa.</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('layanan.index') }}" class="group block p-6 md:p-8 bg-slate-50 rounded-xl border border-slate-200 transition-all duration-300 hover:border-blue-400 hover:bg-blue-50 hover:shadow-lg hover:-translate-y-2">
                        <div class="flex items-center space-x-4 md:space-x-6">
                            <div class="flex-shrink-0 bg-blue-100 text-blue-600 rounded-full p-4 transform transition-transform duration-300 group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                            </div>
                            <div>
                                <h3 class="text-lg md:text-xl font-bold text-gray-800">Layanan Publik</h3>
                                <p class="mt-1 text-sm text-gray-600">Akses berbagai layanan administrasi yang tersedia untuk warga.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- BAGIAN BERITA & PENGUMUMAN --}}
    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-blue-800">Berita & Pengumuman</h2>
                <p class="mt-2 text-lg text-gray-600">Ikuti perkembangan dan informasi terbaru dari Desa Mantikole.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="group bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="relative overflow-hidden">
                        <div class="absolute top-4 left-4 z-10"><span class="inline-block bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full">KEGIATAN DESA</span></div>
                        <img src="{{ asset('images/Upacara memperingati kemerdekaan NKRI yang ke 80 Dirgahayu Indonesia.jpg') }}" alt="Berita 1" class="w-full h-48 md:h-56 object-cover transform transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-5 flex flex-col h-full">
                        <p class="text-sm text-gray-500 mb-2">17 Agustus 2025</p>
                        <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-700 transition-colors duration-300">Upacara Memperingati Hari Kemerdekaan Indonesia Yang Ke-80</h3>
                        <p class="text-gray-600 text-sm leading-relaxed my-4 flex-grow">Aparat Desa Mantikole Dan Bobo, Serta Mahasiswa KKN Dan Siswa-Siswi Sekolah ikut Mengikuti Upacara Bendera Yang Di Laksanakan Di Lapangan Bobo.</p>
                        <a href="#" class="font-semibold text-blue-600 hover:text-blue-800 transition-colors duration-300 self-start">Baca Selengkapnya →</a>
                    </div>
                </div>
                <div class="group bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="relative overflow-hidden">
                        <div class="absolute top-4 left-4 z-10"><span class="inline-block bg-green-600 text-white text-xs font-semibold px-3 py-1 rounded-full">POTENSI DESA</span></div>
                        <img src="{{ asset('images/air terjun.png') }}" alt="Berita 2" class="w-full h-48 md:h-56 object-cover transform transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-5 flex flex-col h-full">
                        <p class="text-sm text-gray-500 mb-2">10 September 2025</p>
                        <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-700 transition-colors duration-300">Pengembangan Agrowisata Durian Lokal</h3>
                        <p class="text-gray-600 text-sm leading-relaxed my-4 flex-grow">Pemerintah desa bekerja sama dengan petani lokal untuk mengembangkan potensi agrowisata durian yang diharapkan dapat meningkatkan perekonomian warga.</p>
                        <a href="#" class="font-semibold text-blue-600 hover:text-blue-800 transition-colors duration-300 self-start">Baca Selengkapnya →</a>
                    </div>
                </div>
                <div class="group bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
                    <div class="relative overflow-hidden">
                        <div class="absolute top-4 left-4 z-10"><span class="inline-block bg-indigo-600 text-white text-xs font-semibold px-3 py-1 rounded-full">PEMERINTAHAN</span></div>
                        <img src="{{ asset('images/air terjun.png') }}" alt="Berita 3" class="w-full h-48 md:h-56 object-cover transform transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-5 flex flex-col h-full">
                        <p class="text-sm text-gray-500 mb-2">08 September 2025</p>
                        <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-700 transition-colors duration-300">Sosialisasi Program KTP Digital di Balai Desa</h3>
                        <p class="text-gray-600 text-sm leading-relaxed my-4 flex-grow">Dalam rangka mendukung program pemerintah pusat, diadakan sosialisasi mengenai transisi ke KTP digital bagi seluruh warga Desa Mantikole.</p>
                        <a href="#" class="font-semibold text-blue-600 hover:text-blue-800 transition-colors duration-300 self-start">Baca Selengkapnya →</a>
                    </div>
                </div>
            </div>
            <div class="mt-12 text-center">
                <a href="#" class="inline-block bg-blue-700 text-white font-semibold px-8 py-3 rounded-lg shadow-lg hover:bg-blue-800 transition-all duration-300 transform hover:scale-105">Lihat Semua Berita</a>
            </div>
        </div>
    </section>

    {{-- BAGIAN DATA DESA --}}
    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-8">
            <div class="bg-white rounded-2xl shadow-xl border border-gray-200 p-6 md:p-14">
                <div class="text-center mb-12">
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-blue-800">Data Desa</h2>
                    <p class="mt-2 text-lg text-gray-600">Potret demografi Desa Mantikole dalam angka.</p>
                </div>
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 lg:grid-cols-4 sm:gap-6">
                    <div class="bg-slate-50 p-4 rounded-xl border border-slate-200 flex flex-col items-center text-center sm:flex-row sm:text-left sm:p-6 sm:space-x-4 transition-all duration-300 hover:border-blue-300 hover:shadow-lg hover:-translate-y-2">
                        <div class="bg-blue-100 text-blue-600 rounded-full p-3 sm:p-4 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 sm:h-8 sm:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                        </div>
                        <div class="mt-2 sm:mt-0">
                            <h3 class="text-2xl sm:text-3xl font-bold text-blue-800" data-count="1256">0</h3>
                            <p class="text-gray-600 text-sm sm:text-base">Penduduk</p>
                        </div>
                    </div>
                    <div class="bg-slate-50 p-4 rounded-xl border border-slate-200 flex flex-col items-center text-center sm:flex-row sm:text-left sm:p-6 sm:space-x-4 transition-all duration-300 hover:border-blue-300 hover:shadow-lg hover:-translate-y-2">
                        <div class="bg-blue-100 text-blue-600 rounded-full p-3 sm:p-4 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 sm:h-8 sm:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                        </div>
                        <div class="mt-2 sm:mt-0">
                            <h3 class="text-2xl sm:text-3xl font-bold text-blue-800" data-count="421">0</h3>
                            <p class="text-gray-600 text-sm sm:text-base">Keluarga</p>
                        </div>
                    </div>
                    <div class="bg-slate-50 p-4 rounded-xl border border-slate-200 flex flex-col items-center text-center sm:flex-row sm:text-left sm:p-6 sm:space-x-4 transition-all duration-300 hover:border-blue-300 hover:shadow-lg hover:-translate-y-2">
                        <div class="bg-blue-100 text-blue-600 rounded-full p-3 sm:p-4 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 sm:h-8 sm:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7a4 4 0 11-8 0 4 4 0 018 0zM9 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                        </div>
                        <div class="mt-2 sm:mt-0">
                            <h3 class="text-2xl sm:text-3xl font-bold text-blue-800" data-count="635">0</h3>
                            <p class="text-gray-600 text-sm sm:text-base">Laki-Laki</p>
                        </div>
                    </div>
                    <div class="bg-slate-50 p-4 rounded-xl border border-slate-200 flex flex-col items-center text-center sm:flex-row sm:text-left sm:p-6 sm:space-x-4 transition-all duration-300 hover:border-blue-300 hover:shadow-lg hover:-translate-y-2">
                        <div class="bg-blue-100 text-blue-600 rounded-full p-3 sm:p-4 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 sm:h-8 sm:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4a4 4 0 100 8 4 4 0 000-8zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                        </div>
                        <div class="mt-2 sm:mt-0">
                            <h3 class="text-2xl sm:text-3xl font-bold text-blue-800" data-count="621">0</h3>
                            <p class="text-gray-600 text-sm sm:text-base">Perempuan</p>
                        </div>
                    </div>
                </div>
                <div class="mt-12 text-center">
                    <a href="{{ route('infografis.index') }}" class="inline-block bg-blue-700 text-white font-semibold px-8 py-3 rounded-lg shadow-lg hover:bg-blue-800 transition-all duration-300 transform hover:scale-105">Lihat Infografis Lengkap</a>
                </div>
            </div>
        </div>
    </section>

    {{-- BAGIAN POTENSI DESA --}}
    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-blue-800">Potensi Desa</h2>
                <p class="mt-2 text-lg text-gray-600">Temukan kekayaan dan keunikan yang dimiliki oleh Desa Mantikole.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <a href="#" class="slideshow-card group relative block rounded-xl overflow-hidden shadow-lg transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2"
                data-images="['{{ asset('images/air terjun.png') }}', '{{ asset('images/foto2.jpg') }}', '{{ asset('images/air panas.png') }}']">
                    <img src="{{ asset('images/air terjun.png') }}" alt="wisata" class="slideshow-image absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="relative h-64 sm:h-72 md:h-96 p-6 flex flex-col justify-end text-white transform transition-transform duration-300 group-hover:-translate-y-2">
                        <h3 class="text-2xl md:text-3xl font-bold">Wisata</h3>
                        <p class="mt-2 text-sm opacity-90">Jelajahi keindahan alam Desa Mantikole, dari air terjun yang sejuk hingga pemandian air panas alami yang menenangkan.</p>
                    </div>
                </a>
                <a href="#" class="slideshow-card group relative block rounded-xl overflow-hidden shadow-lg transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2"
                   data-images="['{{ asset('images/air terjun.png') }}','{{ asset('images/foto2.jpg') }}']">
                    <img src="{{ asset('images/air terjun.png') }}" alt="pertanian" class="slideshow-image absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="relative h-64 sm:h-72 md:h-96 p-6 flex flex-col justify-end text-white transform transition-transform duration-300 group-hover:-translate-y-2">
                        <h3 class="text-2xl md:text-3xl font-bold">Pertanian</h3>
                        <p class="mt-2 text-sm opacity-90">Tanah subur yang menghasilkan produk pertanian berkualitas, termasuk durian lokal yang menjadi unggulan desa kami.</p>
                    </div>
                </a>
                <a href="#" class="slideshow-card group relative block rounded-xl overflow-hidden shadow-lg transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2"
                   data-images="['{{ asset('images/air terjun.png') }}','{{ asset('images/foto2.jpg') }}']">
                    <img src="{{ asset('images/air terjun.png') }}" alt="budaya" class="slideshow-image absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="relative h-64 sm:h-72 md:h-96 p-6 flex flex-col justify-end text-white transform transition-transform duration-300 group-hover:-translate-y-2">
                        <h3 class="text-2xl md:text-3xl font-bold">Budaya</h3>
                        <p class="mt-2 text-sm opacity-90">Rasakan kearifan lokal melalui tradisi dan upacara adat yang masih lestari hingga kini di tengah masyarakat.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- BAGIAN PETA DESA --}}
    <section class="bg-gray-50 py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-8">
            <div class="bg-white rounded-2xl shadow-xl p-6 md:p-12 border border-gray-200">
                <div class="text-center mb-8">
                    <h2 class="text-3xl sm:text-4xl font-bold text-blue-700">Peta Desa Mantikole</h2>
                    <p class="mt-2 text-lg text-gray-600">Jelajahi wilayah desa kami secara interaktif melalui peta digital di bawah ini.</p>
                </div>
                <div class="bg-gray-100 rounded-2xl p-2 md:p-3 shadow-inner">
                    <div class="rounded-xl overflow-hidden">
                        <iframe src="https://www.google.com/maps/d/embed?mid=198WoHjZVirYoSIvORdm0hOoQpsJtzcM&ehbc=2E312F" width="100%" height="450" style="border:0;" class="h-80 md:h-[480px]" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- BAGIAN GALERI --}}
    <section class="bg-gray-50 py-14">
        <div class="max-w-5xl mx-auto px-4 sm:px-7">
            <div class="bg-white rounded-2xl shadow-2xl p-8 md:p-14 relative">
                <h2 class="text-3xl sm:text-4xl font-bold text-blue-700 mb-10 text-center">Memories Of KKN-T 112 Mantikole</h2>
                
                <button id="scrollLeft" class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 backdrop-blur-sm text-blue-700 p-3 rounded-full shadow-lg hover:bg-gray-200 transition-colors duration-200 z-10 hidden md:block">❮</button>
                <div id="galleryScroll" class="flex space-x-6 overflow-x-auto scroll-smooth [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden">
                    <div class="gallery-item min-w-[240px] md:min-w-[300px] bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden flex-shrink-0 cursor-pointer" data-title="Kegiatan 1: Pemandangan Sungai" data-description="Ini adalah pemandangan indah dari sungai yang mengalir di Desa Mantikole, menjadi sumber kehidupan dan potensi wisata alam." data-img-src="{{ asset('images/1.jpg') }}">
                        <img src="{{ asset('images/1.jpg') }}" alt="kegiatan1" class="w-full h-52 object-cover pointer-events-none">
                        <div class="p-5 text-center pointer-events-none"><h3 class="font-semibold text-xl truncate">Kegiatan 1</h3></div>
                    </div>
                    <div class="gallery-item min-w-[240px] md:min-w-[300px] bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden flex-shrink-0 cursor-pointer" data-title="Kegiatan 2: Gotong Royong" data-description="Warga desa bergotong royong membersihkan area sekitar sungai untuk menjaga kelestarian lingkungan." data-img-src="{{ asset('images/2.jpg') }}">
                        <img src="{{ asset('images/2.jpg') }}" alt="kegiatan2" class="w-full h-52 object-cover pointer-events-none">
                        <div class="p-5 text-center pointer-events-none"><h3 class="font-semibold text-xl truncate">Kegiatan 2</h3></div>
                    </div>
                    <div class="gallery-item min-w-[240px] md:min-w-[300px] bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden flex-shrink-0 cursor-pointer" data-title="Kegiatan 3: Anak-Anak Bermain" data-description="Keceriaan anak-anak desa saat bermain di tepi sungai yang jernih dan asri." data-img-src="{{ asset('images/3.jpg') }}">
                        <img src="{{ asset('images/3.jpg') }}" alt="kegiatan3" class="w-full h-52 object-cover pointer-events-none">
                        <div class="p-5 text-center pointer-events-none"><h3 class="font-semibold text-xl truncate">Kegiatan 3</h3></div>
                    </div>
                    <div class="gallery-item min-w-[240px] md:min-w-[300px] bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden flex-shrink-0 cursor-pointer" data-title="Kegiatan 4: Sunset di Desa" data-description="Pemandangan matahari terbenam yang memukau dilihat dari salah satu sudut Desa Mantikole." data-img-src="{{ asset('images/4.jpg') }}">
                        <img src="{{ asset('images/4.jpg') }}" alt="kegiatan4" class="w-full h-52 object-cover pointer-events-none">
                        <div class="p-5 text-center pointer-events-none"><h3 class="font-semibold text-xl truncate">Kegiatan 4</h3></div>
                    </div>
                    <div class="gallery-item min-w-[240px] md:min-w-[300px] bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden flex-shrink-0 cursor-pointer" data-title="Kegiatan 5: Hasil Pertanian" data-description="Berbagai hasil pertanian unggulan dari Desa Mantikole yang siap dipasarkan." data-img-src="{{ asset('images/5.jpg') }}">
                        <img src="{{ asset('images/5.jpg') }}" alt="kegiatan5" class="w-full h-52 object-cover pointer-events-none">
                        <div class="p-5 text-center pointer-events-none"><h3 class="font-semibold text-xl truncate">Kegiatan 5</h3></div>
                    </div>
                    <div class="gallery-item min-w-[240px] md:min-w-[300px] bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden flex-shrink-0 cursor-pointer" data-title="Kegiatan 6: Upacara Adat" data-description="Salah satu upacara adat yang masih dilestarikan oleh masyarakat Desa Mantikole hingga saat ini." data-img-src="{{ asset('images/posyandu.jpg') }}">
                        <img src="{{ asset('images/posyandu.jpg') }}" alt="kegiatan6" class="w-full h-52 object-cover pointer-events-none">
                        <div class="p-5 text-center pointer-events-none"><h3 class="font-semibold text-xl truncate">Kegiatan 6</h3></div>
                    </div>
                </div>
                <button id="scrollRight" class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 backdrop-blur-sm text-blue-700 p-3 rounded-full shadow-lg hover:bg-gray-200 transition-colors duration-200 z-10 hidden md:block">❯</button>
                
                <div class="mt-8 text-center">
                    <button id="open-gallery-modal-btn" class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg shadow-md hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                        Lihat Semua Galeri
                    </button>
                </div>
            </div>
        </div>
    </section>

    <div id="galleryModal" class="fixed inset-0 bg-black bg-opacity-80 z-[60] hidden items-center justify-center p-4 opacity-0 transition-opacity duration-300">
        <div class="relative bg-white rounded-xl shadow-2xl max-w-3xl w-full mx-auto overflow-hidden transform scale-75 opacity-0 transition-all duration-300 ease-out">
            <button id="closeModal" class="absolute top-3 right-3 text-gray-700 hover:text-red-600 bg-white rounded-full p-2 shadow-md transition-colors duration-200 z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 flex items-center justify-center bg-gray-100 p-4">
                    <img id="modalImage" src="" alt="Gambar Galeri" class="max-h-[70vh] w-auto object-contain rounded-lg">
                </div>
                <div class="md:w-1/2 p-6 flex flex-col justify-center">
                    <h3 id="modalTitle" class="text-2xl md:text-3xl font-bold text-blue-800 mb-3 leading-tight"></h3>
                    <p id="modalDescription" class="text-gray-700 text-base leading-relaxed"></p>
                    <div class="mt-6 text-sm text-gray-500">
                        <p>Ditambahkan pada: <span id="modalDate">13/09/2025</span></p>
                        <p>Lokasi: <span id="modalLocation">Desa Mantikole</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="gallery-modal-overlay" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden items-center justify-center p-4 transition-opacity duration-300">
        <div id="gallery-modal-content" class="bg-white w-full h-full max-w-6xl rounded-2xl shadow-2xl flex flex-col p-4 md:p-6">
            <div class="flex-shrink-0 flex justify-between items-center pb-4 border-b border-gray-200">
                <h2 class="text-2xl font-bold text-gray-800">Galeri Kenangan</h2>
                <button id="close-gallery-modal-btn" class="text-gray-500 hover:text-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            <div class="flex-grow overflow-y-auto py-6">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                    {{-- Ulangi untuk semua foto --}}
                    <div class="gallery-item group cursor-pointer" data-title="Kegiatan 1: Pemandangan Sungai" data-description="Ini adalah pemandangan indah dari sungai yang mengalir di Desa Mantikole..." data-img-src="{{ asset('images/1.jpg') }}">
                        <div class="relative overflow-hidden rounded-lg aspect-square">
                            <img src="{{ asset('images/1.jpg') }}" alt="kegiatan1" class="w-full h-full object-cover pointer-events-none transform transition-transform duration-300 group-hover:scale-110">
                        </div>
                    </div>
                    <div class="gallery-item group cursor-pointer" data-title="Kegiatan 2: Gotong Royong" data-description="Warga desa bergotong royong..." data-img-src="{{ asset('images/2.jpg') }}">
                        <div class="relative overflow-hidden rounded-lg aspect-square">
                            <img src="{{ asset('images/2.jpg') }}" alt="kegiatan2" class="w-full h-full object-cover pointer-events-none transform transition-transform duration-300 group-hover:scale-110">
                        </div>
                    </div>
                    <div class="gallery-item group cursor-pointer" data-title="Kegiatan 2: Gotong Royong" data-description="Warga desa bergotong royong..." data-img-src="{{ asset('images/3.jpg') }}">
                        <div class="relative overflow-hidden rounded-lg aspect-square">
                            <img src="{{ asset('images/3.jpg') }}" alt="kegiatan2" class="w-full h-full object-cover pointer-events-none transform transition-transform duration-300 group-hover:scale-110">
                        </div>
                    </div>
                    <div class="gallery-item group cursor-pointer" data-title="Kegiatan 2: Gotong Royong" data-description="Warga desa bergotong royong..." data-img-src="{{ asset('images/4.jpg') }}">
                        <div class="relative overflow-hidden rounded-lg aspect-square">
                            <img src="{{ asset('images/4.jpg') }}" alt="kegiatan2" class="w-full h-full object-cover pointer-events-none transform transition-transform duration-300 group-hover:scale-110">
                        </div>
                    </div>
                    <div class="gallery-item group cursor-pointer" data-title="Kegiatan 2: Gotong Royong" data-description="Warga desa bergotong royong..." data-img-src="{{ asset('images/5.jpg') }}">
                        <div class="relative overflow-hidden rounded-lg aspect-square">
                            <img src="{{ asset('images/5.jpg') }}" alt="kegiatan2" class="w-full h-full object-cover pointer-events-none transform transition-transform duration-300 group-hover:scale-110">
                        </div>
                    </div>
                    <div class="gallery-item group cursor-pointer" data-title="Kegiatan 2: Gotong Royong" data-description="Warga desa bergotong royong..." data-img-src="{{ asset('images/3.jpg') }}">
                        <div class="relative overflow-hidden rounded-lg aspect-square">
                            <img src="{{ asset('images/3.jpg') }}" alt="kegiatan2" class="w-full h-full object-cover pointer-events-none transform transition-transform duration-300 group-hover:scale-110">
                        </div>
                    </div>
                    <div class="gallery-item group cursor-pointer" data-title="Kegiatan 2: Gotong Royong" data-description="Warga desa bergotong royong..." data-img-src="{{ asset('images/3.jpg') }}">
                        <div class="relative overflow-hidden rounded-lg aspect-square">
                            <img src="{{ asset('images/3.jpg') }}" alt="kegiatan2" class="w-full h-full object-cover pointer-events-none transform transition-transform duration-300 group-hover:scale-110">
                        </div>
                    </div>
                    <div class="gallery-item group cursor-pointer" data-title="Kegiatan 2: Gotong Royong" data-description="Warga desa bergotong royong..." data-img-src="{{ asset('images/3.jpg') }}">
                        <div class="relative overflow-hidden rounded-lg aspect-square">
                            <img src="{{ asset('images/3.jpg') }}" alt="kegiatan2" class="w-full h-full object-cover pointer-events-none transform transition-transform duration-300 group-hover:scale-110">
                        </div>
                    </div>
                    <div class="gallery-item group cursor-pointer" data-title="Kegiatan 2: Gotong Royong" data-description="Warga desa bergotong royong..." data-img-src="{{ asset('images/3.jpg') }}">
                        <div class="relative overflow-hidden rounded-lg aspect-square">
                            <img src="{{ asset('images/3.jpg') }}" alt="kegiatan2" class="w-full h-full object-cover pointer-events-none transform transition-transform duration-300 group-hover:scale-110">
                        </div>
                    </div>
                    <div class="gallery-item group cursor-pointer" data-title="Kegiatan 2: Gotong Royong" data-description="Warga desa bergotong royong..." data-img-src="{{ asset('images/3.jpg') }}">
                        <div class="relative overflow-hidden rounded-lg aspect-square">
                            <img src="{{ asset('images/3.jpg') }}" alt="kegiatan2" class="w-full h-full object-cover pointer-events-none transform transition-transform duration-300 group-hover:scale-110">
                        </div>
                    </div>
                    <div class="gallery-item group cursor-pointer" data-title="Kegiatan 2: Gotong Royong" data-description="Warga desa bergotong royong..." data-img-src="{{ asset('images/3.jpg') }}">
                        <div class="relative overflow-hidden rounded-lg aspect-square">
                            <img src="{{ asset('images/3.jpg') }}" alt="kegiatan2" class="w-full h-full object-cover pointer-events-none transform transition-transform duration-300 group-hover:scale-110">
                        </div>
                    </div>
                    {{-- ... Tambahkan semua 20+ foto Anda di sini ... --}}
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // --- SCRIPT UNTUK SCROLLER GALERI ---
            const scrollContainer = document.getElementById('galleryScroll');
            const scrollLeftBtn = document.getElementById('scrollLeft');
            const scrollRightBtn = document.getElementById('scrollRight');
            let autoScrollInterval;

            const startAutoScroll = () => {
                stopAutoScroll();
                autoScrollInterval = setInterval(() => {
                    if (!scrollContainer) return;
                    if (scrollContainer.scrollLeft + scrollContainer.clientWidth >= scrollContainer.scrollWidth - 1) {
                        scrollContainer.scrollTo({ left: 0, behavior: 'smooth' });
                    } else {
                        scrollContainer.scrollBy({ left: 300, behavior: 'smooth' });
                    }
                }, 3000);
            };
            const stopAutoScroll = () => clearInterval(autoScrollInterval);

            if (scrollContainer) {
                scrollLeftBtn.addEventListener('click', () => { stopAutoScroll(); scrollContainer.scrollBy({ left: -350, behavior: 'smooth' }); });
                scrollRightBtn.addEventListener('click', () => { stopAutoScroll(); scrollContainer.scrollBy({ left: 350, behavior: 'smooth' }); });
                scrollContainer.addEventListener('mouseover', stopAutoScroll);
                scrollContainer.addEventListener('mouseleave', startAutoScroll);
                window.addEventListener('load', startAutoScroll);
            }

            // --- SCRIPT UNTUK MODAL POPUP GALERI (FOTO INDIVIDUAL) ---
            const galleryModal = document.getElementById('galleryModal');
            const closeModalBtn = document.getElementById('closeModal');
            const modalContent = galleryModal ? galleryModal.querySelector('.relative.bg-white') : null;
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            const modalDescription = document.getElementById('modalDescription');

            function openModal(item) {
                if (!galleryModal) return;
                modalImage.src = item.dataset.imgSrc;
                modalTitle.textContent = item.dataset.title;
                modalDescription.textContent = item.dataset.description;
                
                galleryModal.classList.remove('hidden');
                galleryModal.classList.add('flex');
                setTimeout(() => { 
                    galleryModal.classList.remove('opacity-0');
                    if (modalContent) modalContent.classList.remove('scale-75', 'opacity-0'); 
                }, 50);
            }
            function closeModal() {
                if (!galleryModal) return;
                galleryModal.classList.add('opacity-0');
                if (modalContent) modalContent.classList.add('scale-75', 'opacity-0');
                setTimeout(() => { galleryModal.classList.add('hidden'); galleryModal.classList.remove('flex'); }, 300);
            }
            
            // Terapkan event listener ke SEMUA item dengan class .gallery-item
            document.querySelectorAll('.gallery-item').forEach(item => {
                item.addEventListener('click', () => openModal(item));
            });

            if (closeModalBtn) closeModalBtn.addEventListener('click', closeModal);
            if (galleryModal) galleryModal.addEventListener('click', (event) => { if (event.target === galleryModal) closeModal(); });
            window.addEventListener('keydown', (event) => { if (event.key === 'Escape' && !galleryModal.classList.contains('hidden')) closeModal(); });

            // --- SCRIPT UNTUK MODAL GALERI LENGKAP (FULL-SCREEN) ---
            const openGalleryModalBtn = document.getElementById('open-gallery-modal-btn');
            const closeGalleryModalBtn = document.getElementById('close-gallery-modal-btn');
            const galleryOverlay = document.getElementById('gallery-modal-overlay');

            function openGalleryModal() {
                if (galleryOverlay) {
                    galleryOverlay.classList.remove('hidden');
                    galleryOverlay.classList.add('show');
                    document.body.style.overflow = 'hidden';
                }
            }

            function closeGalleryModal() {
                if (galleryOverlay) {
                    galleryOverlay.classList.remove('show');
                    setTimeout(() => { galleryOverlay.classList.add('hidden'); }, 300);
                    document.body.style.overflow = '';
                }
            }

            if (openGalleryModalBtn) openGalleryModalBtn.addEventListener('click', openGalleryModal);
            if (closeGalleryModalBtn) closeGalleryModalBtn.addEventListener('click', closeGalleryModal);
            if (galleryOverlay) galleryOverlay.addEventListener('click', (event) => { if (event.target === galleryOverlay) closeGalleryModal(); });
            window.addEventListener('keydown', (event) => { if (event.key === 'Escape' && galleryOverlay && !galleryOverlay.classList.contains('hidden')) closeGalleryModal(); });


            // --- SCRIPT UNTUK ANIMASI HITUNG ANGKA (COUNT-UP) ---
            const counters = document.querySelectorAll('[data-count]');
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = +counter.getAttribute('data-count');
                        let current = 0;
                        const increment = target / 100;

                        const updateCount = () => {
                            if (current < target) {
                                current += increment;
                                counter.innerText = Math.ceil(current).toLocaleString('id-ID');
                                requestAnimationFrame(updateCount);
                            } else {
                                counter.innerText = target.toLocaleString('id-ID');
                            }
                        };
                        updateCount();
                        observer.unobserve(counter);
                    }
                });
            }, { threshold: 0.5 });
            counters.forEach(counter => observer.observe(counter));
        });

        // --- SCRIPT BARU UNTUK SLIDESHOW KARTU POTENSI ---
        document.addEventListener('DOMContentLoaded', function() {
            const slideshowCards = document.querySelectorAll('.slideshow-card');
            const intervalTime = 3500;

            slideshowCards.forEach(card => {
                try {
                    const images = JSON.parse(card.dataset.images.replace(/'/g, '"'));
                    const imgElement = card.querySelector('.slideshow-image');
                    if (images && images.length > 1 && imgElement) {
                        let currentIndex = 0;
                        setInterval(() => {
                            currentIndex = (currentIndex + 1) % images.length;
                            imgElement.style.opacity = '0';
                            setTimeout(() => {
                                imgElement.src = images[currentIndex];
                                imgElement.style.opacity = '1';
                            }, 700);
                        }, intervalTime);
                    }
                } catch (e) {
                    console.error("Error parsing images data for slideshow card:", e);
                }
            });
        });
    </script>
@endsection