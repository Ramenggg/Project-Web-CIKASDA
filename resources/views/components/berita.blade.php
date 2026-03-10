{{-- Berita Terbaru --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">

        {{-- Header Section --}}
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12">
            <div>
                <span class="inline-block bg-blue-100 text-blue-700 text-xs font-semibold px-4 py-1.5 rounded-full uppercase tracking-wide mb-3">
                    Berita & Informasi
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">
                    Berita <span class="text-blue-700">Terbaru</span>
                </h2>
                <p class="text-gray-500 text-base">
                    Informasi terkini seputar kegiatan dan program CIKASDA.
                </p>
            </div>
            <a href="{{ route('berita') }}"
               class="inline-flex items-center gap-2 text-blue-700 font-semibold text-sm
                      border border-blue-700 px-5 py-2.5 rounded-lg hover:bg-blue-700
                      hover:text-white transition shrink-0">
                Lihat Semua Berita
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>

        {{-- Grid Berita --}}
        @if(isset($beritaTerbaru) && $beritaTerbaru->count() > 0)

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($beritaTerbaru as $berita)
                <article class="group bg-white border border-gray-100 rounded-2xl overflow-hidden
                                shadow-sm hover:shadow-xl transition-all duration-300">
                    {{-- Gambar --}}
                    <div class="relative overflow-hidden h-52">
                        @if($berita->gambar)
                            <img src="{{ asset('storage/' . $berita->gambar) }}"
                                 alt="{{ $berita->judul }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center">
                                <svg class="w-16 h-16 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        @endif
                        {{-- Kategori Badge --}}
                        <span class="absolute top-3 left-3 bg-blue-700 text-white text-xs font-semibold px-3 py-1 rounded-full">
                            {{ $berita->kategori ?? 'Berita' }}
                        </span>
                    </div>

                    {{-- Konten --}}
                    <div class="p-6">
                        {{-- Meta --}}
                        <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                            <span class="flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                {{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('d F Y') }}
                            </span>
                            <span>•</span>
                            <span class="flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                {{ $berita->penulis ?? 'Admin' }}
                            </span>
                        </div>

                        {{-- Judul --}}
                        <h3 class="font-bold text-gray-800 text-lg leading-snug mb-3
                                   group-hover:text-blue-700 transition line-clamp-2">
                            {{ $berita->judul }}
                        </h3>

                        {{-- Ringkasan --}}
                        <p class="text-gray-500 text-sm leading-relaxed line-clamp-3 mb-4">
                            {{ $berita->ringkasan ?? Str::limit(strip_tags($berita->isi), 120) }}
                        </p>

                        {{-- Link --}}
                        <a href="{{ route('berita.show', $berita->slug) }}"
                           class="inline-flex items-center gap-1.5 text-blue-700 text-sm font-semibold
                                  hover:gap-3 transition-all duration-300">
                            Baca Selengkapnya
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </article>
                @endforeach
            </div>

        @else

            {{-- Placeholder jika belum ada berita --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Placeholder Card 1 --}}
                @for($i = 1; $i <= 3; $i++)
                <article class="group bg-white border border-gray-100 rounded-2xl overflow-hidden shadow-sm
                                hover:shadow-xl transition-all duration-300">
                    {{-- Gambar Placeholder --}}
                    <div class="relative overflow-hidden h-52 bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center">
                        <svg class="w-16 h-16 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span class="absolute top-3 left-3 bg-blue-700 text-white text-xs font-semibold px-3 py-1 rounded-full">
                            Berita
                        </span>
                    </div>

                    {{-- Konten Placeholder --}}
                    <div class="p-6">
                        <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                            <span class="flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}
                            </span>
                            <span>•</span>
                            <span>Admin CIKASDA</span>
                        </div>
                        <h3 class="font-bold text-gray-800 text-lg leading-snug mb-3 group-hover:text-blue-700 transition">
                            Judul Berita CIKASDA Sulawesi Tengah
                        </h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-4">
                            Ringkasan berita kegiatan dan program Dinas Cipta Karya dan
                            Sumber Daya Air Provinsi Sulawesi Tengah akan ditampilkan di sini.
                        </p>
                        <span class="inline-flex items-center gap-1.5 text-blue-300 text-sm font-semibold cursor-not-allowed">
                            Baca Selengkapnya
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </div>
                </article>
                @endfor

            </div>

            {{-- Info Belum Ada Berita --}}
            <div class="text-center mt-8">
                <p class="text-gray-400 text-sm">
                    Belum ada berita. Tambahkan berita melalui panel admin.
                </p>
            </div>

        @endif

    </div>
</section>