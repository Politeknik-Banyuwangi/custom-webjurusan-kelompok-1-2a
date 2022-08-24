<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cooperation_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class CooperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cooperation = Cooperation_Model::all();
        return view('admin.cooperation.index', compact('cooperation'));
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
        //
        $request->validate([
            'name' => 'required|max:255',
            'logo' => 'required',
            'region' => 'required|max:255',
            'address' => 'required',
            'link' => 'required',
            'is_industries' => 'required|numeric'

        ]);

        $data = $request->all();
        $logo = $request->file('logo');
        $new_logo = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $logo->GetClientOriginalName();

        $logo->storeAs('public/images/logo', $new_logo);

        $data['logo'] = 'images/logo/' . $new_logo;

        Cooperation_Model::create($data);

        return redirect()->route('cooperation.index')->with('success', 'Data berhasil ditambahkan');
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
    public function edit($id_industri)
    {
        //
        $data = Cooperation_Model::findorfail($id_industri);
        return view('admin.cooperation.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_industri)
    {
        //
        $this->validate($request, [
            'name'  => 'required',
            'logo' => 'file|mimes:png,jpg|max:2024',
            'region' => 'required',
            'address'=> 'required',
            'link' => 'required',
            'is_industries' => 'required',
        ]);

        $logo = $request->file('logo');

        if (!empty($logo)) {
            $data = $request->all();
            $gambar = $request->file('logo');
            $new_logo = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $logo->GetClientOriginalName();
            $data['logo'] = 'images/logo/' . $new_logo;
            $gambar->storeAs('public/images/logo', $new_logo);
            $id_industri->update($data);
        } else {
            $data = $request->all();
            $id_industri->update($data);
        }

        return redirect()->route('cooperation.index')->with('success', 'Data Industri dan Kerjasama berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cooperation_Model $id_industri)
    {
        //
        $filename = $id_industri->logo;
        Storage::disk('public')->delete($filename);
        $id_industri->delete();
        return redirect()->route('cooperation.index')->with('success', 'Data berhasil dihapus');
    }
}
