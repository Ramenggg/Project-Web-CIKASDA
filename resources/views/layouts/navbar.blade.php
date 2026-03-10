<header class="sticky top-0 z-50 flex items-center h-[72px] px-6 gap-6
               bg-gradient-to-r from-[#1117b8] via-[#10148f] to-[#0b0f6d]
               border-b border-white/10 shadow-lg">

  {{-- Logo & Brand --}}
  <a href="{{ route('beranda') }}" class="flex items-center gap-3 shrink-0">
    <img src="{{ asset('img/logo-sulteng.png') }}" alt="Logo CIKASDA"
      class="h-[52px] w-auto rounded-md shadow-[0_6px_16px_rgba(0,0,0,0.3)]" onerror="this.style.display='none'">
    <div class="flex flex-col leading-tight">
      <span class="font-bold text-white text-[13px] uppercase tracking-[0.06em]">
        Dinas Cipta Karya dan Sumber Daya Air
      </span>
      <span class="font-semibold text-white/70 text-[11.5px] uppercase tracking-[0.05em]">
        Provinsi Sulawesi Tengah
      </span>
    </div>
  </a>

  {{-- Divider --}}
  <div class="h-8 w-px bg-white/20 shrink-0"></div>

  {{-- Menu Desktop --}}
  <nav class="hidden lg:flex items-center gap-0.5" aria-label="Navigasi utama">

    {{-- Beranda --}}
    <a href="{{ route('beranda') }}" @class([
      'relative inline-flex items-center px-3.5 py-2 rounded-md text-[13.5px] font-semibold tracking-wide transition-all duration-200 hover:bg-white/10',
      'text-[#f6a120]' => request()->routeIs('beranda'),
      'text-white/90 hover:text-white' => !request()->routeIs('beranda'),
    ])>
      Beranda
      @if(request()->routeIs('beranda'))
        <span class="absolute bottom-0 left-3 right-3 h-[2.5px] rounded-full
                               bg-gradient-to-r from-[#f6a120] to-[#ffd56e]"></span>
      @endif
    </a>

    {{-- Profil Dropdown --}}
    <div class="relative group">
      <button @class([
        'relative inline-flex items-center gap-1 px-3.5 py-2 rounded-md text-[13.5px] font-semibold tracking-wide transition-all duration-200 hover:bg-white/10 bg-transparent border-none cursor-pointer',
        'text-[#f6a120]' => request()->routeIs('profil*', 'visi-misi', 'struktur', 'tugas-fungsi', 'pejabat'),
        'text-white/90 hover:text-white' => !request()->routeIs('profil*', 'visi-misi', 'struktur', 'tugas-fungsi', 'pejabat'),
      ])>
        Profil
        <svg class="w-3 h-3 fill-none stroke-[2.5] stroke-current opacity-70
                            group-hover:opacity-100 group-hover:translate-y-px
                            transition-all duration-200" viewBox="0 0 24 24">
          <path d="M6 9l6 6 6-6" />
        </svg>
        @if(request()->routeIs('profil*', 'visi-misi', 'struktur', 'tugas-fungsi', 'pejabat'))
          <span class="absolute bottom-0 left-3 right-3 h-[2.5px] rounded-full
                                   bg-gradient-to-r from-[#f6a120] to-[#ffd56e]"></span>
        @endif
      </button>
      <ul class="absolute top-[calc(100%+4px)] left-0 min-w-[195px] bg-white rounded-xl
                       shadow-[0_16px_40px_rgba(0,0,0,0.16)] border border-black/[0.05]
                       py-1.5 list-none m-0
                       opacity-0 invisible translate-y-1.5
                       group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                       transition-all duration-200 z-50">
        <li><a href="{{ route('profil') }}" class="flex items-center gap-2 px-4 py-2.5 text-[13px] font-medium
                              text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-150">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-200 shrink-0"></span> Profil Dinas
          </a></li>
        <li><a href="{{ route('visi-misi') }}" class="flex items-center gap-2 px-4 py-2.5 text-[13px] font-medium
                              text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-150">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-200 shrink-0"></span> Visi & Misi
          </a></li>
        <li><a href="{{ route('struktur') }}" class="flex items-center gap-2 px-4 py-2.5 text-[13px] font-medium
                              text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-150">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-200 shrink-0"></span> Struktur Organisasi
          </a></li>
        <li><a href="{{ route('tugas-fungsi') }}" class="flex items-center gap-2 px-4 py-2.5 text-[13px] font-medium
                              text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-150">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-200 shrink-0"></span> Tugas & Fungsi
          </a></li>
        <li><a href="{{ route('pejabat') }}" class="flex items-center gap-2 px-4 py-2.5 text-[13px] font-medium
                              text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-150">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-200 shrink-0"></span> Pejabat
          </a></li>
      </ul>
    </div>

    {{-- Galeri Dropdown --}}
    <div class="relative group">
      <button @class([
        'relative inline-flex items-center gap-1 px-3.5 py-2 rounded-md text-[13.5px] font-semibold tracking-wide transition-all duration-200 hover:bg-white/10 bg-transparent border-none cursor-pointer',
        'text-[#f6a120]' => request()->routeIs('galeri*'),
        'text-white/90 hover:text-white' => !request()->routeIs('galeri*'),
      ])>
        Galeri
        <svg class="w-3 h-3 fill-none stroke-[2.5] stroke-current opacity-70
                            group-hover:opacity-100 group-hover:translate-y-px
                            transition-all duration-200" viewBox="0 0 24 24">
          <path d="M6 9l6 6 6-6" />
        </svg>
        @if(request()->routeIs('galeri*'))
          <span class="absolute bottom-0 left-3 right-3 h-[2.5px] rounded-full
                                   bg-gradient-to-r from-[#f6a120] to-[#ffd56e]"></span>
        @endif
      </button>
      <ul class="absolute top-[calc(100%+4px)] left-0 min-w-[160px] bg-white rounded-xl
                       shadow-[0_16px_40px_rgba(0,0,0,0.16)] border border-black/[0.05]
                       py-1.5 list-none m-0
                       opacity-0 invisible translate-y-1.5
                       group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                       transition-all duration-200 z-50">
        <li><a href="{{ route('galeri.foto') }}" class="flex items-center gap-2 px-4 py-2.5 text-[13px] font-medium
                              text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-150">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-200 shrink-0"></span> Foto
          </a></li>
        <li><a href="{{ route('galeri.video') }}" class="flex items-center gap-2 px-4 py-2.5 text-[13px] font-medium
                              text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-150">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-200 shrink-0"></span> Video
          </a></li>
      </ul>
    </div>

    {{-- Informasi Publik Dropdown --}}
    <div class="relative group">
      <button @class([
        'relative inline-flex items-center gap-1 px-3.5 py-2 rounded-md text-[13.5px] font-semibold tracking-wide transition-all duration-200 hover:bg-white/10 bg-transparent border-none cursor-pointer',
        'text-[#f6a120]' => request()->routeIs('dokumen*'),
        'text-white/90 hover:text-white' => !request()->routeIs('dokumen*'),
      ])>
        Informasi Publik
        <svg class="w-3 h-3 fill-none stroke-[2.5] stroke-current opacity-70
                            group-hover:opacity-100 group-hover:translate-y-px
                            transition-all duration-200" viewBox="0 0 24 24">
          <path d="M6 9l6 6 6-6" />
        </svg>
        @if(request()->routeIs('dokumen*'))
          <span class="absolute bottom-0 left-3 right-3 h-[2.5px] rounded-full
                                   bg-gradient-to-r from-[#f6a120] to-[#ffd56e]"></span>
        @endif
      </button>
      <ul class="absolute top-[calc(100%+4px)] left-0 min-w-[210px] bg-white rounded-xl
                       shadow-[0_16px_40px_rgba(0,0,0,0.16)] border border-black/[0.05]
                       py-1.5 list-none m-0
                       opacity-0 invisible translate-y-1.5
                       group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                       transition-all duration-200 z-50">
        <li><a href="{{ route('dokumen') }}" class="flex items-center gap-2 px-4 py-2.5 text-[13px] font-medium
                              text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-150">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-200 shrink-0"></span> Daftar Informasi Publik
          </a></li>
        <li><a href="#" class="flex items-center gap-2 px-4 py-2.5 text-[13px] font-medium
                              text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-150">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-200 shrink-0"></span> Informasi Berkala
          </a></li>
        <li><a href="#" class="flex items-center gap-2 px-4 py-2.5 text-[13px] font-medium
                              text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-150">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-200 shrink-0"></span> Informasi Serta Merta
          </a></li>
        <li><a href="#" class="flex items-center gap-2 px-4 py-2.5 text-[13px] font-medium
                              text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-150">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-200 shrink-0"></span> Informasi Setiap Saat
          </a></li>
      </ul>
    </div>

    {{-- PPID Dropdown --}}
    <div class="relative group">
      <button class="relative inline-flex items-center gap-1 px-3.5 py-2 rounded-md
                           text-[13.5px] font-semibold tracking-wide text-white/90
                           hover:text-white hover:bg-white/10 transition-all duration-200
                           bg-transparent border-none cursor-pointer">
        PPID
        <svg class="w-3 h-3 fill-none stroke-[2.5] stroke-current opacity-70
                            group-hover:opacity-100 group-hover:translate-y-px
                            transition-all duration-200" viewBox="0 0 24 24">
          <path d="M6 9l6 6 6-6" />
        </svg>
      </button>
      <ul class="absolute top-[calc(100%+4px)] left-0 min-w-[200px] bg-white rounded-xl
                       shadow-[0_16px_40px_rgba(0,0,0,0.16)] border border-black/[0.05]
                       py-1.5 list-none m-0
                       opacity-0 invisible translate-y-1.5
                       group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                       transition-all duration-200 z-50">
        <li><a href="#" class="flex items-center gap-2 px-4 py-2.5 text-[13px] font-medium
                              text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-150">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-200 shrink-0"></span> Profil PPID
          </a></li>
        <li><a href="#" class="flex items-center gap-2 px-4 py-2.5 text-[13px] font-medium
                              text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-150">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-200 shrink-0"></span> Permohonan Informasi
          </a></li>
        <li><a href="#" class="flex items-center gap-2 px-4 py-2.5 text-[13px] font-medium
                              text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-150">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-200 shrink-0"></span> Pengajuan Keberatan
          </a></li>
      </ul>
    </div>

    {{-- Layanan Dropdown --}}
    <div class="relative group">
      <button @class([
        'relative inline-flex items-center gap-1 px-3.5 py-2 rounded-md text-[13.5px] font-semibold tracking-wide transition-all duration-200 hover:bg-white/10 bg-transparent border-none cursor-pointer',
        'text-[#f6a120]' => request()->routeIs('layanan*', 'pengaduan*'),
        'text-white/90 hover:text-white' => !request()->routeIs('layanan*', 'pengaduan*'),
      ])>
        Layanan
        <svg class="w-3 h-3 fill-none stroke-[2.5] stroke-current opacity-70
                            group-hover:opacity-100 group-hover:translate-y-px
                            transition-all duration-200" viewBox="0 0 24 24">
          <path d="M6 9l6 6 6-6" />
        </svg>
        @if(request()->routeIs('layanan*', 'pengaduan*'))
          <span class="absolute bottom-0 left-3 right-3 h-[2.5px] rounded-full
                                   bg-gradient-to-r from-[#f6a120] to-[#ffd56e]"></span>
        @endif
      </button>
      <ul class="absolute top-[calc(100%+4px)] right-0 min-w-[185px] bg-white rounded-xl
                       shadow-[0_16px_40px_rgba(0,0,0,0.16)] border border-black/[0.05]
                       py-1.5 list-none m-0
                       opacity-0 invisible translate-y-1.5
                       group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                       transition-all duration-200 z-50">
        <li><a href="{{ route('layanan') }}" class="flex items-center gap-2 px-4 py-2.5 text-[13px] font-medium
                              text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-150">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-200 shrink-0"></span> Semua Layanan
          </a></li>
        <li><a href="{{ route('layanan.sisda') }}" class="flex items-center gap-2 px-4 py-2.5 text-[13px] font-medium
                              text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-150">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-200 shrink-0"></span> SISDA
          </a></li>
        <li><a href="{{ route('layanan.e-padungku') }}" class="flex items-center gap-2 px-4 py-2.5 text-[13px] font-medium
                              text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-150">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-200 shrink-0"></span> e-PADUNGKU
          </a></li>
        <li><a href="{{ route('layanan.irigasiku') }}" class="flex items-center gap-2 px-4 py-2.5 text-[13px] font-medium
                              text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-150">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-200 shrink-0"></span> IRIGASIKU
          </a></li>
        <li><a href="{{ route('layanan.e-bantekbgn') }}" class="flex items-center gap-2 px-4 py-2.5 text-[13px] font-medium
                              text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-150">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-200 shrink-0"></span> e-Bantekbgn
          </a></li>
        <li><a href="{{ route('pengaduan') }}" class="flex items-center gap-2 px-4 py-2.5 text-[13px] font-medium
                              text-slate-700 hover:bg-blue-50 hover:text-blue-700 transition-all duration-150">
            <span class="w-1.5 h-1.5 rounded-full bg-blue-200 shrink-0"></span> Pengaduan
          </a></li>
      </ul>
    </div>

  </nav>

  {{-- Sosial Media --}}
  <div class="hidden lg:flex items-center gap-2 ml-auto shrink-0" aria-label="Media sosial">
    <a href="https://www.instagram.com/cikasda.sulteng/" target="_blank" rel="noopener" aria-label="Instagram" class="w-9 h-9 rounded-lg grid place-items-center bg-white/10 border border-white/20
                  hover:bg-white/20 hover:-translate-y-0.5 transition-all duration-200">
      <img src="{{ asset('img/sosmed/logo-instagram.png') }}" alt="Instagram" class="w-5 h-5 object-contain">
    </a>
    <a href="https://www.youtube.com/@cikasdasulawesitengah" target="_blank" rel="noopener" aria-label="YouTube" class="w-9 h-9 rounded-lg grid place-items-center bg-white/10 border border-white/20
                  hover:bg-white/20 hover:-translate-y-0.5 transition-all duration-200">
      <img src="{{ asset('img/sosmed/logo-youtube.png') }}" alt="YouTube" class="w-5 h-5 object-contain">
    </a>
    <a href="https://www.facebook.com/cikasda.sulteng" target="_blank" rel="noopener" aria-label="Facebook" class="w-9 h-9 rounded-lg grid place-items-center bg-white/10 border border-white/20
                  hover:bg-white/20 hover:-translate-y-0.5 transition-all duration-200">
      <img src="{{ asset('img/sosmed/logo-facebook.png') }}" alt="Facebook" class="w-5 h-5 object-contain">
    </a>
  </div>

  {{-- Hamburger Mobile --}}
  <button id="nav-hamburger" class="lg:hidden ml-auto flex flex-col justify-center gap-[5px]
                   bg-transparent border-none cursor-pointer p-2" aria-label="Buka menu">
    <span class="block w-5 h-0.5 bg-white rounded-full transition-all duration-200"></span>
    <span class="block w-5 h-0.5 bg-white rounded-full transition-all duration-200"></span>
    <span class="block w-5 h-0.5 bg-white rounded-full transition-all duration-200"></span>
  </button>

</header>

{{-- Mobile Menu --}}
<div id="nav-mobile" class="hidden lg:hidden sticky top-[72px] z-40
            bg-[#0f1b6e] border-t border-white/10 shadow-lg">
  <ul class="list-none m-0 p-0">
    <li><a href="{{ route('beranda') }}"
        class="block px-6 py-3 text-sm font-semibold text-white/90 border-b border-white/[0.06] hover:bg-white/10 hover:text-white transition-all duration-150">Beranda</a>
    </li>
    <li><a href="{{ route('profil') }}"
        class="block px-6 py-3 text-sm font-semibold text-white/90 border-b border-white/[0.06] hover:bg-white/10 hover:text-white transition-all duration-150">Profil</a>
    </li>
    <li><a href="{{ route('struktur') }}"
        class="block px-6 py-3 text-sm font-semibold text-white/90 border-b border-white/[0.06] hover:bg-white/10 hover:text-white transition-all duration-150">Struktur
        Organisasi</a></li>
    <li><a href="{{ route('galeri') }}"
        class="block px-6 py-3 text-sm font-semibold text-white/90 border-b border-white/[0.06] hover:bg-white/10 hover:text-white transition-all duration-150">Galeri</a>
    </li>
    <li><a href="{{ route('dokumen') }}"
        class="block px-6 py-3 text-sm font-semibold text-white/90 border-b border-white/[0.06] hover:bg-white/10 hover:text-white transition-all duration-150">Informasi
        Publik</a></li>
    <li><a href="{{ route('layanan') }}"
        class="block px-6 py-3 text-sm font-semibold text-white/90 border-b border-white/[0.06] hover:bg-white/10 hover:text-white transition-all duration-150">Layanan</a>
    </li>
    <li><a href="{{ route('pengaduan') }}"
        class="block px-6 py-3 text-sm font-semibold text-white/90 hover:bg-white/10 hover:text-white transition-all duration-150">Pengaduan</a>
    </li>
  </ul>
</div>

@push('scripts')
  <script>
    const hamburger = document.getElementById('nav-hamburger');
    const mobileMenu = document.getElementById('nav-mobile');
    hamburger.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
@endpush