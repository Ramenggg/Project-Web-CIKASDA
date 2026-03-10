{{-- Layanan Digital --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">

        {{-- Header Section --}}
        <div class="text-center mb-12">
            <span class="inline-block bg-blue-100 text-blue-700 text-xs font-semibold px-4 py-1.5 rounded-full uppercase tracking-wide mb-3">
                Layanan Kami
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                Layanan <span class="text-blue-700">Digital</span> CIKASDA
            </h2>
            <p class="text-gray-500 max-w-2xl mx-auto text-base leading-relaxed">
                Kami menyediakan berbagai layanan digital untuk memudahkan masyarakat
                dalam mengakses informasi dan layanan publik secara online.
            </p>
        </div>

        {{-- Grid Layanan Utama --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">

            {{-- Card SISDA --}}
            <div class="group bg-white border border-gray-100 rounded-2xl p-6 shadow-sm
                        hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="bg-blue-100 group-hover:bg-blue-700 rounded-xl p-4 w-fit mb-5 transition-all duration-300">
                    <svg class="w-8 h-8 text-blue-700 group-hover:text-white transition-all duration-300"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">SISDA</h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-5">
                    Sistem Informasi Data Sumber Daya Air untuk pengelolaan
                    dan monitoring data sumber daya air.
                </p>
                <a href="{{ route('layanan.sisda') }}"
                   class="inline-flex items-center gap-1.5 text-blue-700 text-sm font-semibold
                          hover:gap-3 transition-all duration-300">
                    Akses Layanan
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            {{-- Card e-PADUNGKU --}}
            <div class="group bg-white border border-gray-100 rounded-2xl p-6 shadow-sm
                        hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="bg-green-100 group-hover:bg-green-600 rounded-xl p-4 w-fit mb-5 transition-all duration-300">
                    <svg class="w-8 h-8 text-green-600 group-hover:text-white transition-all duration-300"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">e-PADUNGKU</h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-5">
                    Sistem pengelolaan data infrastruktur secara elektronik
                    yang terintegrasi dan mudah diakses.
                </p>
                <a href="{{ route('layanan.e-padungku') }}"
                   class="inline-flex items-center gap-1.5 text-green-600 text-sm font-semibold
                          hover:gap-3 transition-all duration-300">
                    Akses Layanan
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            {{-- Card IRIGASIKU --}}
            <div class="group bg-white border border-gray-100 rounded-2xl p-6 shadow-sm
                        hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="bg-cyan-100 group-hover:bg-cyan-600 rounded-xl p-4 w-fit mb-5 transition-all duration-300">
                    <svg class="w-8 h-8 text-cyan-600 group-hover:text-white transition-all duration-300"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">IRIGASIKU</h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-5">
                    Sistem informasi pengelolaan jaringan irigasi untuk
                    optimalisasi distribusi air pertanian.
                </p>
                <a href="{{ route('layanan.irigasiku') }}"
                   class="inline-flex items-center gap-1.5 text-cyan-600 text-sm font-semibold
                          hover:gap-3 transition-all duration-300">
                    Akses Layanan
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            {{-- Card e-Bantekbgn --}}
            <div class="group bg-white border border-gray-100 rounded-2xl p-6 shadow-sm
                        hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="bg-orange-100 group-hover:bg-orange-500 rounded-xl p-4 w-fit mb-5 transition-all duration-300">
                    <svg class="w-8 h-8 text-orange-500 group-hover:text-white transition-all duration-300"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">e-Bantekbgn</h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-5">
                    Sistem bantuan teknis bangunan gedung negara secara
                    elektronik yang cepat dan efisien.
                </p>
                <a href="{{ route('layanan.e-bantekbgn') }}"
                   class="inline-flex items-center gap-1.5 text-orange-500 text-sm font-semibold
                          hover:gap-3 transition-all duration-300">
                    Akses Layanan
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

        </div>

        {{-- Banner Informasi Publik --}}
        <div class="bg-gradient-to-r from-blue-700 to-blue-900 rounded-2xl p-8 md:p-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">

                {{-- Teks --}}
                <div class="md:col-span-2">
                    <h3 class="text-xl md:text-2xl font-bold text-white mb-3">
                        Butuh Informasi atau Bantuan?
                    </h3>
                    <p class="text-blue-200 text-sm leading-relaxed">
                        Sampaikan pertanyaan, saran, atau pengaduan Anda melalui layanan
                        pengaduan online kami. Kami siap membantu Anda.
                    </p>
                </div>

                {{-- Tombol --}}
                <div class="flex flex-col sm:flex-row md:flex-col lg:flex-row gap-3 md:justify-end">
                    <a href="{{ route('pengaduan') }}"
                       class="inline-flex items-center justify-center gap-2 bg-white text-blue-800
                              font-semibold px-6 py-3 rounded-lg hover:bg-blue-50 transition text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                        </svg>
                        Kirim Pengaduan
                    </a>
                    <a href="{{ route('layanan') }}"
                       class="inline-flex items-center justify-center gap-2 bg-transparent border-2
                              border-white text-white font-semibold px-6 py-3 rounded-lg
                              hover:bg-white/10 transition text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                        </svg>
                        Semua Layanan
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>