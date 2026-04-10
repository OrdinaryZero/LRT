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
                <a href="#" class="font-extrabold text-[17px] drop-shadow-sm">Home</a>
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

        <div class="hidden md:block">
            <div class="relative">
                <input id="searchInput" type="text" placeholder="Cari Berita..." class="py-1.5 pl-4 pr-10 rounded text-gray-700 text-[13px] focus:outline-none w-64 lg:w-72 shadow-sm bg-white/90 border border-transparent transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 absolute right-3 top-2 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </nav>

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
                    <span class="text-sm font-bold text-gray-700 tracking-wide group-hover:text-[#d4a017]">Lapor RT</span>
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
                <h2 class="text-3xl lg:text-4xl font-extrabold text-gray-900 mb-4">Profil Lingkungan</h2>
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
                    <img src="https://media.gettyimages.com/id/525497435/photo/lok-baintan-floating-market-in-banjarmasin-indonesia.jpg?s=612x612&w=0&k=20&c=iwE898POEcDXANCWxonPct1wflxTv4nbFem7QEM31Rw=" alt="Berita Utama" class="w-full h-[400px] object-cover group-hover:scale-105 transition-transform duration-700">
                </div>
                <div class="flex items-center gap-3 text-sm font-bold text-[#d4a017] mb-3 uppercase tracking-widest">
                    <span>Humas RT</span> <span class="text-gray-300">•</span> <span class="text-gray-500">10 April 2026</span>
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 leading-tight group-hover:text-[#d4a017] transition-colors">Hasil Musyawarah Warga Terkait Penertiban Area Parkir Dan Keamanan Siskamling</h3>
            </div>

            <div class="flex flex-col gap-8">
                <div class="flex gap-5 group cursor-pointer fade-up reveal">
                    <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?q=80&w=300" class="w-28 h-28 rounded-2xl object-cover shadow-sm">
                    <div class="flex flex-col justify-center">
                        <p class="text-[11px] font-bold text-[#d4a017] uppercase mb-1">Kegiatan</p>
                        <h4 class="font-bold text-gray-800 leading-snug group-hover:text-[#d4a017] transition-colors">Ibu-Ibu PKK Gelar Bakti Sosial Dan Kerja Bakti Bersama</h4>
                    </div>
                </div>
                <div class="flex gap-5 group cursor-pointer fade-up reveal">
                    <img src="data:image/jpeg;base64,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" class="w-28 h-28 rounded-2xl object-cover shadow-sm">
                    <div class="flex flex-col justify-center">
                        <p class="text-[11px] font-bold text-[#d4a017] uppercase mb-1">Sosialisasi</p>
                        <h4 class="font-bold text-gray-800 leading-snug group-hover:text-[#d4a017] transition-colors">Penyuluhan Pengelolaan Sampah Rumah Tangga Mandiri</h4>
                    </div>
                </div>
                <div class="flex gap-5 group cursor-pointer fade-up reveal">
                    <img src="https://media.gettyimages.com/id/964254044/photo/siring-floating-market-banjarmasin-indonesia.jpg?s=612x612&w=0&k=20&c=1pskLwQq4L19qmUZbxBoVbwywmk6x7dPc1SxZnjU108=" class="w-28 h-28 rounded-2xl object-cover shadow-sm">
                    <div class="flex flex-col justify-center">
                        <p class="text-[11px] font-bold text-[#d4a017] uppercase mb-1">Keamanan</p>
                        <h4 class="font-bold text-gray-800 leading-snug group-hover:text-[#d4a017] transition-colors">Pembentukan Satgas Keamanan Menjelang Libur Hari Raya</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="galeri" class="py-20 bg-gray-50 overflow-hidden scroll-mt-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="text-center mb-12 fade-up reveal">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-2">Galeri Warga</h2>
                <div class="w-16 h-1.5 bg-[#d4a017] mx-auto rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 fade-up delay-100 reveal">
                <div class="overflow-hidden rounded-2xl h-64 md:h-80 shadow-sm hover:shadow-xl transition-all">
                    <img src="https://media.gettyimages.com/id/940237166/photo/banjarmasin-kalimantan-borneo-indonesia-advertising-for-the-local-newspaper-banjarmasin-post.jpg?s=612x612&w=0&k=20&c=0PR5bp3xKqRO_DZFpH7ns825yzCwtOYGmqlk0wsq74Q=" class="w-full h-full object-cover hover:scale-110 transition-transform duration-700">
                </div>
                <div class="overflow-hidden rounded-2xl h-64 md:h-80 shadow-sm hover:shadow-xl transition-all mt-8 md:mt-12">
                    <img src="https://media.gettyimages.com/id/962229548/photo/activities-at-lok-baintan-floating-market-indonesia.jpg?s=612x612&w=0&k=20&c=MMZxTvrtyr9eEwoyjBTnjNRamA9UeQGagi-B24qrrzo=" class="w-full h-full object-cover hover:scale-110 transition-transform duration-700">
                </div>
                <div class="overflow-hidden rounded-2xl h-64 md:h-80 shadow-sm hover:shadow-xl transition-all">
                    <img src="https://media.gettyimages.com/id/940236722/photo/banjarmasin-kalimantan-borneo-indonesia-floating-market-and-logging-industry-with-big-wood.jpg?s=612x612&w=0&k=20&c=zRpvIDWRBZEpnXnCN0tb9lKRjhzzno3jBmdcw4ij9nc=" class="w-full h-full object-cover hover:scale-110 transition-transform duration-700">
                </div>
                <div class="overflow-hidden rounded-2xl h-64 md:h-80 shadow-sm hover:shadow-xl transition-all mt-8 md:mt-12">
                    <img src="https://media.gettyimages.com/id/940236188/photo/banjarmasin-kalimantan-borneo-indonesia-local-seller-shows-jewelry-and-rings-from-traditional.jpg?s=612x612&w=0&k=20&c=KNCgmOWWhG71Q11JNl8skhxz9hVwY4RzwoYiUmCNqT0=" class="w-full h-full object-cover hover:scale-110 transition-transform duration-700">
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
</body>
</html>