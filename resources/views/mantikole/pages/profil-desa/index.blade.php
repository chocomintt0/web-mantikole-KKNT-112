@extends('mantikole.layout.app')

@section('content')
<section class="bg-slate-50 py-16 px-4">
    <div class="max-w-5xl mx-auto">
        <div class="bg-white rounded-2xl shadow-xl border border-gray-200 p-6 sm:p-8 md:p-12 space-y-16">

            <div class="relative text-center">
                <svg class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-32 md:w-48 md:h-48 text-gray-100" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z"/>
                </svg>
                <div class="relative">
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-blue-800 mb-4">Visi</h2>
                    <p class="text-lg md:text-xl italic text-gray-700 max-w-3xl mx-auto leading-relaxed">
                        "Mewujudkan desa yang maju, mandiri, dan sejahtera dengan memanfaatkan potensi lokal dan teknologi modern untuk kesejahteraan masyarakat."
                    </p>
                </div>
            </div>

            <div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-blue-800 mb-10 text-center">Misi</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    {{-- PENYESUAIAN MOBILE: Kartu Misi diperkecil --}}
                    <div class="group relative bg-gray-50 rounded-xl p-5 md:p-6 border border-gray-200 overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                        <div class="absolute top-0 left-0 w-full h-1 bg-transparent transition-colors duration-300 group-hover:bg-blue-500"></div>
                        <div class="absolute top-6 right-6 text-7xl md:text-8xl font-black text-gray-200 transition-colors duration-300 group-hover:text-gray-200/50">01</div>
                        <div class="relative z-10">
                            <div class="bg-blue-100 text-blue-600 rounded-lg p-2 md:p-3 inline-block mb-3 md:mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-2">Pelayanan Publik</h3>
                            <p class="text-gray-600 text-sm">
                                Meningkatkan kualitas pelayanan publik yang efisien, transparan, dan mudah diakses oleh seluruh warga.
                            </p>
                        </div>
                    </div>

                    <div class="group relative bg-gray-50 rounded-xl p-5 md:p-6 border border-gray-200 overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                        <div class="absolute top-0 left-0 w-full h-1 bg-transparent transition-colors duration-300 group-hover:bg-green-500"></div>
                        <div class="absolute top-6 right-6 text-7xl md:text-8xl font-black text-gray-200 transition-colors duration-300 group-hover:text-gray-200/50">02</div>
                        <div class="relative z-10">
                            <div class="bg-green-100 text-green-600 rounded-lg p-2 md:p-3 inline-block mb-3 md:mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-2">Pelestarian Budaya</h3>
                            <p class="text-gray-600 text-sm">
                                Melestarikan dan mengembangkan budaya serta tradisi lokal sebagai identitas desa yang berharga.
                            </p>
                        </div>
                    </div>

                    <div class="group relative bg-gray-50 rounded-xl p-5 md:p-6 border border-gray-200 overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                        <div class="absolute top-0 left-0 w-full h-1 bg-transparent transition-colors duration-300 group-hover:bg-purple-500"></div>
                        <div class="absolute top-6 right-6 text-7xl md:text-8xl font-black text-gray-200 transition-colors duration-300 group-hover:text-gray-200/50">03</div>
                        <div class="relative z-10">
                            <div class="bg-purple-100 text-purple-600 rounded-lg p-2 md:p-3 inline-block mb-3 md:mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                            </div>
                            <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-2">Peningkatan Ekonomi</h3>
                            <p class="text-gray-600 text-sm">
                                Mendorong pertumbuhan ekonomi desa melalui pemberdayaan UMKM dan potensi agrowisata.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="bg-gradient-to-r from-gray-50 to-gray-100 py-16 px-4">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-blue-800">Bagan Desa</h2>
            <p class="mt-2 text-lg text-gray-600">Struktur Organisasi Pemerintahan Desa Mantikole</p>
        </div>

        <div id="openBaganModal" 
             class="group bg-white rounded-2xl shadow-xl border border-gray-200 p-4 sm:p-6 transition-all duration-300 hover:shadow-2xl hover:border-blue-300 cursor-pointer"
             data-title="Struktur Pemerintahan Desa Mantikole"
             data-description="Ini adalah bagan struktur resmi Pemerintahan Desa Mantikole yang menunjukkan hierarki dan jabatan perangkat desa."
             data-img-src="{{ asset('images/bagan desa.png') }}">
            
            <div class="relative rounded-xl overflow-hidden shadow-inner">
                <img src="{{ asset('images/bagan desa.png') }}" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">

                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-60 transition-all duration-300 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mb-2 transform transition-transform group-hover:scale-110" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <p class="font-semibold tracking-wider">Klik untuk memperbesar</p>
                </div>
            </div>
        </div>
    </div>

    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden items-center justify-center p-4 opacity-0 transition-opacity duration-300">
        <div class="relative bg-white rounded-xl shadow-2xl max-w-6xl w-full h-[90vh] mx-auto overflow-hidden transform scale-75 opacity-0 transition-all duration-300 ease-out flex items-center justify-center">
            <button id="closeImageModal" class="absolute top-3 right-3 text-white hover:text-red-500 bg-gray-800 bg-opacity-70 rounded-full p-2 shadow-md transition-colors duration-200 z-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <img id="modalImage" src="" alt="Gambar Detail" class="max-w-full max-h-full object-contain rounded-lg">
        </div>
    </div>
</section>

<section class="bg-gray-100 py-16 px-4">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-800">Tonggak Sejarah Desa Mantikole</h2>
            <p class="mt-2 text-lg text-gray-600">Momen-momen penting dalam perjalanan desa kami.</p>
        </div>

        <div class="relative">
            <div class="absolute left-4 top-1 h-full w-0.5 bg-blue-300 md:left-1/2 md:-translate-x-1/2"></div>
            
            <div class="space-y-12">
                <div class="relative group">
                    <div class="md:grid md:grid-cols-2 md:gap-8 items-start">
                        <div class="md:text-right pl-12 md:pl-0 md:pr-12">
                            <div class="absolute left-4 top-1 -ml-[9px] w-5 h-5 bg-blue-400 rounded-full z-10 md:left-1/2 md:-ml-2.5 transition-colors duration-300 group-hover:bg-blue-800"></div>
                            <h3 class="text-xl font-bold text-gray-800">1891 - Awal Mula</h3>
                            <p class="text-sm text-gray-600">Desa Bobo(Nama sebelum berubah menjadi Mantikole) didirikan setelah memisahkan diri dari Pesaku.</p>
                        </div>
                        <div class="mt-4 md:mt-0 ml-12 md:ml-0 bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-500 group-hover:border-blue-700 transition-colors duration-300">
                            <p class="text-gray-700">Desa Bobo ini pada awalnya dihuni oleh sekelompok pendatang dari berbagai daerah.</p>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <div class="md:grid md:grid-cols-2 md:gap-8 items-start">
                        <div class="md:order-2 md:text-left pl-12">
                            <div class="absolute left-4 top-1 -ml-[9px] w-5 h-5 bg-blue-400 rounded-full z-10 md:left-1/2 md:-ml-2.5 transition-colors duration-300 group-hover:bg-blue-800"></div>
                            <h3 class="text-xl font-bold text-gray-800">1935 - Masa Transisi</h3>
                            <p class="text-sm text-gray-600">Nama Mantikole berasal dari era ini, terkait dengan aktivitas kolonial Belanda yang membakar pohon manti secara "sepanggal-sepanggal" (kole) di pegunungan untuk dijadikan kebun.</p>
                        </div>
                        <div class="mt-4 md:mt-0 ml-12 md:ml-0 md:order-1 md:text-right bg-white p-6 rounded-lg shadow-md border-l-4 md:border-l-0 md:border-r-4 border-blue-500 group-hover:border-blue-700 transition-colors duration-300">
                            <p class="text-gray-700">Kemudian Kampung Bobo terbagi menjadi dua wilayah, yaitu Bobo Gunung dan Bobo Tanah Rata.</p>
                        </div>
                    </div>
                </div>

                 <div class="relative group">
                    <div class="md:grid md:grid-cols-2 md:gap-8 items-start">
                        <div class="md:text-right pl-12 md:pl-0 md:pr-12">
                            <div class="absolute left-4 top-1 -ml-[9px] w-5 h-5 bg-blue-400 rounded-full z-10 md:left-1/2 md:-ml-2.5 transition-colors duration-300 group-hover:bg-blue-800"></div>
                            <h3 class="text-xl font-bold text-gray-800">1965 - Masa Setelah Transisi</h3>
                            <p class="text-sm text-gray-600">Kampung Bobo Gunung diubah namanya menjadi Mantikole.</p>
                        </div>
                        <div class="mt-4 md:mt-0 ml-12 md:ml-0 bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-500 group-hover:border-blue-700 transition-colors duration-300">
                            <p class="text-gray-700">Desa ini kini dikenal sebagai salah satu desa di Kabupaten Sigi yang memiliki potensi wisata alam, salah satunya adalah pemandian air panas alami.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    // Fungsionalitas Modal untuk Bagan Desa
    const imageModal = document.getElementById('imageModal');
    const openBaganBtn = document.getElementById('openBaganModal');
    const closeImageModalBtn = document.getElementById('closeImageModal');
    const modalImage = document.getElementById('modalImage');
    const modalContent = imageModal ? imageModal.querySelector('.relative.bg-white') : null;

    function openImageModal(item) {
        if (!imageModal || !modalImage) return;
        modalImage.src = item.dataset.imgSrc;

        imageModal.classList.remove('hidden');
        imageModal.classList.add('flex');
        setTimeout(() => {
            imageModal.classList.remove('opacity-0');
            if (modalContent) modalContent.classList.remove('scale-75', 'opacity-0');
        }, 50);
    }

    function closeImageModal() {
        if (!imageModal) return;
        imageModal.classList.add('opacity-0');
        if (modalContent) modalContent.classList.add('scale-75', 'opacity-0');
        
        setTimeout(() => {
            imageModal.classList.add('hidden');
            imageModal.classList.remove('flex');
        }, 300);
    }

    if (openBaganBtn) {
        openBaganBtn.addEventListener('click', () => {
            openImageModal(openBaganBtn);
        });
    }

    if (closeImageModalBtn) {
        closeImageModalBtn.addEventListener('click', closeImageModal);
    }
    
    if (imageModal) {
        imageModal.addEventListener('click', (event) => {
            if (event.target === imageModal) {
                closeImageModal();
            }
        });
    }

    window.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && imageModal && !imageModal.classList.contains('hidden')) {
            closeImageModal();
        }
    });

</script>

@endsection