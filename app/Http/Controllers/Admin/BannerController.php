<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $banner = Banner::all();
        return view('admin.banner.index', compact('banner'));
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
        $this->validate($request, [
            'gambar_banner' => 'required|image|file|max:1024',
        ]);

        $data = $request->all();
        $gambar = $request->file('gambar_banner');
        $new_gambar = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar->GetClientOriginalName();

        $data['gambar_banner'] = 'images/banner/' . $new_gambar;

        $gambar->storeAs('public/images/banner', $new_gambar);
        Banner::create($data);

        return redirect()->route('banner.index')->with('success', 'Banner berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id_banner)
    {
        $id_banner = Crypt::decrypt($id_banner);
        $banner = Banner::findorfail($id_banner);
        return view('admin.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_banner)
    {
        $this->validate($request, [
            'gambar_banner' => 'file|mimes:png,jpg|max:2024',
            'keterangan'    => 'required',
        ]);

        $banner = Banner::findorfail($id_banner);

        $gambar = $request->file('gambar_banner');

        if (!empty($gambar)) {
            $data = $request->all();
            $gambar = $request->file('gambar_banner');
            $new_gambar = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar->GetClientOriginalName();
            $data['gambar_banner'] = 'images/banner/' . $new_gambar;
            $gambar->storeAs('public/images/banner', $new_gambar);
            $banner->update($data);
        } else {
            $data['keterangan'] = $request->keterangan;
            $banner->update($data);
        }
        return redirect()->route('banner.index')->with('success', 'Banner berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_banner)
    {
        Banner::findOrFail($id_banner)->delete();
        return redirect()->route('banner.index')->with('error', 'Data banner berhasil dihapus');
    }
}
