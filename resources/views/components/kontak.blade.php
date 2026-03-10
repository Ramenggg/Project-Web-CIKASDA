{{-- Kontak --}}
<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4">

    {{-- Header Section --}}
    <div class="text-center mb-12">
      <span
        class="inline-block bg-blue-100 text-blue-700 text-xs font-semibold px-4 py-1.5 rounded-full uppercase tracking-wide mb-3">
        Hubungi Kami
      </span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
        Kontak & <span class="text-blue-700">Lokasi</span>
      </h2>
      <p class="text-gray-500 max-w-2xl mx-auto text-base leading-relaxed">
        Kami siap melayani Anda. Jangan ragu untuk menghubungi kami
        melalui berbagai saluran komunikasi yang tersedia.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

      {{-- Kolom Kiri - Info Kontak --}}
      <div class="lg:col-span-1 flex flex-col gap-5">

        {{-- Alamat --}}
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100
                            flex items-start gap-4 hover:shadow-md transition">
          <div class="bg-blue-100 rounded-xl p-3 shrink-0">
            <svg class="w-6 h-6 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          </div>
          <div>
            <h4 class="font-semibold text-gray-800 mb-1">Alamat Kantor</h4>
            <p class="text-gray-500 text-sm leading-relaxed">
              Jl. Sam Ratulangi No.101,<br>
              Palu, Sulawesi Tengah 94111
            </p>
          </div>
        </div>

        {{-- Telepon --}}
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100
                            flex items-start gap-4 hover:shadow-md transition">
          <div class="bg-green-100 rounded-xl p-3 shrink-0">
            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
          </div>
          <div>
            <h4 class="font-semibold text-gray-800 mb-1">Telepon</h4>
            <a href="tel:+62451123456" class="text-gray-500 text-sm hover:text-green-600 transition">
              (0451) 123456
            </a>
          </div>
        </div>

        {{-- Email --}}
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100
                            flex items-start gap-4 hover:shadow-md transition">
          <div class="bg-orange-100 rounded-xl p-3 shrink-0">
            <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
          </div>
          <div>
            <h4 class="font-semibold text-gray-800 mb-1">Email</h4>
            <a href="mailto:cikasda@sultengprov.go.id" class="text-gray-500 text-sm hover:text-orange-500 transition">
              cikasda@sultengprov.go.id
            </a>
          </div>
        </div>

        {{-- Jam Kerja --}}
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100
                            flex items-start gap-4 hover:shadow-md transition">
          <div class="bg-cyan-100 rounded-xl p-3 shrink-0">
            <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <div>
            <h4 class="font-semibold text-gray-800 mb-1">Jam Kerja</h4>
            <p class="text-gray-500 text-sm leading-relaxed">
              Senin - Kamis: 08.00 - 16.30 WITA<br>
              Jumat: 08.00 - 16.00 WITA<br>
              <span class="text-red-400">Sabtu - Minggu: Libur</span>
            </p>
          </div>
        </div>

      </div>

      {{-- Kolom Kanan - Peta & Form --}}
      <div class="lg:col-span-2 flex flex-col gap-6">

        {{-- Google Maps --}}
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100">
          <div class="p-4 border-b border-gray-100 flex items-center gap-2">
            <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
            </svg>
            <h4 class="font-semibold text-gray-800 text-sm">Lokasi Kantor</h4>
          </div>

          <iframe src="https://www.google.com/maps?q=-0.9147175,119.8909654&hl=id&z=18&output=embed" width="100%"
            height="280" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            class="w-full">
          </iframe>
        </div>

        {{-- Form Kontak Cepat --}}
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
          <h4 class="font-bold text-gray-800 text-lg mb-1">Kirim Pesan</h4>
          <p class="text-gray-400 text-sm mb-6">Isi form berikut, kami akan segera merespons.</p>

          <form action="{{ route('pengaduan.kirim') }}" method="POST" class="space-y-4">
            @csrf

            {{-- Nama & Email --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">
                  Nama Lengkap <span class="text-red-500">*</span>
                </label>
                <input type="text" name="nama" placeholder="Masukkan nama Anda" required class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm
                                              text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500
                                              focus:border-transparent transition placeholder-gray-400">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">
                  Email <span class="text-red-500">*</span>
                </label>
                <input type="email" name="email" placeholder="Masukkan email Anda" required class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm
                                              text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500
                                              focus:border-transparent transition placeholder-gray-400">
              </div>
            </div>

            {{-- Subjek --}}
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1.5">
                Subjek <span class="text-red-500">*</span>
              </label>
              <input type="text" name="subjek" placeholder="Subjek pesan Anda" required class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm
                                          text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500
                                          focus:border-transparent transition placeholder-gray-400">
            </div>

            {{-- Pesan --}}
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1.5">
                Pesan <span class="text-red-500">*</span>
              </label>
              <textarea name="pesan" rows="4" placeholder="Tuliskan pesan, pertanyaan, atau pengaduan Anda..." required
                class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm
                                             text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500
                                             focus:border-transparent transition placeholder-gray-400 resize-none">
                            </textarea>
            </div>

            {{-- Tombol Submit --}}
            <button type="submit" class="w-full bg-blue-700 hover:bg-blue-800 text-white font-semibold
                                       py-3 px-6 rounded-xl transition flex items-center justify-center gap-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
              </svg>
              Kirim Pesan
            </button>

          </form>
        </div>

      </div>

    </div>

  </div>
</section>