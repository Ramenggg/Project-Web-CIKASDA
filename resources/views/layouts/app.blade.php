<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dinas Cipta Karya dan Sumber Daya Air Provinsi Sulawesi Tengah">
    <meta name="keywords" content="CIKASDA, Cipta Karya, Sumber Daya Air, Sulawesi Tengah">
    <meta name="author" content="CIKASDA Sulawesi Tengah">

    <title>@yield('title', 'CIKASDA') - Dinas Cipta Karya dan Sumber Daya Air Prov. Sulawesi Tengah</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Tailwind CSS & App CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Stack untuk CSS tambahan per halaman --}}
    @stack('styles')
</head>
<body class="font-sans bg-gray-50 text-gray-800 antialiased">

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Konten Utama --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

    {{-- Stack untuk JS tambahan per halaman --}}
    @stack('scripts')

</body>
</html>