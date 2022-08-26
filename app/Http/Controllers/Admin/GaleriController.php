<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $galeri = galeri::all();
        return view('admin.galeri.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required',
            'deskripsi' => 'required'
        ]);

        $data = $request->all();
        $image = $request->file('image');
        $new_image = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $image->GetClientOriginalName();
        $image->storeAs('public/images/galeri', $new_image);
        $data['image'] = 'images/galeri/' . $new_image;

        galeri::create($data);

        return redirect()->route('galeri.index')->with('success', 'Data gambar berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_data)
    {
        $id_data = Crypt::decrypt($id_data);
        $data = galeri::findorfail($id_data);
        return view('admin.galeri.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,galeri $id_data)
    {
        //s

        $this->validate($request, [
            'title'       => 'required',
            'image'       => 'file|mimes:png,jpg|max:2024',
            'deskripsi' => 'required'
        ]);

        $image = $request->file('image');

        if (!empty($image)) {
            $data = $request->all();
            $image = $request->file('image');
            $new_image = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $image->GetClientOriginalName();
            $data['image'] = 'images/galeri/' . $new_image;
            $image->storeAs('public/images/galeri', $new_image);
            $id_data->update($data);
        } else {
            $data = $request->all();
            $id_data->update($data);
        }

        return redirect()->route('galeri.index')->with('success', 'Data Galeri berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(galeri $idData)
    {
        $idData->delete();
        // Storage::delete('public/images/galeri', $gambar);
        return back()->with('error', 'Data Galeri  berhasil dihapus');
    }
}
