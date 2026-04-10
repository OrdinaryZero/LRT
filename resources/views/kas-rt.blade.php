<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transparansi Kas - RT 01</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">

    <nav class="absolute top-0 left-0 w-full z-50 py-6 px-6 md:px-12 flex justify-between items-center text-white">
        <div class="flex items-center gap-8">
            <a href="{{ route('beranda') }}"><img src="{{ asset('images/logort.png') }}" class="h-10 hover:scale-105 transition-transform"></a>
            <div class="hidden lg:flex gap-6 font-semibold tracking-wide">
                <a href="{{ route('beranda') }}" class="hover:opacity-80 transition-opacity">Beranda</a>
                <span class="border-b-2 border-white pb-1">Kas RT</span>
            </div>
        </div>
        <a href="{{ route('beranda') }}" class="bg-white/20 hover:bg-white/30 px-5 py-2 rounded-full text-sm font-bold transition-colors">Kembali</a>
    </nav>

    <section class="relative bg-gradient-to-r from-[#c09015] via-[#d4a017] to-[#fcd34d] pt-32 pb-40 text-center">

        <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="{{ asset('videos/back.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
        </video>

        <div class="fade-up opacity-0 translate-y-8 transition-all duration-700">
            <h1 class="text-white text-3xl md:text-4xl font-extrabold mb-2 drop-shadow-md">Transparansi Kas RT</h1>
            <p class="text-white/90 font-medium">Laporan pemasukan dan pengeluaran dana lingkungan RT 01</p>
        </div>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-[60px] md:h-[80px]" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.08,130.83,123.8,188.47,115,234.35,107.91,278.36,83.9,321.39,56.44Z" fill="#f9fafb"></path>
            </svg>
        </div>
    </section>

    <section class="relative z-20 -mt-24 px-4 pb-20 max-w-4xl mx-auto w-full flex-grow">
        <div class="fade-up opacity-0 translate-y-12 transition-all duration-700 delay-100 bg-white rounded-3xl shadow-[0_10px_40px_rgba(0,0,0,0.06)] p-8 border border-gray-100">
            
            <div class="text-center mb-10 pb-8 border-b border-gray-100">
                <p class="text-gray-400 font-bold text-xs uppercase tracking-widest mb-2">Saldo Kas Saat Ini</p>
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900">Rp 4.250.000</h2>
                <p class="text-xs text-gray-400 mt-2 font-medium">Terakhir diperbarui: 10 April 2026</p>
            </div>
            
            <h3 class="font-bold text-gray-800 mb-4 text-lg">Riwayat Transaksi Terakhir</h3>
            <div class="space-y-4">
                <div class="flex justify-between items-center p-5 bg-gray-50 rounded-xl border-l-4 border-green-500 hover:shadow-md transition-shadow">
                    <div>
                        <p class="font-bold text-gray-800">Iuran Bulanan Warga (Maret)</p>
                        <p class="text-xs text-gray-500 font-semibold mt-1">05 April 2026 • Pemasukan</p>
                    </div>
                    <span class="text-green-600 font-extrabold text-lg">+ Rp 1.500.000</span>
                </div>
                
                <div class="flex justify-between items-center p-5 bg-gray-50 rounded-xl border-l-4 border-red-500 hover:shadow-md transition-shadow">
                    <div>
                        <p class="font-bold text-gray-800">Perbaikan Lampu Jalan Blok A</p>
                        <p class="text-xs text-gray-500 font-semibold mt-1">02 April 2026 • Pengeluaran</p>
                    </div>
                    <span class="text-red-600 font-extrabold text-lg">- Rp 350.000</span>
                </div>

                <div class="flex justify-between items-center p-5 bg-gray-50 rounded-xl border-l-4 border-red-500 hover:shadow-md transition-shadow">
                    <div>
                        <p class="font-bold text-gray-800">Konsumsi Rapat Pengurus</p>
                        <p class="text-xs text-gray-500 font-semibold mt-1">28 Maret 2026 • Pengeluaran</p>
                    </div>
                    <span class="text-red-600 font-extrabold text-lg">- Rp 150.000</span>
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
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-y-12', 'translate-y-8');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                }
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
    </script>
</body>
</html>