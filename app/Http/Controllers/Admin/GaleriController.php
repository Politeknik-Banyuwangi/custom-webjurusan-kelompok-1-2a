<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\galeri;
use Illuminate\Http\Request;
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
        return view('admin.galeri.create');
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
        $this->validate($request, [
            'title'     => 'required',
            'image'     => 'required|image|mimes:png,jpg,jpeg',

        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/images/galeri', $image->hashName());

        $galeri = galeri::create([
            'title'     => $request->title,
            'image'     => $image->hashName(),
        ]);

        if($galeri){
            //redirect dengan pesan sukses
            return redirect()->route('galeri.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('galeri.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
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
    public function edit($id)
    {
        $data = galeri::find($id);
        return view('admin.galeri.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = galeri::find($id);
        $data-> title = $request->title;
        $data->update();

        return redirect()->route('galeri.index')
                        ->with('success','Product updated successfully');

        $this->validate($request, [
            'title' => 'required'
        ]);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // $filename = $id->image;
        // Storage::disk('public')->delete($filename);
        // $id->delete();

        // return redirect()->route('galeri.index')->with('error', 'Data pengumuman berhasil dihapus');
    }
}
