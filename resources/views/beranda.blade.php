<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Layanan RT Terpadu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-white min-h-screen">

    <nav id="mainNav" class="fixed top-0 left-0 w-full z-[100] py-5 px-6 md:px-10 lg:px-12 flex justify-between items-center text-white transition-all duration-300">
        <div class="flex items-center gap-5 lg:gap-8">
            <a href="{{ route('beranda') }}">
                <img src="{{ asset('images/logort.png') }}" alt="Logo RT" class="h-10 md:h-[42px] w-auto drop-shadow-md hover:scale-105 transition-transform">
            </a>

            <div class="hidden lg:flex items-center gap-5 text-[15px] tracking-wide">
                <a href="#" class="font-extrabold text-[17px] drop-shadow-sm">Beranda</a>
                
                <a href="#" class="flex items-center gap-1 hover:text-white/80 transition cursor-pointer font-medium">
                    Profil
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                
                <a href="#" class="hover:text-white/80 transition font-medium">Acara</a>
                <a href="#" class="hover:text-white/80 transition font-medium">Lokasi</a>
                <a href="#" class="hover:text-white/80 transition font-medium">Informasi</a>
                <a href="#" class="hover:text-white/80 transition font-medium">Galeri</a>
                
                <a href="#" class="hover:text-white/80 transition font-medium">
                    <span class="text-[#ef4444] font-bold drop-shadow-sm">Live</span> Report
                </a>
            </div>
        </div>

        <div class="hidden md:block">
            <div class="relative">
                <input id="searchInput" type="text" placeholder="Cari Berita..." class="py-1.5 pl-4 pr-10 rounded text-gray-700 text-[13px] focus:outline-none w-64 lg:w-72 shadow-sm bg-white/90 border border-transparent transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 absolute right-3 top-2 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </nav>

 <section class="relative pt-32 pb-32 px-6 md:px-20 overflow-hidden flex items-center min-h-[520px]">
    
    <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
        <source src="{{ asset('videos/back.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-[#c09015]/80 via-[#d4a017]/60 to-[#fcd34d]/40 z-10"></div>

    <div class="max-w-4xl relative z-20 w-full md:w-1/2">
        <div class="mb-6 fade-up opacity-0 translate-y-8 transition-all duration-1000">
            <img src="{{ asset('images/logort.png') }}" alt="Logo RT" class="w-20 md:w-28 h-auto drop-shadow-xl mb-6 hover:scale-105 transition-transform duration-300">
            
            <h2 class="text-white/90 text-xs md:text-sm font-semibold mb-2 tracking-widest uppercase drop-shadow-sm">
                Lingkungan Maju, Aman, dan Sejahtera
            </h2>
            <h1 class="text-white text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight drop-shadow-md">
                Layanan Terpadu <br> RT 01 
            </h1>
            
            <p class="text-white/90 mt-5 max-w-md text-[14px] md:text-base leading-relaxed drop-shadow-sm font-medium">
                Selamat datang di Portal Informasi dan Layanan Digital. Bersama kita wujudkan lingkungan yang responsif, transparan, dan terhubung secara langsung.
            </p>

            <div class="mt-8 flex gap-4">
                <a href="#" class="bg-white text-[#d4a017] px-8 py-3 rounded-full font-bold text-sm shadow-lg hover:bg-gray-50 hover:-translate-y-1 transition-all duration-300 flex items-center gap-2">
                    Jelajahi Layanan
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 right-0 md:right-10 lg:right-16 z-20 hidden md:block w-[45%] max-w-[550px] pointer-events-none">
        <img src="{{ asset('images/siluet.png') }}" alt="Siluet Warga" class="w-full h-auto object-contain object-bottom opacity-90 drop-shadow-2xl">
    </div>

    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-30">
        <svg class="relative block w-full h-[60px] md:h-[120px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.08,130.83,123.8,188.47,115,234.35,107.91,278.36,83.9,321.39,56.44Z" fill="#ffffff"></path>
        </svg>
    </div>
</section>



    <section class="bg-white -mt-10 md:-mt-16 relative z-20 pb-16 px-4">
        <div class="max-w-5xl mx-auto bg-white rounded-3xl shadow-[0_10px_40px_rgba(0,0,0,0.04)] border border-gray-50 p-8 md:p-12">
            <div class="grid grid-cols-3 md:grid-cols-5 gap-y-10 gap-x-4 justify-items-center">
                
                <a href="{{ route('lapor.index') }}" class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-full flex items-center justify-center shadow-[0_4px_20px_rgba(0,0,0,0.06)] mb-3 group-hover:-translate-y-1 group-hover:shadow-[0_8px_25px_rgba(0,0,0,0.12)] transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-10 md:w-10 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                        </svg>
                    </div>
                    <span class="text-xs md:text-sm font-semibold text-gray-700 text-center">Lapor Warga</span>
                </a>

                <a href="#" class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-full flex items-center justify-center shadow-[0_4px_20px_rgba(0,0,0,0.06)] mb-3 group-hover:-translate-y-1 group-hover:shadow-[0_8px_25px_rgba(0,0,0,0.12)] transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-10 md:w-10 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <span class="text-xs md:text-sm font-semibold text-gray-700 text-center">Data Warga</span>
                </a>

                <a href="#" class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-full flex items-center justify-center shadow-[0_4px_20px_rgba(0,0,0,0.06)] mb-3 group-hover:-translate-y-1 group-hover:shadow-[0_8px_25px_rgba(0,0,0,0.12)] transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-10 md:w-10 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="text-xs md:text-sm font-semibold text-gray-700 text-center">Transparansi Kas</span>
                </a>

                <a href="#" class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-full flex items-center justify-center shadow-[0_4px_20px_rgba(0,0,0,0.06)] mb-3 group-hover:-translate-y-1 group-hover:shadow-[0_8px_25px_rgba(0,0,0,0.12)] transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-10 md:w-10 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <span class="text-xs md:text-sm font-semibold text-gray-700 text-center">Surat Pengantar</span>
                </a>

                <a href="#" class="flex flex-col items-center group cursor-pointer">
                    <div class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-full flex items-center justify-center shadow-[0_4px_20px_rgba(0,0,0,0.06)] mb-3 group-hover:-translate-y-1 group-hover:shadow-[0_8px_25px_rgba(0,0,0,0.12)] transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-10 md:w-10 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <span class="text-xs md:text-sm font-semibold text-gray-700 text-center">UMKM Warga</span>
                </a>
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 lg:px-8 py-10 mb-12 bg-white overflow-hidden">
        <div class="fade-up opacity-0 translate-y-12 transition-all duration-[800ms] ease-out flex flex-col md:flex-row justify-between items-start md:items-end mb-8">
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-1">Berita Terbaru</h2>
                <p class="text-gray-600 text-[15px]">Temukan informasi kegiatan Rukun Tetangga 01</p>
            </div>
            <a href="#" class="text-gray-700 hover:text-[#d4a017] underline text-sm font-medium mt-4 md:mt-0 transition-colors">Lihat lebih banyak</a>
        </div>

        <div class="fade-up opacity-0 translate-y-12 transition-all duration-[800ms] ease-out delay-100 flex flex-col md:flex-row gap-6 mb-8 group cursor-pointer border-b border-gray-100 pb-10">
            <div class="w-full md:w-[60%] overflow-hidden rounded-2xl">
                <img src="https://images.unsplash.com/photo-1577563908411-5077b6dc7624?q=80&w=1000&auto=format&fit=crop" alt="Berita Utama" class="w-full h-64 md:h-[350px] object-cover group-hover:scale-105 transition-transform duration-700">
            </div>
            <div class="w-full md:w-[40%] flex flex-col justify-center py-4">
                <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                    <span class="font-semibold text-gray-700">Humas RT</span>
                    <span>Kamis, 9 April 2026</span>
                </div>
                <h3 class="text-2xl lg:text-3xl font-bold text-gray-800 mb-4 group-hover:text-[#d4a017] transition-colors leading-snug">Rapat Paripurna Pengurus RT Bahas Rencana Kegiatan</h3>
                <p class="text-gray-600 leading-relaxed line-clamp-4">Rapat musyawarah pengurus RT 01 menyetujui rencana perubahan tata tertib lingkungan mengenai iuran kebersihan...</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="fade-up opacity-0 translate-y-12 transition-all duration-[800ms] ease-out delay-[200ms] group cursor-pointer">
                <div class="overflow-hidden rounded-2xl mb-4 h-52">
                    <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?q=80&w=500&auto=format&fit=crop" alt="Berita 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <h4 class="text-lg font-bold text-gray-800 group-hover:text-[#d4a017] transition-colors">Pertemuan Rutin PKK di Balai Warga</h4>
            </div>
            <div class="fade-up opacity-0 translate-y-12 transition-all duration-[800ms] ease-out delay-[350ms] group cursor-pointer">
                <div class="overflow-hidden rounded-2xl mb-4 h-52">
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=500&auto=format&fit=crop" alt="Berita 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <h4 class="text-lg font-bold text-gray-800 group-hover:text-[#d4a017] transition-colors">Sosialisasi Pengelolaan Sampah Mandiri</h4>
            </div>
            <div class="fade-up opacity-0 translate-y-12 transition-all duration-[800ms] ease-out delay-[500ms] group cursor-pointer">
                <div class="overflow-hidden rounded-2xl mb-4 h-52">
                    <img src="https://images.unsplash.com/photo-1526976663112-004cb6b515d9?q=80&w=500&auto=format&fit=crop" alt="Berita 3" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <h4 class="text-lg font-bold text-gray-800 group-hover:text-[#d4a017] transition-colors">Seleksi Siskamling Menjelang Lebaran</h4>
            </div>
        </div>
    </section>

    <footer class="bg-[#1f2328] text-gray-300 py-12 px-6 md:px-12">
        <div class="max-w-6xl mx-auto">
            <img src="{{ asset('images/logort.png') }}" alt="Logo RT" class="h-16 mb-6 opacity-90">
            <p class="text-[15px] leading-relaxed mb-6 font-medium">
                Jalan A. Yani Kawasan Pembatuan RT. 01 Kel. Kintapura <br class="hidden md:block">
                Kabupaten Tanah Laut, Kalimantan Selatan
            </p>
            <hr class="border-gray-700 mb-6">
            <p class="text-sm text-gray-400">Pengurus RT 01 &copy; 2026.</p>
        </div>
    </footer>

    <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            const nav = document.getElementById("mainNav");
            const search = document.getElementById("searchInput");
            
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                // Saat scroll ke bawah: Background jadi Putih, Teks jadi Hitam
                nav.classList.remove("text-white", "py-5", "absolute");
                nav.classList.add("bg-white", "shadow-md", "text-gray-800", "py-3", "fixed");
                search.classList.add("bg-gray-100");
                search.classList.remove("bg-white/90");
            } else {
                // Saat di paling atas: Transparan, Teks Putih
                nav.classList.add("text-white", "py-5", "absolute");
                nav.classList.remove("bg-white", "shadow-md", "text-gray-800", "py-3", "fixed");
                search.classList.remove("bg-gray-100");
                search.classList.add("bg-white/90");
            }
        }

        // Script Animasi Fade-Up (tetap ada)
        document.addEventListener("DOMContentLoaded", function() {
            const observerOptions = { threshold: 0.1 };
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('opacity-0', 'translate-y-12');
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const fadeElements = document.querySelectorAll('.fade-up');
            fadeElements.forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>