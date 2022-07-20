<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Pengumuman_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Null_;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pengumuman = Pengumuman::OrderBy('kelompok', 'asc')->OrderBy('nama_mapel', 'asc')->get();
        $pengumuman = Pengumuman_model::orderBy('id', 'DESC')->get();
        return view('admin.pengumuman.index', compact('pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengumuman.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'         => 'required',
            'keterangan'    => 'required',
            'user_id'       => 'required',
            'file_berkas'   => 'mimes:doc,docx,pdf,txt|max:2048',
        ]);

        $slug_pengumuman = Str::slug($request->judul, '-');

        if ($request->file_berkas) {
            $name_file = $request->file_berkas;
            $new_file = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . "_" . $name_file->getClientOriginalName();
            Pengumuman_model::create([
                'judul_pengumuman' => $request->judul,
                'isi' => $request->keterangan,
                'user_id' => $request->user_id,
                'slug_pengumuman' => $slug_pengumuman,
                'tgl_publish'   => date('Ymd'),
                'view'      => 1,
                'file' => 'images/pengumuman/' . $new_file
            ]);

            $name_file->storeAs('public/images/pengumuman', $new_file);
            // $name_file->move('uploads', $new_file);
        } else {
            Pengumuman_model::create([
                'judul_pengumuman' => $request->judul,
                'isi' => $request->keterangan,
                'user_id' => $request->user_id,
                'slug_pengumuman' => $slug_pengumuman,
                'tgl_publish'   => date('Ymd'),
                'view'          => 1,
                'file'          => Null
            ]);
        }

        return redirect('admin/pengumuman')->with('success', 'Berhasil menambahkan data pengumuman baru!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman_model $pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $id = Crypt::encrypt($id);
        $pengumuman = Pengumuman_model::findorfail($id);
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul'         => 'required',
            'keterangan'    => 'required',
            'user_id'       => 'required',
            'file_berkas'   => 'mimes:jpeg,png,jpg,pdf,doc,docx,xls,xlsx,ppt,pptx|max:8024',
        ]);

        $pengumuman = Pengumuman_model::findorfail($id);
        $slug_pengumuman = Str::slug($request->judul, '-');

        if ($request->file_berkas) {
            $name_file = $request->file_berkas;
            $new_file = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . "_" . $name_file->getClientOriginalName();
            $data = [
                'judul_pengumuman' => $request->judul,
                'isi' => $request->keterangan,
                'user_id' => $request->user_id,
                'slug_pengumuman' => $slug_pengumuman,
                'file' => 'images/pengumuman/' . $new_file
            ];

            $name_file->storeAs('public/images/pengumuman', $new_file);
            $pengumuman->update($data);
        } else {
            $data = [
                'judul_pengumuman' => $request->judul,
                'isi' => $request->keterangan,
                'user_id' => $request->user_id,
                'slug_pengumuman' => $slug_pengumuman,
            ];

            $pengumuman->update($data);
        }

        return redirect()->route('pengumuman')->with('success', 'Data pengumuman berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengumuman = Pengumuman_model::where('id', $id);
        $pengumuman->Delete();
        return redirect()->route('pengumuman')->with('error', 'Data pengumuman berhasil dihapus');
    }
}
