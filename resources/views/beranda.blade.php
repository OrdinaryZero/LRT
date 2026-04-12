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
        html { scroll-behavior: smooth; } 
        /* 1. Kondisi A: Saat Masih Tersembunyi */
.reveal {
    opacity: 0;
    transform: translateY(40px); /* Jarak muncul dari bawah */
    transition: all 0.8s ease-out; /* Durasi 0.8 detik, silakan ubah sesuka hati */
}

/* 2. Kondisi B: Saat Sudah Muncul (Dikasih class 'active' lewat JS) */
.reveal.active {
    opacity: 1;
    transform: translateY(0);
}

@keyframes galeriSlide {

0% {
transform: translateX(0);
}

100% {
transform: translateX(-50%);
}

}

.animate-galeri{
animation: galeriSlide 25s linear infinite;
}
    </style>
</head>
<body class="bg-white min-h-screen">
    
    @if(session('success'))
        <div id="toastSukses" class="fixed top-24 left-1/2 transform -translate-x-1/2 z-[999] bg-green-500 text-white px-8 py-4 rounded-full shadow-2xl font-bold flex items-center gap-3 animate-bounce">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            {{ session('success') }}
        </div>
        <script>
            setTimeout(() => { document.getElementById('toastSukses').style.display = 'none'; }, 4000);
        </script>
    @endif
    
    <nav id="mainNav" class="fixed top-0 left-0 w-full z-[100] py-5 px-6 md:px-10 lg:px-12 flex justify-between items-center text-white transition-all duration-300">
        <div class="flex items-center gap-5 lg:gap-8">
            <a href="#">
                <img src="{{ asset('images/logort.png') }}" alt="Logo RT" class="h-10 md:h-[42px] w-auto drop-shadow-md hover:scale-105 transition-transform">
            </a>

            <div class="hidden lg:flex items-center gap-5 text-[15px] tracking-wide">
                <a href="#" class="font-extrabold text-[17px] drop-shadow-sm">Beranda</a>
                <a href="#profil" class="flex items-center gap-1 hover:text-[#d4a017] transition cursor-pointer font-medium">Profile</a>
                <a href="#acara" class="hover:text-[#d4a017] transition font-medium">Agenda</a>
                <a href="#lokasi" class="hover:text-[#d4a017] transition font-medium">Lokasi</a>
                <a href="#informasi" class="hover:text-[#d4a017] transition font-medium">Informasi</a>
                <a href="#galeri" class="hover:text-[#d4a017] transition font-medium">Galeri</a>
                
                <a href="{{ route('live-report') }}" class="hover:text-white/80 transition font-medium flex items-center gap-1 bg-white/10 px-3 py-1.5 rounded-full border border-white/20">
                    <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                    <span class="text-[#ef4444] font-bold drop-shadow-sm">Live</span> Report
                </a>
            </div>
        </div>

<div class="flex items-center">

    <!-- tombol menu mobile -->
    <button id="menuBtn" class="lg:hidden text-white ml-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
            <circle cx="12" cy="5" r="2"/>
            <circle cx="12" cy="12" r="2"/>
            <circle cx="12" cy="19" r="2"/>
        </svg>
    </button>

    <!-- search desktop -->
    <div class="relative hidden lg:block">
        <input id="searchInput"
        type="text"
        placeholder="Cari Berita..."
        class="py-1.5 pl-4 pr-10 rounded text-gray-700 text-[13px]
        focus:outline-none w-64 lg:w-72 shadow-sm bg-white/90
        border border-transparent transition-all">

        <svg xmlns="http://www.w3.org/2000/svg"
        class="h-4 w-4 text-gray-500 absolute right-3 top-2 cursor-pointer"
        fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2"
            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
        </svg>
    </div>

</div>
    </nav>

    <div id="mobileMenu" class="hidden fixed top-20 left-0 w-full bg-white shadow-xl z-[90] lg:hidden">

<div class="flex flex-col text-gray-800 font-semibold">

<a href="#" class="px-6 py-4 border-b hover:bg-gray-50">Home</a>

<a href="#profil" class="px-6 py-4 border-b hover:bg-gray-50">Profile</a>

<a href="#acara" class="px-6 py-4 border-b hover:bg-gray-50">Agenda</a>

<a href="#lokasi" class="px-6 py-4 border-b hover:bg-gray-50">Lokasi</a>

<a href="#informasi" class="px-6 py-4 border-b hover:bg-gray-50">Informasi</a>

<a href="#galeri" class="px-6 py-4 border-b hover:bg-gray-50">Galeri</a>

<a href="{{ route('live-report') }}" class="px-6 py-4 text-red-600 font-bold flex items-center gap-2">
<span class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
Live Report
</a>

</div>

</div>

   <section class="relative pt-32 pb-32 px-6 md:px-20 overflow-hidden flex items-center min-h-[560px]">
        
        <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="{{ asset('videos/back.mp4') }}" type="video/mp4">
        </video>
        
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-[#c09015]/80 via-[#d4a017]/60 to-[#fcd34d]/40 z-10"></div>

        <div class="max-w-4xl relative z-20 w-full md:w-1/2">
            <div class="mb-6 fade-up reveal opacity-0 translate-y-8 transition-all duration-1000">
                <img src="{{ asset('images/logort.png') }}" alt="Logo RT" class="w-20 md:w-28 h-auto drop-shadow-xl mb-6 hover:scale-105 transition-transform duration-300">
                <h2 class="text-white/90 text-xs md:text-sm font-semibold mb-2 tracking-widest uppercase drop-shadow-sm">Lingkungan Maju, Aman, dan Sejahtera</h2>
                <h1 class="text-white text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight drop-shadow-md">Layanan Terpadu <br> RT 01</h1>
                <p class="text-white/90 mt-5 max-w-md text-[14px] md:text-base leading-relaxed drop-shadow-sm font-medium">Selamat datang di Portal Informasi dan Layanan Digital. Bersama kita wujudkan lingkungan yang responsif, transparan, dan terhubung secara langsung.</p>

                <div class="mt-8 flex gap-4">
                    <a href="#informasi" class="bg-white text-[#d4a017] px-8 py-3 rounded-full font-bold text-sm shadow-lg hover:bg-gray-50 hover:-translate-y-1 transition-all duration-300 flex items-center gap-2">
                        Jelajahi Layanan
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" /></svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 right-0 md:right-10 lg:right-16 z-20 hidden md:block w-[45%] max-w-[550px] pointer-events-none">
            <img src="{{ asset('images/siluet.png') }}" alt="Siluet Warga" class="w-full h-auto object-contain object-bottom opacity-90 drop-shadow-2xl">
        </div>

        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-30">
            <svg class="relative block w-full h-[60px] md:h-[140px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120" preserveAspectRatio="none">
                <path d="M0,60 C400,140 1000,-20 1440,60 L1440,120 L0,120 Z" fill="#ffffff"></path>
            </svg>
        </div>
    </section>

    <section class="bg-white relative z-40 pb-16 px-4">
        <div class="max-w-7xl mx-auto bg-white rounded-[40px] shadow-[0_20px_60px_rgba(0,0,0,0.06)] border border-gray-100 p-8 md:p-14 relative overflow-hidden -mt-6 md:-mt-10">
        </div>
    </section>

    <section class="bg-white -mt-10 md:-mt-40 relative z-40 pb-16 px-4">
        <div class="max-w-6xl mx-auto bg-white rounded-[40px] shadow-[0_15px_50px_rgba(0,0,0,0.05)] border border-gray-100 p-10 md:p-14">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-y-12 gap-x-6 justify-items-center">
                <a href="{{ route('lapor.index') }}" class="flex flex-col items-center group cursor-pointer fade-up reveal">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-[0_5px_25px_rgba(0,0,0,0.06)] mb-4 group-hover:-translate-y-2 transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" /></svg></div>
                    <span class="text-sm font-bold text-gray-700 tracking-wide group-hover:text-[#d4a017]">Form Laporan</span>
                </a>
                <a href="{{ route('warga.index') }}" class="flex flex-col items-center group cursor-pointer fade-up reveal">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-[0_5px_25px_rgba(0,0,0,0.06)] mb-4 group-hover:-translate-y-2 transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg></div>
                    <span class="text-sm font-bold text-gray-700 tracking-wide group-hover:text-[#d4a017]">Data Warga</span>
                </a>
                <a href="{{ route('kas-rt.index') }}" class="flex flex-col items-center group cursor-pointer fade-up reveal">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-[0_5px_25px_rgba(0,0,0,0.06)] mb-4 group-hover:-translate-y-2 transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div>
                    <span class="text-sm font-bold text-gray-700 tracking-wide group-hover:text-[#d4a017]">Keuangan</span>
                </a>
                <a href="{{ route('surat.index') }}" class="flex flex-col items-center group cursor-pointer fade-up reveal">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-[0_5px_25px_rgba(0,0,0,0.06)] mb-4 group-hover:-translate-y-2 transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg></div>
                    <span class="text-sm font-bold text-gray-700 tracking-wide group-hover:text-[#d4a017]">Surat Pengajuan</span>
                </a>
                <a href="{{ route('umkm.index') }}" class="flex flex-col items-center group cursor-pointer fade-up reveal  ">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-[0_5px_25px_rgba(0,0,0,0.06)] mb-4 group-hover:-translate-y-2 transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg></div>
                    <span class="text-sm font-bold text-gray-700 tracking-wide group-hover:text-[#d4a017]">UMKM Desa</span>
                </a>
            </div>
        </div>
    </section>

    <section id="profil" class="max-w-7xl mx-auto px-6 lg:px-12 py-10 scroll-mt-24">
        <div class="flex flex-col md:flex-row gap-10 items-center bg-gray-50 rounded-[40px] p-8 md:p-12 shadow-sm border border-gray-100 fade-up reveal">
            <div class="w-full md:w-1/3 text-center">
     <img src="{{ asset('images/siganteng.jpeg') }}" class="w-40 h-40 object-cover rounded-full mx-auto shadow-md border-4 border-white mb-4">
                <span class="text-[10px] font-extrabold bg-[#d4a017] text-white px-3 py-1 rounded-full uppercase tracking-widest">Ketua RT 01</span>
                <h3 class="text-xl font-extrabold mt-3 text-gray-900">Aditya Febrian</h3>
            </div>
            <div class="w-full md:w-2/3">
                <h2 class="text-3xl lg:text-4xl font-extrabold text-gray-900 mb-4">Profil Desa</h2>
                <p class="text-gray-600 leading-relaxed font-medium mb-6">Lingkungan RT 01 mengedepankan asas kerukunan, gotong royong, dan transparansi. Kami berkomitmen memberikan pelayanan terbaik bagi seluruh warga melalui digitalisasi administrasi, pemberdayaan UMKM, dan pemantauan keamanan terpadu.</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm">
                        <h4 class="font-extrabold text-[#d4a017] mb-1 uppercase tracking-widest text-xs">Visi</h4>
                        <p class="text-sm text-gray-700 font-bold">Mewujudkan lingkungan yang Agamis, Aman, Bersih, dan Sejahtera.</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm">
                        <h4 class="font-extrabold text-[#d4a017] mb-1 uppercase tracking-widest text-xs">Misi</h4>
                        <p class="text-sm text-gray-700 font-bold">Digitalisasi layanan publik dan peningkatan siskamling aktif warga.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="acara" class="max-w-7xl mx-auto px-6 lg:px-12 py-16 scroll-mt-24">
        <div class="text-center mb-10 fade-up reveal">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-2">Agenda & Acara</h2>
            <div class="w-16 h-1.5 bg-[#d4a017] mx-auto rounded-full"></div>
            <p class="text-gray-500 font-medium mt-4">Jangan lewatkan kegiatan rutin dan acara penting di lingkungan kita.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 fade-up reveal delay-100">
            <div class="bg-white p-6 rounded-[24px] shadow-sm border border-gray-100 flex gap-6 items-center hover:shadow-md hover:-translate-y-1 transition-all">
                <div class="bg-[#fcf9f2] text-[#d4a017] min-w-[80px] h-[80px] rounded-2xl flex flex-col justify-center items-center border border-[#f0e6d2]">
                    <span class="text-2xl font-black leading-none">18</span>
                    <span class="text-xs font-bold uppercase mt-1">Apr</span>
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 text-lg mb-1">Kerja Bakti Masal</h4>
                    <p class="text-sm text-gray-500 font-medium line-clamp-2">Pembersihan area taman warga, pemotongan rumput, dan normalisasi selokan Blok A.</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-[24px] shadow-sm border border-gray-100 flex gap-6 items-center hover:shadow-md hover:-translate-y-1 transition-all">
                <div class="bg-blue-50 text-blue-600 min-w-[80px] h-[80px] rounded-2xl flex flex-col justify-center items-center border border-blue-100">
                    <span class="text-2xl font-black leading-none">24</span>
                    <span class="text-xs font-bold uppercase mt-1">Apr</span>
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 text-lg mb-1">Arisan & Rapat Bulanan</h4>
                    <p class="text-sm text-gray-500 font-medium line-clamp-2">Pertemuan rutin ibu-ibu PKK sekaligus pembahasan laporan kas RT bulan ini.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 lg:px-12 py-16 bg-white overflow-hidden">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-10 fade-up reveal">
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 mb-2">Berita Terbaru</h2>
                <div class="w-16 h-1.5 bg-[#d4a017] rounded-full"></div>
            </div>
            <a href="#" class="text-[#d4a017] font-bold underline hover:text-black transition-colors mt-4 md:mt-0">Lihat semua berita</a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <div class="lg:col-span-2 group cursor-pointer fade-up reveal">
                <div class="overflow-hidden rounded-[30px] shadow-sm mb-6">
                    <img src="{{ asset('images/berita1.jpeg') }}" alt="Berita Utama" class="w-full h-[400px] object-cover group-hover:scale-105 transition-transform duration-700">
                </div>
                <div class="flex items-center gap-3 text-sm font-bold text-[#d4a017] mb-3 uppercase tracking-widest">
                    <span>Photo Studio</span> <span class="text-gray-300">•</span> <span class="text-gray-500">10 April 2026</span>
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 leading-tight group-hover:text-[#d4a017] transition-colors">Photo Studio Warga RT01 Banjarbaru </h3>
            </div>

            <div class="flex flex-col gap-8">
                <div class="flex gap-5 group cursor-pointer fade-up reveal">
                    <img src="{{ asset('images/berita2.jpg') }}" class="w-28 h-28 rounded-2xl object-cover shadow-sm">
                    <div class="flex flex-col justify-center">
                        <p class="text-[11px] font-bold text-[#d4a017] uppercase mb-1">Kegiatan</p>
                        <h4 class="font-bold text-gray-800 leading-snug group-hover:text-[#d4a017] transition-colors">Warga berfoto dengan pejabat daerah</h4>
                    </div>
                </div>
                <div class="flex gap-5 group cursor-pointer fade-up reveal">
                    <img src="{{ asset('images/berita3.jpg') }}" class="w-28 h-28 rounded-2xl object-cover shadow-sm">
                    <div class="flex flex-col justify-center">
                        <p class="text-[11px] font-bold text-[#d4a017] uppercase mb-1">Liburan</p>
                        <h4 class="font-bold text-gray-800 leading-snug group-hover:text-[#d4a017] transition-colors">Warga RT01 liburan ke Danau Galuh Cempaka</h4>
                    </div>
                </div>
                <div class="flex gap-5 group cursor-pointer fade-up reveal">
                    <img src="{{ asset('images/berita4.jpeg') }}" class="w-28 h-28 rounded-2xl object-cover shadow-sm">
                    <div class="flex flex-col justify-center">
                        <p class="text-[11px] font-bold text-[#d4a017] uppercase mb-1">Agenda</p>
                        <h4 class="font-bold text-gray-800 leading-snug group-hover:text-[#d4a017] transition-colors">Kegiaatan Berhitung Bersama dengan Dosen Statistika TI UIN Antasari Banjarmasin</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="galeri" class="py-20 bg-gray-50 overflow-hidden scroll-mt-24">

    <div class="max-w-7xl mx-auto px-6 lg:px-12">

        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-2">Galeri Desa</h2>
            <div class="w-16 h-1.5 bg-[#d4a017] mx-auto rounded-full"></div>
        </div>

        <!-- slider container -->
        <div class="relative overflow-hidden">

            <div class="flex gap-4 animate-galeri">

                <!-- gambar -->
                <div class="min-w-[250px] h-72 rounded-2xl overflow-hidden shadow-md">
                    <img src="{{ asset('images/photo1.jpg') }}" class="w-full h-full object-cover">
                </div>

                <div class="min-w-[250px] h-72 rounded-2xl overflow-hidden shadow-md">
                    <img src="{{ asset('images/photo2.jpg') }}" class="w-full h-full object-cover">
                </div>

                <div class="min-w-[250px] h-72 rounded-2xl overflow-hidden shadow-md">
                    <img src="{{ asset('images/photo5.jpg') }}" class="w-full h-full object-cover">
                </div>

                <div class="min-w-[250px] h-72 rounded-2xl overflow-hidden shadow-md">
                    <img src="{{ asset('images/photo4.jpg') }}" class="w-full h-full object-cover">
                </div>

                <!-- duplicate agar looping smooth -->
                <div class="min-w-[250px] h-72 rounded-2xl overflow-hidden shadow-md">
                    <img src="{{ asset('images/photo1.jpg') }}" class="w-full h-full object-cover">
                </div>

                <div class="min-w-[250px] h-72 rounded-2xl overflow-hidden shadow-md">
                    <img src="{{ asset('images/photo2.jpg') }}" class="w-full h-full object-cover">
                </div>

                <div class="min-w-[250px] h-72 rounded-2xl overflow-hidden shadow-md">
                    <img src="{{ asset('images/photo5.jpg') }}" class="w-full h-full object-cover">
                </div>

                <div class="min-w-[250px] h-72 rounded-2xl overflow-hidden shadow-md">
                    <img src="{{ asset('images/photo4.jpg') }}" class="w-full h-full object-cover">
                </div>

            </div>

        </div>

    </div>

</section>

    <section id="informasi" class="max-w-7xl mx-auto px-6 lg:px-12 py-16 scroll-mt-24">
        <div class="text-center mb-12 fade-up reveal">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-2">Informasi Layanan RT</h2>
            <div class="w-16 h-1.5 bg-[#d4a017] mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 fade-up reveal delay-100">
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 text-center hover:shadow-md transition-shadow">
                <div class="w-14 h-14 bg-[#d4a017]/10 text-[#d4a017] rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <h3 class="font-extrabold text-lg text-gray-900 mb-2">Jam Layanan Administrasi</h3>
                <p class="text-gray-500 text-sm font-medium">Senin - Jumat: 16.00 - 20.00 WITA<br>Sabtu - Minggu: Fleksibel</p>
            </div>
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 text-center hover:shadow-md transition-shadow">
                <div class="w-14 h-14 bg-red-50 text-red-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                </div>
                <h3 class="font-extrabold text-lg text-gray-900 mb-2">Kontak Darurat</h3>
                <p class="text-gray-500 text-sm font-medium">Darurat: (+62) 85751524327<br>Ambulans Darurat: 969</p>
            </div>
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 text-center hover:shadow-md transition-shadow">
                <div class="w-14 h-14 bg-green-50 text-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                </div>
                <h3 class="font-extrabold text-lg text-gray-900 mb-2">Pengangkutan Sampah</h3>
                <p class="text-gray-500 text-sm font-medium">Rutin setiap hari Selasa dan Jumat pagi. Harap letakkan di depan rumah.</p>
            </div>
        </div>
    </section>

    <section id="lokasi" class="bg-gray-50 scroll-mt-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 py-16">
            <div class="flex flex-col md:flex-row gap-10 items-center">
                <div class="w-full md:w-1/3 fade-up reveal">
                    <span class="text-[#d4a017] font-extrabold text-sm uppercase tracking-widest mb-2 block">Peta Wilayah</span>
                    <h2 class="text-3xl lg:text-4xl font-extrabold text-gray-900 mb-4 leading-tight">Denah Lokasi RT 01</h2>
                    <p class="text-gray-500 font-medium mb-6 leading-relaxed">
                        Lingkungan RT 01 terletak di kawasan strategis dekat dengan kampus 2 UIN Antasari Banjarmasin (Banjarbaru).
                    </p>
                    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                        <h4 class="font-extrabold text-gray-900 mb-2">Alamat Lengkap</h4>
                        <p class="text-sm text-gray-600 font-medium leading-relaxed">
                            GQH2+GQM, Kemuning, Banjarbaru Selatan, Banjarbaru City, South Kalimantan 70732
                        </p>
                    </div>
                </div>

                <div class="w-full md:w-2/3 fade-up reveal delay-100">
                    <div class="bg-white p-2 rounded-[30px] shadow-sm border border-gray-100">
                        <div class="w-full h-[350px] md:h-[450px] rounded-[24px] overflow-hidden bg-gray-200">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d78571.37888743538!2d114.67569024863276!3d-3.471157699999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de6812bf5fd4517%3A0x54a8b152b3e249d4!2sUniversitas%20Islam%20Negeri%20Antasari%20Banjarmasin%20-%20Kampus%20II!5e1!3m2!1sen!2sid!4v1775840372383!5m2!1sen!2sid"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#1f2328] text-white pt-20 pb-10 px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-16">
                <div class="fade-up reveal">
                    <img src="{{ asset('images/logort.png') }}" alt="Logo RT" class="h-20 mb-8 opacity-90">
                    <p class="text-gray-400 font-medium leading-relaxed mb-6">
                        Website Resmi Layanan RT 01. Media informasi dan transparansi untuk seluruh warga di lingkungan Kawasan RT 1 Banjarbaru.
                    </p>
                </div>

                <div class="fade-up reveal">
                    <h3 class="text-lg font-bold border-l-4 border-[#d4a017] pl-4 mb-8">Alamat & Kontak</h3>
                    <ul class="space-y-4 text-gray-400 font-medium">
                        <li class="flex items-start gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#d4a017] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            <span>GQH2+GQM, Kemuning, Banjarbaru Selatan, Banjarbaru City, South Kalimantan 70732</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#d4a017]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                            <span>(+62) 85751524327</span>
                        </li>
                    </ul>
                </div>

                <div class="fade-up reveal">
                    <h3 class="text-lg font-bold border-l-4 border-[#d4a017] pl-4 mb-8">Tautan Layanan</h3>
                    <div class="grid grid-cols-2 gap-4 text-gray-400 font-bold text-sm uppercase tracking-wide">
                        <a href="#profil" class="hover:text-[#d4a017] transition-colors">Profil RT</a>
                        <a href="#acara" class="hover:text-[#d4a017] transition-colors">Agenda Warga</a>
                        <a href="#informasi" class="hover:text-[#d4a017] transition-colors">Layanan Info</a>
                        <a href="#galeri" class="hover:text-[#d4a017] transition-colors">Dokumentasi</a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 text-center md:text-left text-sm font-medium text-gray-500">
                <p>Website Resmi Layanan RT 01 Banjarbaru &copy; 2026 &middot; Hak Cipta Dilindungi Undang-Undang.</p>
            </div>
        </div>
    </footer>

    <script>

        document.addEventListener("DOMContentLoaded", function() {
    const observerOptions = {
        threshold: 0.15 // 0.15 berarti elemen akan muncul saat 15% bagiannya masuk layar
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active'); // Tambahin class active buat ngejalanin CSS tadi
            }
        });
    }, observerOptions);

    // Kasih tau JS buat mantau semua elemen yang punya class 'reveal'
    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
});
        // Script untuk Navbar Transparent -> Solid Putih saat di-scroll
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            const nav = document.getElementById("mainNav");
            const search = document.getElementById("searchInput");
            const links = nav.querySelectorAll("a:not(.bg-white\\/10)"); // Ambil link text biasa
            
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                nav.classList.remove("text-white", "py-5", "absolute");
                nav.classList.add("bg-white", "shadow-md", "text-gray-800", "py-3", "fixed");
                search.classList.add("bg-gray-100");
                search.classList.remove("bg-white/90");
                
                // Ubah hover text agar hitam kalau background nav putih
                links.forEach(link => {
                    link.classList.remove("hover:text-white/80");
                });
            } else {
                nav.classList.add("text-white", "py-5", "absolute");
                nav.classList.remove("bg-white", "shadow-md", "text-gray-800", "py-3", "fixed");
                search.classList.remove("bg-gray-100");
                search.classList.add("bg-white/90");
                
                links.forEach(link => {
                    link.classList.add("hover:text-white/80");
                });
            }
        }

        // Script Animasi Fade-Up
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

<script>
const btn = document.getElementById("menuBtn");
const menu = document.getElementById("mobileMenu");

btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
});
</script>

</body>
</html>