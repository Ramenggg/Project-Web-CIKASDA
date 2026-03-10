<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        // Nanti diupdate setelah Model Berita dibuat
        $beritaTerbaru = collect([]);

        return view('pages.beranda', compact('beritaTerbaru'));
    }
}