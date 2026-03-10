{{-- Hero Section --}}
<section class="relative bg-blue-900 min-h-[600px] flex items-center overflow-hidden">

    {{-- Background Image dengan Overlay --}}
    <div class="absolute inset-0">
        <img src="{{ asset('images/hero-bg.jpg') }}"
             alt="Hero Background"
             class="w-full h-full object-cover opacity-20">
        {{-- Gradient Overlay --}}
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900 via-blue-800/90 to-blue-700/70"></div>
    </div>

    {{-- Decorative Circle --}}
    <div class="absolute -right-20 -top-20 w-96 h-96 bg-blue-600/20 rounded-full blur-3xl"></div>
    <div class="absolute -left-20 -bottom-20 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>

    {{-- Konten Hero --}}
    <div class="relative max-w-7xl mx-auto px-4 py-20 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            {{-- Teks Kiri --}}
            <div>
                {{-- Badge --}}
                <span class="inline-flex items-center gap-2 bg-blue-700/50 border border-blue-500/50
                             text-blue-200 text-xs font-medium px-3 py-1.5 rounded-full mb-6">
                    🏛️ Pemerintah Provinsi Sulawesi Tengah
                </span>

                {{-- Judul --}}
                <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight mb-4">
                    Dinas Cipta Karya <br>
                    <span class="text-blue-300">dan Sumber Daya Air</span>
                </h1>

                {{-- Sub Judul --}}
                <p class="text-blue-100 text-lg font-medium mb-3">
                    Provinsi Sulawesi Tengah
                </p>

                {{-- Deskripsi --}}
                <p class="text-blue-200 text-base leading-relaxed mb-8 max-w-lg">
                    Membangun infrastruktur yang berkelanjutan dan mengelola sumber daya air
                    untuk kesejahteraan masyarakat Sulawesi Tengah yang lebih baik.
                </p>

                {{-- Tombol CTA --}}
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('profil') }}"
                       class="inline-flex items-center gap-2 bg-white text-blue-800 font-semibold
                              px-6 py-3 rounded-lg hover:bg-blue-50 transition shadow-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Tentang Kami
                    </a>
                    <a href="{{ route('layanan') }}"
                       class="inline-flex items-center gap-2 bg-transparent border-2 border-white
                              text-white font-semibold px-6 py-3 rounded-lg hover:bg-white/10 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        Layanan Kami
                    </a>
                </div>
            </div>

            {{-- Card Kanan --}}
            <div class="hidden lg:block">
                <div class="grid grid-cols-2 gap-4">

                    {{-- Card 1 --}}
                    <div class="bg-white/10 backdrop-blur border border-white/20 rounded-2xl p-6 text-white">
                        <div class="bg-blue-500/30 rounded-xl p-3 w-fit mb-4">
                            <svg class="w-8 h-8 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg">Infrastruktur</h3>
                        <p class="text-blue-200 text-sm mt-1">Pembangunan gedung & permukiman</p>
                    </div>

                    {{-- Card 2 --}}
                    <div class="bg-white/10 backdrop-blur border border-white/20 rounded-2xl p-6 text-white mt-6">
                        <div class="bg-blue-500/30 rounded-xl p-3 w-fit mb-4">
                            <svg class="w-8 h-8 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg">Sumber Daya Air</h3>
                        <p class="text-blue-200 text-sm mt-1">Pengelolaan irigasi & air bersih</p>
                    </div>

                    {{-- Card 3 --}}
                    <div class="bg-white/10 backdrop-blur border border-white/20 rounded-2xl p-6 text-white">
                        <div class="bg-blue-500/30 rounded-xl p-3 w-fit mb-4">
                            <svg class="w-8 h-8 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg">Layanan Digital</h3>
                        <p class="text-blue-200 text-sm mt-1">SISDA, e-PADUNGKU, IRIGASIKU</p>
                    </div>

                    {{-- Card 4 --}}
                    <div class="bg-white/10 backdrop-blur border border-white/20 rounded-2xl p-6 text-white mt-6">
                        <div class="bg-blue-500/30 rounded-xl p-3 w-fit mb-4">
                            <svg class="w-8 h-8 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg">Pelayanan Publik</h3>
                        <p class="text-blue-200 text-sm mt-1">Transparan & akuntabel</p>
                    </div>

                </div>
            </div>

        </div>
    </div>

    {{-- Wave Bottom --}}
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 60L48 50C96 40 192 20 288 15C384 10 480 20 576 25C672 30 768 30 864 25C960 20 1056 10 1152 10C1248 10 1344 20 1392 25L1440 30V60H0Z"
                  fill="#f9fafb"/>
        </svg>
    </div>

</section>