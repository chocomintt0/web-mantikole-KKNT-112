<div id="navbar-wrapper" class="fixed top-0 md:top-4 w-full z-50 transition-all duration-300 ease-in-out">
    <nav id="navbar" class="w-[95%] md:w-[800px] mx-auto z-50 py-2 px-4 sm:px-6 rounded-2xl md:rounded-[30px] shadow-lg transition-all duration-300 ease-in-out bg-blue-600 text-white">
        <div class="flex justify-between items-center h-12">
            
            <a href="{{ route('beranda.index') }}" class="flex items-center space-x-3">
                <img src="{{ asset('images/kabupaten-sigi-seeklogo.png') }}" alt="Logo" class="h-9 w-8">
                <span class="font-bold text-lg">Admin Mantikole</span>
            </a>

            <ul class="hidden md:flex gap-x-6 font-medium">
                <li><a href="{{ route('admin-layanan.index') }}" class="relative nav-link {{ Request::routeIs('admin-layanan.index') ? 'active-link' : '' }} hover:text-gray-200 transition-colors duration-200">Manajemen Layanan</a></li>
                <li><a href="{{ route('admin-berita.index') }}" class="relative nav-link {{ Request::routeIs('admin-berita.index') ? 'active-link' : '' }} hover:text-gray-200 transition-colors duration-200">Manajemen Berita</a></li>
            </ul>

            <div class="md:hidden">
                <button id="mobile-menu-button" class="p-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-white">
                    <svg id="menu-open-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                    <svg id="menu-close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="md:hidden overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
            <ul class="flex flex-col pt-4 mt-2 border-t border-white/20 space-y-2">
                <li><a href="{{ route('admin-layanan.index') }}" class="block py-2 px-3 rounded hover:bg-blue-800 {{ Request::routeIs('admin-layanan.index') ? 'active-mobile-link' : '' }}">Manajemen Layanan</a></li>
                <li><a href="{{ route('admin-berita.index') }}" class="block py-2 px-3 rounded hover:bg-blue-800 {{ Request::routeIs('admin-berita.index') ? 'active-mobile-link' : '' }}">Manajemen Berita</a></li>
            </ul>
        </div>
    </nav>
</div>

<style>
    .nav-link { padding-bottom: 4px; position: relative; text-decoration: none; }
    .nav-link::after { content: ''; position: absolute; width: 100%; height: 2px; bottom: 0; left: 0; background-color: currentColor; transform: scaleX(0); transition: transform 0.3s ease-in-out; }
    .nav-link:hover::after, .nav-link.active-link::after { transform: scaleX(1); }
    .active-mobile-link { background-color: rgba(255, 255, 255, 0.1); font-weight: bold; }
    .scrolled-bg { background-color: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px); }
    .scrolled-text { color: #1F2937; /* Teks abu-abu gelap */ }
    .scrolled-mobile-menu { background-color: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px); }
    .scrolled-mobile-menu a { color: #1F2937; }
    .scrolled-mobile-menu .active-mobile-link { background-color: rgba(59, 130, 246, 0.1); }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.getElementById('navbar');
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuOpenIcon = document.getElementById('menu-open-icon');
        const menuCloseIcon = document.getElementById('menu-close-icon');
        const scrollThreshold = 50;

        window.addEventListener('scroll', function() {
            if (window.scrollY > scrollThreshold) {
                navbar.classList.add('scrolled-bg', 'scrolled-text');
                navbar.classList.remove('bg-blue-600', 'text-white');
                mobileMenu.classList.add('scrolled-mobile-menu');
            } else {
                navbar.classList.remove('scrolled-bg', 'scrolled-text');
                navbar.classList.add('bg-blue-600', 'text-white');
                mobileMenu.classList.remove('scrolled-mobile-menu');
            }
        });

        mobileMenuButton.addEventListener('click', function() {
            const isExpanded = mobileMenu.classList.contains('max-h-screen');
            
            menuOpenIcon.classList.toggle('hidden', !isExpanded);
            menuCloseIcon.classList.toggle('hidden', isExpanded);
            
            if (isExpanded) {
                mobileMenu.classList.remove('max-h-screen');
                mobileMenu.classList.add('max-h-0');
            } else {
                mobileMenu.classList.remove('max-h-0');
                mobileMenu.classList.add('max-h-screen');
            }
        });
    });
</script>