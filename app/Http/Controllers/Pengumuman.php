<?php

namespace App\Http\Controllers;

use App\Models\Berita_Model;
use App\Models\Motivasi;
use App\Models\Pengumuman_model;

class Pengumuman extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pengumuman = Pengumuman_model::orderBy('id', 'desc')->paginate(5);
        $berita = Berita_Model::orderBy('id', 'desc')->take(3)->get();

        return view('pages.pengumuman', compact('pengumuman', 'berita'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug_pengumuman)
    {
        $motivasi = Motivasi::orderBy('id','desc')->take(4)->get();
        $read = Pengumuman_model::where('slug_pengumuman', $slug_pengumuman)->first();

        $data = [
            'view' => $read->view + 1
        ];

        $read->update($data);

        return view('pages.pengumuman_detail', compact('read','motivasi'));
    }
}
