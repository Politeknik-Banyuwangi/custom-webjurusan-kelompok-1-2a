<?php

namespace App\Http\Controllers;

use App\Models\Berita_Model;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Berita extends Controller
{
    public function index()
    {
        $str   = Str::class;
        $berita = Berita_Model::orderBy('id', 'desc')->get();
        $datetime = Berita_Model::select('publish')->get();

        $current = Carbon::now();
        $dt      = Carbon::yesterday();
        $data = [
            'current' => $current->diffInHours($dt),
        ];

        return view('pages.berita_kampus', compact('berita', 'str', 'data'));
    }

    public function show($slug_berita)
    {
        $berita = Berita_Model::where('slug_berita', $slug_berita)->first();
        $berita_populer = Berita_Model::orderBy('id', 'desc')->take(4)->get();

        return view('pages.berita_kampus_detail', compact('berita', 'berita_populer'));
    }
}
