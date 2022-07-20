<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff_Model::all();
        return view('admin.staff.index', compact('staff'));
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
            'nama' => 'required|max:255',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2024',
            'jabatan' => 'required'
        ]);

        $slug_taff = Str::slug($request->nama, '-');

        // Upload Gambar Start
        $gambar = $request->file('gambar');

        $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
        $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $date                   = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y');
        $new_gambar             = Str::slug($filename, '-', $date) . '.' . $gambar->getClientOriginalExtension();
        $destinationPath        = 'public/images/staff';
        $gambar->storeAs($destinationPath, $new_gambar);
        // upload gambar end

        $data = [
            'nama_staff' => $request->nama,
            'slug_staff' => $slug_taff,
            'jabatan'    => $request->jabatan,
            'gambar'        => 'images/staff/' . $new_gambar
        ];

        Staff_Model::create($data);

        return redirect()->route('staff.index')->with('success', 'Profile user berhasil di update');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff_Model  $staff_Model
     * @return \Illuminate\Http\Response
     */
    public function show(Staff_Model $staff_Model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff_Model  $staff_Model
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff_Model $staff_Model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff_Model  $staff_Model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff_Model $staff_Model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff_Model  $staff_Model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff_Model $id_staff)
    {
        $id_staff->delete();
        // Storage::delete('public/images/staff', $gambar);
        return back()->with('error', 'Data staff  berhasil dihapus');
    }
}
