@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

    {{-- Hero Section --}}
    @include('components.hero')

    {{-- Tentang CIKASDA --}}
    @include('components.tentang')

    {{-- Layanan Digital --}}
    @include('components.layanan')

    {{-- Statistik --}}
    @include('components.statistik')

    {{-- Berita Terbaru --}}
    @include('components.berita')

    {{-- Kontak --}}
    @include('components.kontak')

@endsection