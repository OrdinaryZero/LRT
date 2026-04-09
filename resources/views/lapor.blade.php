<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Lapor RT - Layanan Pengaduan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">

    <nav id="mainNav" class="fixed top-0 left-0 w-full z-[100] py-5 px-6 md:px-10 lg:px-12 flex justify-between items-center text-white transition-all duration-300">
        <div class="flex items-center gap-5 lg:gap-8">
            <a href="{{ route('beranda') }}">
                <img src="{{ asset('images/logort.png') }}" alt="Logo RT" class="h-10 md:h-[42px] w-auto drop-shadow-md hover:scale-105 transition-transform">
            </a>

            <div class="hidden lg:flex items-center gap-5 text-[15px] tracking-wide">
                <a href="{{ route('beranda') }}" class="font-extrabold text-[17px] drop-shadow-sm">Beranda</a>
                
                <a href="#" class="flex items-center gap-1 hover:text-white/80 transition cursor-pointer font-medium">
                    Profil
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                
                <a href="{{ route('beranda') }}" class="hover:text-white/80 transition font-medium">Acara</a>
                <a href="{{ route('beranda') }}" class="hover:text-white/80 transition font-medium">Lokasi</a>
                <a href="{{ route('beranda') }}" class="hover:text-white/80 transition font-medium">Informasi</a>
                <a href="{{ route('beranda') }}" class="hover:text-white/80 transition font-medium">Galeri</a>
                
                <a href="#" class="hover:text-white/80 transition font-medium">
                    <span class="text-[#ef4444] font-bold drop-shadow-sm">Live</span> Report
                </a>
            </div>
        </div>

            <a href="{{ route('beranda') }}" class="text-sm bg-white/20 hover:bg-white/30 px-5 py-2 rounded-full transition-colors flex items-center gap-2 font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali
            </a>
    </nav>

    <section class="relative bg-gradient-to-r from-[#c09015] via-[#d4a017] to-[#fcd34d] pt-32 pb-40 px-4 text-center z-10 overflow-hidden">

            <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
        <source src="{{ asset('videos/back.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

        <div class="absolute top-0 left-10 w-72 h-72 bg-white/10 rounded-full blur-3xl pointer-events-none"></div>
        
        <div class="fade-up opacity-0 translate-y-8 transition-all duration-[800ms] ease-out">
            <h1 class="text-white text-3xl md:text-4xl font-extrabold mb-3 drop-shadow-md">Layanan Pengaduan Warga</h1>
            <p class="text-white/90 text-sm md:text-base mb-8 max-w-2xl mx-auto font-medium">Sampaikan laporan, keluhan, atau aspirasi Anda di lingkungan RT agar dapat segera ditindaklanjuti secara transparan.</p>
        </div>
        
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-10">
            <svg class="relative block w-full h-[40px] md:h-[80px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.08,130.83,123.8,188.47,115,234.35,107.91,278.36,83.9,321.39,56.44Z" fill="#f9fafb"></path>
            </svg>
        </div>
    </section>

    <section class="relative z-20 -mt-24 md:-mt-32 px-4 pb-20 flex-grow">
        <div class="fade-up opacity-0 translate-y-12 transition-all duration-[800ms] ease-out delay-100 max-w-3xl mx-auto bg-white rounded-2xl shadow-[0_10px_40px_rgba(0,0,0,0.06)] border border-gray-100 overflow-hidden">
            
            <div class="bg-gray-50 border-b border-gray-100 px-6 py-5 flex items-center justify-between">
                <h2 class="text-lg md:text-xl font-bold text-gray-800 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#d4a017]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                    </svg>
                    Form Laporan Baru
                </h2>
                <span class="text-[11px] font-bold bg-green-100 text-green-700 px-3 py-1 rounded-full uppercase tracking-wider">Aman & Rahasia</span>
            </div>

            <div class="p-6 md:p-8">
                <form action="{{ route('lapor.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 text-xs font-bold mb-2 uppercase tracking-wide">Nama Pelapor <span class="text-red-500">*</span></label>
                            <input type="text" name="nama_warga" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-[#d4a017] focus:bg-white transition-colors" placeholder="Masukkan nama Anda..." required>
                        </div>
                        <div>
                            <label class="block text-gray-700 text-xs font-bold mb-2 uppercase tracking-wide">Blok / No. Rumah <span class="text-red-500">*</span></label>
                            <input type="text" name="no_rumah" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-[#d4a017] focus:bg-white transition-colors" placeholder="Contoh: Blok A No. 12" required>
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 text-xs font-bold mb-2 uppercase tracking-wide">Pilih Kategori Laporan <span class="text-red-500">*</span></label>
                        <select name="kategori" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-[#d4a017] focus:bg-white transition-colors" required>
                            <option value="" disabled selected>Kategori</option>
                            <option value="Keamanan">Keamanan (Maling, Orang Mencurigakan)</option>
                            <option value="Kebersihan">Kebersihan (Sampah Menumpuk, Saluran Mampet)</option>
                            <option value="Fasilitas">Fasilitas Umum (Lampu Mati, Jalan Rusak)</option>
                            <option value="Aspirasi">Aspirasi / Usulan Kegiatan</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 text-xs font-bold mb-2 uppercase tracking-wide">Isi Laporan / Kronologi <span class="text-red-500">*</span></label>
                        <textarea name="deskripsi_laporan" rows="5" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-[#d4a017] focus:bg-white transition-colors leading-relaxed" placeholder="Ceritakan detail laporan Anda di sini..." required></textarea>
                    </div>
                    <div class="flex justify-end pt-4">
                        <button type="submit" class="w-full md:w-auto bg-gray-900 hover:bg-[#d4a017] text-white font-bold py-3.5 px-8 rounded-lg transition-colors duration-300 shadow-md uppercase tracking-wide text-sm flex items-center justify-center gap-2">
                            Laporkan
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7-7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="max-w-4xl mx-auto mt-16">
            <h3 class="fade-up opacity-0 translate-y-12 transition-all duration-[800ms] ease-out text-center text-gray-500 font-bold text-sm uppercase tracking-widest mb-8">Bagaimana Laporan Diproses?</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                
                <div class="fade-up opacity-0 translate-y-12 transition-all duration-[800ms] ease-out delay-[100ms] flex flex-col items-center">
                    <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center shadow-sm mb-4 border border-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </div>
                    <h4 class="text-sm font-bold text-gray-800">1. Tulis Laporan</h4>
                    <p class="text-xs text-gray-500 mt-1">Kirim keluhan via form.</p>
                </div>

                <div class="fade-up opacity-0 translate-y-12 transition-all duration-[800ms] ease-out delay-[250ms] flex flex-col items-center">
                    <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center shadow-sm mb-4 border border-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h4 class="text-sm font-bold text-gray-800">2. Notifikasi WA</h4>
                    <p class="text-xs text-gray-500 mt-1">RT menerima pesan instan.</p>
                </div>

                <div class="fade-up opacity-0 translate-y-12 transition-all duration-[800ms] ease-out delay-[400ms] flex flex-col items-center">
                    <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center shadow-sm mb-4 border border-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h4 class="text-sm font-bold text-gray-800">3. Tindak Lanjut</h4>
                    <p class="text-xs text-gray-500 mt-1">Laporan diproses pengurus.</p>
                </div>

                <div class="fade-up opacity-0 translate-y-12 transition-all duration-[800ms] ease-out delay-[550ms] flex flex-col items-center">
                    <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center shadow-sm mb-4 border border-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h4 class="text-sm font-bold text-gray-800">4. Selesai</h4>
                    <p class="text-xs text-gray-500 mt-1">Masalah tertangani.</p>
                </div>

            </div>
        </div>
    </section>

    <footer class="bg-[#1f2328] text-gray-300 py-12 px-6 md:px-12 mt-auto">
        <div class="max-w-6xl mx-auto text-center md:text-left flex flex-col md:flex-row justify-between items-center gap-6">
            <div>
                <img src="{{ asset('images/logort.png') }}" alt="Logo RT" class="h-12 mb-4 mx-auto md:mx-0 opacity-90">
                <p class="text-sm text-gray-400 font-medium">&copy; 2026 Pengurus Rukun Tetangga 01.</p>
            </div>
            <div class="text-sm font-medium text-gray-400 text-center md:text-right">
                Jalan A. Yani Kawasan Pembatuan RT. 01 Kel. Kintapura Kec. Kintap <br class="hidden md:block">
                Kabupaten Tanah Laut, Kalimantan Selatan 70861
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const observerOptions = { root: null, rootMargin: '0px', threshold: 0.1 };
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('opacity-0', 'translate-y-12', 'translate-y-8');
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>