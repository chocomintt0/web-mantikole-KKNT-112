@extends('mantikole.layout.app')

@section('content')
    {{-- CSS TAMBAHAN UNTUK ANIMASI KONTEN MODAL --}}
    <style>
        .content-pane {
            animation: fadeIn 0.5s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

    <div class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-10">
                <h1 class="text-4xl md:text-5xl font-extrabold text-blue-800 mb-2">Infografis Desa</h1>
                <p class="text-gray-600 max-w-2xl mx-auto">Informasi statistik dan visualisasi data penting mengenai Desa Mantikole.</p>
            </div>

            {{-- Navigasi Tab --}}
            <div class="max-w-4xl mx-auto mb-12">
                <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-8">
                    <button onclick="showTab('demografi')" id="tab-demografi"
                        class="tab-button group flex items-center justify-center space-x-3 p-4 rounded-xl transition-all duration-300 border border-transparent hover:border-blue-300 hover:bg-white hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        <div
                            class="w-10 h-10 bg-blue-100 group-hover:bg-blue-200 rounded-full flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                            </svg>
                        </div>
                        <h3 class="text-base font-medium text-gray-700">Demografi</h3>
                    </button>
                    <button onclick="showTab('potensi')" id="tab-potensi"
                        class="tab-button group flex items-center justify-center space-x-3 p-4 rounded-xl transition-all duration-300 border border-transparent hover:border-blue-300 hover:bg-white hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        <div
                            class="w-10 h-10 bg-blue-100 group-hover:bg-blue-200 rounded-full flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-base font-medium text-gray-700">Potensi Desa</h3>
                    </button>
                </div>
            </div>

            {{-- Konten Utama --}}
            <div class="bg-white rounded-xl shadow-lg p-8">
                {{-- Konten Tab Demografi --}}
                <div id="content-demografi" class="tab-content">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Demografi Penduduk</h2>
                        <p class="text-gray-600 max-w-4xl mx-auto leading-relaxed">
                            Informasi lengkap mengenai karakteristik demografi penduduk desa, mulai dari jumlah, usia, jenis kelamin, dan komposisi lainnya secara rinci.
                        </p>
                    </div>

                    {{-- Jumlah Penduduk dan KK --}}
                    <div class="mb-12">
                        <h3 class="text-2xl font-semibold text-center text-gray-800 mb-8">Jumlah Penduduk dan Kepala Keluarga</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="fade-in-element bg-gray-50 rounded-lg p-6 flex flex-col items-center space-y-2 border border-gray-200 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl opacity-0 translate-y-4" style="transition-delay: 0ms;">
                                <div class="scale-in-element p-2 bg-blue-100 rounded-full transition-all duration-500 transform scale-95">
                                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" /></svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800">Total Penduduk</h3>
                                <p class="animated-number text-2xl font-bold text-blue-600" data-target="1327">0</p>
                            </div>
                            <div class="fade-in-element bg-gray-50 rounded-lg p-6 flex flex-col items-center space-y-2 border border-gray-200 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl opacity-0 translate-y-4" style="transition-delay: 100ms;">
                                <div class="scale-in-element p-2 bg-blue-100 rounded-full transition-all duration-500 transform scale-95">
                                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20"><path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" /></svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800">Kepala Keluarga</h3>
                                <p class="animated-number text-2xl font-bold text-blue-600" data-target="428">0</p>
                            </div>
                            <div class="fade-in-element bg-gray-50 rounded-lg p-6 flex flex-col items-center space-y-2 border border-gray-200 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl opacity-0 translate-y-4" style="transition-delay: 200ms;">
                                <div class="scale-in-element p-2 bg-blue-100 rounded-full transition-all duration-500 transform scale-95">
                                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m-7.072 0l-3.536-3.536m7.072 0a5 5 0 110 7.072 5 5 0 010-7.072zM12 13a7 7 0 017 7H5a7 7 0 017-7z" /></svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800">Laki - Laki</h3>
                                <p class="animated-number text-2xl font-bold text-blue-600" data-target="648">0</p>
                            </div>
                            <div class="fade-in-element bg-gray-50 rounded-lg p-6 flex flex-col items-center space-y-2 border border-gray-200 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl opacity-0 translate-y-4" style="transition-delay: 300ms;">
                                <div class="scale-in-element p-2 bg-blue-100 rounded-full transition-all duration-500 transform scale-95">
                                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a4 4 0 100 8 4 4 0 000-8zM10 12a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800">Perempuan</h3>
                                <p class="animated-number text-2xl font-bold text-blue-600" data-target="679">0</p>
                            </div>
                        </div>
                    </div>

                    <div class="fade-in-element mb-12 bg-white rounded-2xl shadow-xl border border-gray-200 p-6 md:p-8 opacity-0 translate-y-4" style="transition-delay: 400ms;">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-gray-800">Komposisi Penduduk Berdasarkan Usia</h3>
                            <p class="mt-1 text-gray-500">Visualisasi sebaran penduduk dalam berbagai rentang usia.</p>
                        </div>
                        <div class="mt-8 bg-slate-100 rounded-xl p-4 shadow-inner max-w-2xl mx-auto">
                            <img src="{{ asset('images/chart jumlah masyarakat per umur.png') }}" alt="Grafik Komposisi Umur" class="w-full rounded-md">
                        </div>
                        <div class="mt-6 max-w-3xl mx-auto">
                            <div class="bg-blue-50 border-l-4 border-blue-500 rounded-r-lg p-4">
                                <p class="text-sm text-blue-900 leading-relaxed"><strong class="font-semibold">Analisis:</strong> Kelompok umur 11-20 tahun merupakan kelompok terbesar dengan total 255 jiwa, menunjukkan populasi desa yang relatif muda. Sebaliknya, kelompok usia 61+ adalah yang terendah (71 jiwa), mengindikasikan bonus demografi yang potensial.</p>
                            </div>
                            <p class="text-xs text-gray-400 text-right mt-2 italic">*Sumber: Data Kependudukan Desa per September 2024</p>
                        </div>
                    </div>

                    <div class="fade-in-element mb-12 bg-white rounded-2xl shadow-xl border border-gray-200 p-6 md:p-8 opacity-0 translate-y-4" style="transition-delay: 500ms;">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-gray-800">Jumlah Penduduk per Dusun</h3>
                            <p class="mt-1 text-gray-500">Perbandingan jumlah penduduk Laki-laki dan Perempuan di setiap dusun.</p>
                        </div>
                        <div class="mt-8 bg-slate-100 rounded-xl p-4 shadow-inner max-w-2xl mx-auto">
                            <img src="{{ asset('images/chart jumlah masyarakat per dusun.png') }}" alt="Grafik Penduduk per Dusun" class="w-full rounded-md">
                        </div>
                        <p class="text-xs text-gray-400 text-right mt-2 italic max-w-3xl mx-auto">*Sumber: Data Kependudukan Desa per September 2024</p>
                    </div>
                </div>

                <div id="content-potensi" class="tab-content hidden">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Potensi Unggulan Desa Mantikole</h2>
                        <p class="text-gray-600 max-w-3xl mx-auto leading-relaxed">
                            Jelajahi berbagai sumber daya dan keunggulan yang menjadi pilar pengembangan dan kesejahteraan masyarakat Desa Mantikole.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        
                        <div class="potensi-item group relative block h-96 rounded-xl overflow-hidden shadow-lg transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 cursor-pointer"
                            data-title="Potensi Wisata Alam"
                            data-content='[
                                {"title":"Air Panas Alami", "icon":"<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A8 8 0 0117.657 18.657z\" /><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9.879 16.121A3 3 0 1012.001 12A3 3 0 009.879 16.121z\" />", "image":"{{ asset('images/air terjun.png') }}", "description":"Sumber air panas alami yang menjadi destinasi relaksasi utama, dipercaya memiliki khasiat untuk kesehatan kulit."},
                                {"title":"Air Terjun Wera", "icon":"<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z\" />", "image":"{{ asset('images/air terjun.png') }}", "description":"Keindahan air terjun tersembunyi dengan suasana yang asri dan sejuk, cocok untuk melepas penat."},
                                {"title":"Trek Lintas Alam", "icon":"<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z\" />", "image":"{{ asset('images/air terjun.png') }}", "description":"Jalur pendakian menantang dengan pemandangan alam pegunungan yang memukau."},
                                {"title":"Agrowisata Durian", "icon":"<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M19.428 15.75c0 2.021-1.633 3.654-3.654 3.654s-3.654-1.633-3.654-3.654c0-2.021 1.633-3.654 3.654-3.654s3.654 1.633 3.654 3.654z\" />", "image":"{{ asset('images/air terjun.png') }}", "description":"Pengalaman memetik dan menikmati durian lokal berkualitas langsung dari kebunnya saat musim panen tiba."}
                            ]'>
                            <img src="{{ asset('images/air terjun.png') }}" alt="wisata" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                            <div class="relative p-6 flex flex-col justify-end h-full text-white">
                                <h3 class="text-3xl font-bold">Wisata</h3>
                                <p class="mt-2 text-sm opacity-90">Jelajahi keindahan alam Desa Mantikole, dari air terjun yang sejuk hingga pemandian air panas alami.</p>
                            </div>
                        </div>

                        <div class="potensi-item group relative block h-96 rounded-xl overflow-hidden shadow-lg transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 cursor-pointer"
                            data-title="Potensi Pertanian & Perkebunan"
                            data-content='[
                                {"title":"Durian Lokal Unggulan", "icon":"<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M19.428 15.75c0 2.021-1.633 3.654-3.654 3.654s-3.654-1.633-3.654-3.654c0-2.021 1.633-3.654 3.654-3.654s3.654 1.633 3.654 3.654z\" />", "image":"{{ asset('images/air terjun.png') }}", "description":"Desa Mantikole terkenal dengan kualitas dan rasa durian lokalnya yang khas dan legit."},
                                {"title":"Tanaman Pangan", "icon":"<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z\" />", "image":"{{ asset('images/air terjun.png') }}", "description":"Lahan subur yang dimanfaatkan untuk menanam padi, jagung, dan berbagai tanaman palawija."},
                                {"title":"Hortikultura", "icon":"<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2h10a2 2 0 002-2v-1a2 2 0 012-2h1.945M7.737 11a2 2 0 012.263 2h.001a2 2 0 012.263-2h1.472a2 2 0 011.999 2h.001a2 2 0 011.999-2h1.472M12 11V3m0 3h.01\" />", "image":"{{ asset('images/air terjun.png') }}", "description":"Budidaya sayur-mayur dan buah-buahan segar untuk memenuhi konsumsi lokal dan pasar sekitar."}
                            ]'>
                            <img src="{{ asset('images/air terjun.png') }}" alt="pertanian" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                            <div class="relative p-6 flex flex-col justify-end h-full text-white">
                                <h3 class="text-3xl font-bold">Pertanian</h3>
                                <p class="mt-2 text-sm opacity-90">Tanah subur yang menghasilkan produk berkualitas, termasuk durian lokal yang menjadi unggulan.</p>
                            </div>
                        </div>

                        <div class="potensi-item group relative block h-96 rounded-xl overflow-hidden shadow-lg transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 cursor-pointer"
                            data-title="Potensi Sosial & Budaya"
                            data-content='[
                                {"title":"Kearifan Lokal", "icon":"<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253\" />", "image":"{{ asset('images/air terjun.png') }}", "description":"Berbagai tradisi dan adat istiadat leluhur yang masih dijaga dan dihormati oleh masyarakat secara turun-temurun."},
                                {"title":"Gotong Royong", "icon":"<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z\" />", "image":"{{ asset('images/air terjun.png') }}", "description":"Semangat kebersamaan dan kerja sama yang kuat menjadi ciri khas dalam setiap kegiatan kemasyarakatan di desa."},
                                {"title":"Kerajinan Tangan", "icon":"<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z\" />", "image":"{{ asset('images/air terjun.png') }}", "description":"Produksi kerajinan tangan seperti anyaman dan ukiran kayu yang memiliki nilai seni dan ekonomi."}
                            ]'>
                            <img src="{{ asset('images/air terjun.png') }}" alt="budaya" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                            <div class="relative p-6 flex flex-col justify-end h-full text-white">
                                <h3 class="text-3xl font-bold">Budaya</h3>
                                <p class="mt-2 text-sm opacity-90">Rasakan kearifan lokal melalui tradisi dan upacara adat yang masih lestari hingga kini.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="bg-transparent pt-16 px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl font-extrabold text-blue-800 text-center mb-2">Geografi Desa</h2>
                <p class="text-gray-600 text-center mb-10 max-w-lg mx-auto">
                    Informasi geografis dan karakteristik wilayah desa secara komprehensif.
                </p>
                <div class="bg-white rounded-xl shadow-lg p-8 grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                    <div class="w-full h-80 md:h-96 rounded-lg overflow-hidden shadow-inner border border-gray-300">
                        <iframe class="w-full h-full" src="https://www.google.com/maps/d/embed?mid=198WoHjZVirYoSIvORdm0hOoQpsJtzcM&ehbc=2E312F" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="bg-gray-50 rounded-lg p-6 flex flex-col items-start space-y-2 border border-gray-200 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                            <div class="p-2 bg-blue-100 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg></div>
                            <h3 class="text-xl font-semibold text-gray-800">Koordinat</h3>
                            <p class="text-gray-600 text-sm">-1.0707590425110096, 119.82835609483008</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-6 flex flex-col items-start space-y-2 border border-gray-200 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                            <div class="p-2 bg-blue-100 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18a9 9 0 01-9-9m9 9c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 01-9-9" /></svg></div>
                            <h3 class="text-xl font-semibold text-gray-800">Luas Wilayah</h3>
                            <p class="text-gray-600 text-sm">12.54 km²</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-6 flex flex-col items-start space-y-2 border border-gray-200 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                            <div class="p-2 bg-blue-100 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg></div>
                            <h3 class="text-xl font-semibold text-gray-800">Ketinggian</h3>
                            <p class="text-gray-600 text-sm">>=79 mdpl</p>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-6 flex flex-col items-start space-y-2 border border-gray-200 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                            <div class="p-2 bg-blue-100 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h10M12 21V3" /></svg></div>
                            <h3 class="text-xl font-semibold text-gray-800">Iklim</h3>
                            <p class="text-gray-600 text-sm">Tropis</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <div id="potensiModal" class="fixed inset-0 bg-black bg-opacity-80 z-50 hidden items-center justify-center p-4 opacity-0 transition-opacity duration-300">
        <div class="relative bg-white rounded-2xl shadow-2xl max-w-5xl w-full mx-auto overflow-hidden transform scale-95 opacity-0 transition-all duration-300 ease-out" style="height: 600px;">
            <button id="closePotensiModal" class="absolute top-4 right-4 text-gray-500 hover:text-red-600 transition-colors duration-200 z-20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
            <div class="flex h-full">
                <div class="hidden md:block md:w-1/2 bg-gray-100">
                    <img id="potensiModalImage" src="" alt="Gambar Potensi" class="w-full h-full object-cover transition-all duration-500">
                </div>
                <div class="w-full md:w-1/2 p-8 flex flex-col overflow-y-auto">
                    <h3 id="potensiModalTitle" class="text-3xl font-bold text-blue-800 mb-6 leading-tight flex-shrink-0"></h3>
                    <div class="flex-grow grid grid-cols-1 md:grid-cols-12 gap-6">
                        <div id="potensiModalNav" class="md:col-span-5 space-y-2">
                            </div>
                        <div id="potensiModalContentArea" class="md:col-span-7">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showTab(tabName) {
            const tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(content => content.classList.add('hidden'));
            const tabButtons = document.querySelectorAll('.tab-button');
            tabButtons.forEach(button => button.classList.remove('bg-white', 'shadow-lg'));
            const selectedContent = document.getElementById('content-' + tabName);
            if (selectedContent) selectedContent.classList.remove('hidden');
            const selectedButton = document.getElementById('tab-' + tabName);
            if (selectedButton) selectedButton.classList.add('bg-white', 'shadow-lg');
            if (tabName === 'demografi') {
                observeElementsForAnimation();
            }
        }

        function animateNumbers(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const target = parseInt(el.dataset.target);
                    let startTimestamp = null;
                    const duration = 2000;
                    const step = timestamp => {
                        if (!startTimestamp) startTimestamp = timestamp;
                        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                        el.textContent = Math.floor(progress * target).toLocaleString('id-ID');
                        if (progress < 1) window.requestAnimationFrame(step);
                    };
                    window.requestAnimationFrame(step);
                    observer.unobserve(el);
                }
            });
        }

        function handleIntersect(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (entry.target.classList.contains('fade-in-element')) entry.target.classList.remove('opacity-0', 'translate-y-4');
                    if (entry.target.classList.contains('scale-in-element')) entry.target.classList.remove('scale-95');
                    observer.unobserve(entry.target);
                }
            });
        }

        function observeElementsForAnimation() {
            const options = { threshold: 0.1 };
            const numObserver = new IntersectionObserver(animateNumbers, options);
            document.querySelectorAll('.animated-number').forEach(el => { el.textContent = '0'; numObserver.observe(el); });
            const genObserver = new IntersectionObserver(handleIntersect, options);
            document.querySelectorAll('.fade-in-element, .scale-in-element').forEach(el => {
                if(el.classList.contains('fade-in-element')) el.classList.add('opacity-0', 'translate-y-4');
                if(el.classList.contains('scale-in-element')) el.classList.add('scale-95');
                genObserver.observe(el);
            });
        }

        document.addEventListener('DOMContentLoaded', () => showTab('demografi'));

        const potensiModal = document.getElementById('potensiModal');
        const closePotensiModalBtn = document.getElementById('closePotensiModal');
        const potensiModalContentContainer = potensiModal.querySelector('.relative.bg-white');
        const potensiModalImage = document.getElementById('potensiModalImage');
        const potensiModalTitle = document.getElementById('potensiModalTitle');
        const potensiModalNav = document.getElementById('potensiModalNav');
        const potensiModalContentArea = document.getElementById('potensiModalContentArea');
        const potensiItems = document.querySelectorAll('.potensi-item');

        function openPotensiModal(item) {
            potensiModalTitle.textContent = item.dataset.title;
            const subChapters = JSON.parse(item.dataset.content.replace(/'/g, '"'));
            potensiModalNav.innerHTML = '';

            subChapters.forEach(sub => {
                const navButton = document.createElement('button');
                navButton.innerHTML = `<div class="flex items-center space-x-3"><div class="flex-shrink-0"><svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">${sub.icon}</svg></div><span>${sub.title}</span></div>`;
                navButton.className = 'sub-chapter-btn w-full text-left text-sm font-medium p-3 rounded-lg border border-transparent transition-all duration-200 flex items-center text-gray-600 hover:bg-gray-100';
                navButton.onclick = () => {
                    potensiModalImage.style.opacity = 0;
                    setTimeout(() => {
                        potensiModalImage.src = sub.image;
                        potensiModalImage.style.opacity = 1;
                    }, 200);
                    potensiModalContentArea.innerHTML = `<div class="content-pane"><h4 class="font-bold text-xl text-gray-800 mb-2">${sub.title}</h4><p class="text-gray-600 leading-relaxed">${sub.description}</p></div>`;
                    document.querySelectorAll('.sub-chapter-btn').forEach(btn => btn.classList.remove('bg-blue-50', 'text-blue-700', 'border-blue-200'));
                    navButton.classList.add('bg-blue-50', 'text-blue-700', 'border-blue-200');
                };
                potensiModalNav.appendChild(navButton);
            });

            if (subChapters.length > 0) potensiModalNav.querySelector('button').click();
            
            potensiModal.classList.remove('hidden');
            potensiModal.classList.add('flex');
            setTimeout(() => {
                potensiModal.classList.remove('opacity-0');
                potensiModalContentContainer.classList.remove('scale-95', 'opacity-0');
            }, 50);
        }

        function closePotensiModal() {
            potensiModal.classList.add('opacity-0');
            potensiModalContentContainer.classList.add('scale-95', 'opacity-0');
            setTimeout(() => {
                potensiModal.classList.add('hidden');
                potensiModal.classList.remove('flex');
            }, 300);
        }

        potensiItems.forEach(item => item.addEventListener('click', () => openPotensiModal(item)));
        closePotensiModalBtn.addEventListener('click', closePotensiModal);
        potensiModal.addEventListener('click', e => { if (e.target === potensiModal) closePotensiModal(); });
        window.addEventListener('keydown', e => { if (e.key === 'Escape' && !potensiModal.classList.contains('hidden')) closePotensiModal(); });
    </script>
@endsection