<?php

namespace App\Http\Controllers\Admin;

use File;
use App\Http\Controllers\Controller;
use App\Models\Alumni_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumni = Alumni_Model::orderBy('id_alumni', 'desc')->get();
        return view('admin.alumni.index', compact('alumni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_alumni' => 'required|max:255',
            'gambar' => 'required',
            'tempat_bekerja' => 'required'
        ]);

        $data = $request->all();
        $gambar = $request->file('gambar');
        $new_gambar = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar->GetClientOriginalName();

        $gambar->storeAs('public/images/alumni', $new_gambar);

        $data['gambar'] = 'images/alumni/' . $new_gambar;

        Alumni_Model::create($data);

        return redirect()->route('alumni.index')->with('success', 'Data alumni berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumni_Model  $alumni_Model
     * @return \Illuminate\Http\Response
     */
    public function show(Alumni_Model $alumni_Model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumni_Model  $alumni_Model
     * @return \Illuminate\Http\Response
     */
    public function edit($id_alumni)
    {
        $id_alumni = Crypt::decrypt($id_alumni);
        $alumni = Alumni_Model::findorfail($id_alumni);
        return view('admin.alumni.edit', compact('alumni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumni_Model  $alumni_Model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumni_Model $id_alumni)
    {
        $this->validate($request, [
            'gambar'            => 'file|mimes:png,jpg|max:2024',
            'nama_alumni'       => 'required',
            'tempat_bekerja'     => 'required',
        ]);

        $gambar = $request->file('gambar');

        if (!empty($gambar)) {
            $data = $request->all();
            $gambar = $request->file('gambar');
            $new_gambar = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar->GetClientOriginalName();
            $data['gambar'] = 'images/alumni/' . $new_gambar;
            $gambar->storeAs('public/images/alumni', $new_gambar);
            $id_alumni->update($data);
        } else {
            $data = $request->all();
            $id_alumni->update($data);
        }

        return redirect()->route('alumni.index')->with('success', 'Data alumni berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumni_Model  $alumni_Model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumni_Model $id_alumni)
    {
        $filename = $id_alumni->gambar;
        Storage::disk('public')->delete($filename);
        $id_alumni->delete();
        return redirect()->route('alumni.index')->with('success', 'Data Alumni berhasil dihapus');
    }
}
