{{-- Tentang CIKASDA --}}
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">

        {{-- Header Section --}}
        <div class="text-center mb-12">
            <span class="inline-block bg-blue-100 text-blue-700 text-xs font-semibold px-4 py-1.5 rounded-full uppercase tracking-wide mb-3">
                Tentang Kami
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                Dinas Cipta Karya dan <span class="text-blue-700">Sumber Daya Air</span>
            </h2>
            <p class="text-gray-500 max-w-2xl mx-auto text-base leading-relaxed">
                Instansi pemerintah yang bertanggung jawab dalam pembangunan infrastruktur
                dan pengelolaan sumber daya air di Provinsi Sulawesi Tengah.
            </p>
        </div>

        {{-- Konten Utama --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">

            {{-- Gambar Kiri --}}
            <div class="relative">
                <div class="rounded-2xl overflow-hidden shadow-xl">
                    {{-- <img src="{{ asset('images/tentang-cikasda.jpg') }}" --}}
                    <img src="{{ asset('images/hero-cikasda.jpg') }}"
                         alt="Tentang CIKASDA"
                         class="w-full h-80 object-cover">
                </div>
                {{-- Badge Floating --}}
                <div class="absolute -bottom-6 -right-6 bg-blue-700 text-white rounded-2xl p-5 shadow-xl hidden md:block">
                    <p class="text-3xl font-bold">25+</p>
                    <p class="text-blue-200 text-sm">Tahun Pengabdian</p>
                </div>
                {{-- Decorative --}}
                <div class="absolute -top-4 -left-4 w-24 h-24 bg-blue-100 rounded-2xl -z-10"></div>
            </div>

            {{-- Teks Kanan --}}
            <div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">
                    Melayani dengan Profesional dan Berintegritas
                </h3>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Dinas Cipta Karya dan Sumber Daya Air (CIKASDA) Provinsi Sulawesi Tengah
                    merupakan unsur pelaksana urusan pemerintahan di bidang pekerjaan umum,
                    khususnya cipta karya dan sumber daya air.
                </p>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Kami berkomitmen untuk mewujudkan pembangunan infrastruktur yang berkualitas,
                    berkelanjutan, dan berwawasan lingkungan demi kesejahteraan seluruh masyarakat
                    Sulawesi Tengah.
                </p>

                {{-- Poin Unggulan --}}
                <ul class="space-y-3 mb-8">
                    <li class="flex items-start gap-3">
                        <span class="bg-blue-100 text-blue-700 rounded-full p-1 mt-0.5 shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <span class="text-gray-600 text-sm">Pembangunan infrastruktur gedung dan permukiman yang berkualitas</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="bg-blue-100 text-blue-700 rounded-full p-1 mt-0.5 shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <span class="text-gray-600 text-sm">Pengelolaan sumber daya air dan irigasi secara optimal</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="bg-blue-100 text-blue-700 rounded-full p-1 mt-0.5 shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <span class="text-gray-600 text-sm">Pelayanan publik yang transparan dan akuntabel</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="bg-blue-100 text-blue-700 rounded-full p-1 mt-0.5 shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <span class="text-gray-600 text-sm">Inovasi layanan digital untuk kemudahan masyarakat</span>
                    </li>
                </ul>

                <a href="{{ route('profil') }}"
                   class="inline-flex items-center gap-2 bg-blue-700 text-white font-semibold
                          px-6 py-3 rounded-lg hover:bg-blue-800 transition shadow-md">
                    Selengkapnya
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

        </div>

        {{-- Visi & Misi --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            {{-- Visi --}}
            <div class="bg-blue-700 rounded-2xl p-8 text-white">
                <div class="flex items-center gap-3 mb-4">
                    <div class="bg-white/20 rounded-xl p-2.5">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold">Visi</h3>
                </div>
                <p class="text-blue-100 leading-relaxed text-sm">
                    "Terwujudnya infrastruktur cipta karya dan sumber daya air yang handal,
                    berkelanjutan, dan berwawasan lingkungan untuk mendukung pembangunan
                    Provinsi Sulawesi Tengah yang maju dan sejahtera."
                </p>
            </div>

            {{-- Misi --}}
            <div class="bg-white border border-gray-100 rounded-2xl p-8 shadow-sm">
                <div class="flex items-center gap-3 mb-4">
                    <div class="bg-blue-100 rounded-xl p-2.5">
                        <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Misi</h3>
                </div>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2 text-sm text-gray-600">
                        <span class="text-blue-700 font-bold shrink-0">1.</span>
                        Meningkatkan kualitas infrastruktur gedung dan permukiman
                    </li>
                    <li class="flex items-start gap-2 text-sm text-gray-600">
                        <span class="text-blue-700 font-bold shrink-0">2.</span>
                        Mengoptimalkan pengelolaan sumber daya air dan irigasi
                    </li>
                    <li class="flex items-start gap-2 text-sm text-gray-600">
                        <span class="text-blue-700 font-bold shrink-0">3.</span>
                        Meningkatkan kualitas pelayanan publik berbasis digital
                    </li>
                    <li class="flex items-start gap-2 text-sm text-gray-600">
                        <span class="text-blue-700 font-bold shrink-0">4.</span>
                        Mewujudkan tata kelola pemerintahan yang transparan dan akuntabel
                    </li>
                </ul>
            </div>

        </div>

    </div>
</section>