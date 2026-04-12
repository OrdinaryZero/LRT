<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Pengantar - RT 01</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">

    <nav class="absolute top-0 left-0 w-full z-50 py-6 px-6 md:px-12 flex justify-between items-center text-white">
        <div class="flex items-center gap-8">
            <a href="{{ route('beranda') }}"><img src="{{ asset('images/logort.png') }}" class="h-10 hover:scale-105 transition-transform"></a>
            <div class="hidden lg:flex gap-6 font-semibold tracking-wide">
                <a href="{{ route('beranda') }}" class="hover:opacity-80 transition-opacity">Beranda</a>
                <span class="border-b-2 border-white pb-1">Surat Permohonan</span>
            </div>
        </div>
        <a href="{{ route('beranda') }}" class="bg-white/20 hover:bg-white/30 px-5 py-2 rounded-full text-sm font-bold transition-colors">Kembali</a>
    </nav>

    <section class="relative bg-gradient-to-r from-[#c09015] via-[#d4a017] to-[#fcd34d] pt-32 pb-40 text-center">
        <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="{{ asset('videos/back.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-black/20 z-0"></div> <div class="relative z-10 fade-up opacity-0 translate-y-8 transition-all duration-700">
            <h1 class="text-white text-3xl md:text-4xl font-extrabold mb-2 drop-shadow-md">Pengajuan Surat Permohonan</h1>
            <p class="text-white/90 font-medium">Layanan mandiri pembuatan surat permohonan administrasi RT</p>
        </div>
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-10">
            <svg class="relative block w-full h-[60px] md:h-[80px]" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.08,130.83,123.8,188.47,115,234.35,107.91,278.36,83.9,321.39,56.44Z" fill="#f9fafb"></path>
            </svg>
        </div>
    </section>

    <section class="relative z-20 -mt-24 px-4 pb-20 max-w-3xl mx-auto w-full flex-grow">
        <div class="fade-up opacity-0 translate-y-12 transition-all duration-700 delay-100 bg-white rounded-3xl shadow-[0_10px_40px_rgba(0,0,0,0.06)] p-8 border border-gray-100">
            
            <div class="mb-6 border-b border-gray-100 pb-4">
                <h2 class="text-xl font-bold text-gray-800">Form Permohonan Baru</h2>
                <p class="text-sm text-gray-500 mt-1 font-medium">Isi data dengan benar. PDF otomatis terunduh setelah menekan tombol kirim.</p>
            </div>

           <form id="formSurat" action="{{ route('surat.store') }}" method="POST" class="space-y-6">
    @csrf
    
    <div>
        <label class="block text-gray-700 text-xs font-bold mb-2 uppercase tracking-wide">Nama Lengkap Pemohon</label>
        <input type="text" name="nama" required class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-[#d4a017] outline-none transition-all" placeholder="Masukkan nama sesuai KTP">
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700 text-xs font-bold mb-2 uppercase tracking-wide">NIK KTP</label>
            <input type="number" name="nik" required class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-[#d4a017] outline-none transition-all" placeholder="16 Digit NIK">
        </div>
        <div>
            <label class="block text-gray-700 text-xs font-bold mb-2 uppercase tracking-wide">Blok / No Rumah</label>
            <input type="text" name="blok" required class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-[#d4a017] outline-none transition-all" placeholder="Misal: Blok A No. 12">
        </div>
    </div>

    <div>
        <label class="block text-gray-700 text-xs font-bold mb-2 uppercase tracking-wide">Jenis Surat Pengantar</label>
        <select name="jenis" required class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-[#d4a017] outline-none transition-all text-gray-700 font-medium">
            <option value="" disabled selected>Pilih jenis surat...</option>
            <option value="Surat Keterangan Domisili">Surat Keterangan Domisili</option>
            <option value="Surat Pengantar Pembuatan KK/KTP">Surat Pengantar Pembuatan KK/KTP</option>
            <option value="Surat Keterangan Tidak Mampu (SKTM)">Surat Keterangan Tidak Mampu (SKTM)</option>
            <option value="Surat Izin Usaha di Lingkungan RT">Surat Izin Usaha di Lingkungan RT</option>
        </select>
    </div>

    <div>
        <label class="block text-gray-700 text-xs font-bold mb-2 uppercase tracking-wide">Alasan Permohonan / Keperluan</label>
        <textarea name="keperluan" required rows="4" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-[#d4a017] outline-none transition-all" placeholder="Jelaskan secara singkat kegunaan surat ini..."></textarea>
    </div>

    <button type="submit" class="w-full bg-gray-900 text-white font-bold py-4 rounded-xl hover:bg-[#d4a017] transition-colors tracking-widest text-sm mt-4 flex justify-center items-center gap-2">
        Kirim Permohonan
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" /></svg>
    </button>
</form>

        </div>
    </section>

    <footer class="bg-[#1f2328] text-white pt-20 pb-10 px-6 lg:px-12 mt-auto">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-16">
                <div class="fade-up reveal">
                    <img src="{{ asset('images/logort.png') }}" alt="Logo RT" class="h-20 mb-8 opacity-90">
                    <p class="text-gray-400 font-medium leading-relaxed mb-6">Website Resmi Layanan RT 01. Media informasi dan transparansi untuk seluruh warga di lingkungan Kawasan RT 1 Banjarbaru.</p>
                </div>
                <div class="fade-up reveal">
                    <h3 class="text-lg font-bold border-l-4 border-[#d4a017] pl-4 mb-8">Alamat & Kontak</h3>
                    <ul class="space-y-4 text-gray-400 font-medium">
                        <li class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#d4a017]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                            <span>(+62) 85751524327</span>
                        </li>
                    </ul>
                </div>
                <div class="fade-up reveal">
                    <h3 class="text-lg font-bold border-l-4 border-[#d4a017] pl-4 mb-8">Tautan Layanan</h3>
                    <div class="grid grid-cols-2 gap-4 text-gray-400 font-bold text-sm uppercase tracking-wide">
                        <a href="{{ route('beranda') }}#profil" class="hover:text-[#d4a017] transition-colors">Profil RT</a>
                        <a href="{{ route('beranda') }}#informasi" class="hover:text-[#d4a017] transition-colors">Layanan Info</a>
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

        document.getElementById('formSurat').addEventListener('submit', function(e) {
            e.preventDefault();

            const nama = document.getElementById('nama').value;
            const nik = document.getElementById('nik').value;
            const blok = document.getElementById('blok').value;
            const jenis = document.getElementById('jenis').value;
            const keperluan = document.getElementById('keperluan').value;
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script>
    document.getElementById('formSurat').addEventListener('submit', function(e) {
        if (this.dataset.submitted === 'true') return;
        
        e.preventDefault(); 

        const nama = document.querySelector('input[name="nama"]').value;
        const nik = document.querySelector('input[name="nik"]').value;
        const blok = document.querySelector('input[name="blok"]').value;
        const jenis = document.querySelector('select[name="jenis"]').value;
        const keperluan = document.querySelector('textarea[name="keperluan"]').value;

        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        doc.setFont("helvetica", "bold");
        doc.setFontSize(14);
        doc.text("RUKUN TETANGGA 01 (RT 01)", 105, 20, null, null, "center");
        doc.setFontSize(11);
        doc.text("RT 01, BANJARBARU SELATAN, BANJARBARU", 105, 27, null, null, "center");
        doc.line(20, 32, 190, 32); 
        doc.line(20, 33, 190, 33); 

        doc.setFont("helvetica", "bold");
        doc.setFontSize(12);
        doc.text("SURAT PENGANTAR RT", 105, 45, null, null, "center");
        doc.setLineWidth(0.5);
        doc.line(75, 46, 135, 46); 

        doc.setFont("helvetica", "normal");
        doc.setFontSize(11);
        doc.text("Yang bertanda tangan di bawah ini Ketua RT 01 ,", 20, 60);
        doc.text("menerangkan dengan sesungguhnya bahwa:", 20, 67);

        doc.text(`Nama Lengkap   : ${nama}`, 30, 80);
        doc.text(`NIK KTP              : ${nik}`, 30, 88);
        doc.text(`Blok / No. Rumah: ${blok}`, 30, 96);

        doc.text("Adalah benar warga yang berdomisili di lingkungan RT 01. Surat pengantar ini", 20, 110);
        doc.text("dibuat sebagai kelengkapan administrasi untuk:", 20, 117);

        doc.setFont("helvetica", "bold");
        doc.text(`Jenis Surat      : ${jenis}`, 30, 130);
        doc.text(`Keperluan        : ${keperluan}`, 30, 138);

        doc.setFont("helvetica", "normal");
        doc.text("Demikian surat pengantar ini dibuat untuk dapat dipergunakan sebagaimana mestinya.", 20, 155);

        const today = new Date().toLocaleDateString('id-ID', { year: 'numeric', month: 'long', day: 'numeric' });
        doc.text(`Banjarbaru, ${today}`, 130, 175);
        doc.text("Ketua RT 01", 130, 182);
        doc.text("( Aditya Febrian )", 130, 210);

        doc.save(`Surat_Pengantar_${nama.replace(/\s+/g, '_')}.pdf`);

        this.dataset.submitted = 'true';
        
        const btnSubmit = this.querySelector('button[type="submit"]');
        btnSubmit.innerHTML = "Memproses Data...";
        btnSubmit.classList.add('opacity-50', 'cursor-not-allowed');

        setTimeout(() => {
            this.submit();
        }, 1500);
    });
</script>
</body>
</html>