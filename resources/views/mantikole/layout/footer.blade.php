<footer class="bg-gray-900 text-gray-300 mt-10">
    <div class="max-w-7xl mx-auto px-4 py-16">
        <div class="bg-gray-800 rounded-3xl p-8 md:p-12 shadow-2xl">
            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-12 text-center md:text-left">
                <div class="lg:col-span-2 space-y-4">
                    <div class="flex items-center justify-center md:justify-start space-x-1 mb-0 pb-0">
                        <img src="images/LOGO 1.png" alt="Logo" class="h-14 w-auto hover:text-white transition-all duration-300 transform hover:-translate-y-0.5">
                    </div>
                    <div>
                        <p class="text-sm text-gray-400">Website Resmi Desa Mantikole</p>
                    </div>
                    <p class="text-sm text-gray-400 max-w-lg mx-auto md:mx-0">
                        Menyajikan informasi publik dan layanan digital yang transparan untuk seluruh warga dan masyarakat umum.
                    </p>
                </div>

                <div class="space-y-4">
                    <h4 class="font-bold text-lg text-white tracking-wide inline-block hover:text-white transition-all duration-300 transform hover:-translate-y-0.5">Navigasi</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="inline-block hover:text-blue-400 transition-all duration-300 transform hover:-translate-y-0.5">Beranda</a></li>
                        <li><a href="#" class="inline-block hover:text-blue-400 transition-all duration-300 transform hover:-translate-y-0.5">Profil Desa</a></li>
                        <li><a href="#" class="inline-block hover:text-blue-400 transition-all duration-300 transform hover:-translate-y-0.5">Infografis</a></li>
                        <li><a href="#" class="inline-block hover:text-blue-400 transition-all duration-300 transform hover:-translate-y-0.5">Layanan Publik</a></li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h4 class="font-bold text-lg text-white tracking-wide inline-block hover:text-white transition-all duration-300 transform hover:-translate-y-0.5">Kontak & Media</h4>
                    <p class="text-sm text-gray-400">Desa Mantikole, Kec. Dolo Barat , Kab. Sigi<br>
                        Email: <a href="mailto:info@mantikole.com" class="hover:text-blue-400 transition-colors duration-200">mantikole1965@gmail.com</a></p>
                    <div class="flex justify-center md:justify-start space-x-6">
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition-all duration-300 transform hover:scale-110" aria-label="instagram">
                            <img src="images/icons/instagram (1).png" alt="" class="w-7 h-7">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-t border-gray-700 mx-auto px-4 py-4 text-center text-xs text-gray-500">
        &copy; 2025 Powered by KKN Tematik 112 Mantikole
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const footer = document.getElementById('footer');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-y-8');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2
        });

        if (footer) {
            observer.observe(footer);
        }
    });
</script>