<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Motivasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MotivasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motivasi = Motivasi::all();
        return view('admin.motivasi.index', compact('motivasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.motivasi.create');
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
           'name' => 'required',
           'qutes' => 'required'
       ]);

       $data =$request->all();
       Motivasi::create($data);
      return redirect()->route('motivasi.index')->with('success','Motivasi berhasil disimpan');
    }

    public function upload(Request $request){
    	$file = $request->file('filepond');
        $file_name = $file->getClientOriginalName();
        $folder= uniqid() .'_'.now()->timestamp;
        $file -> storeAs('public/images/' . $folder,$file_name);
    	return Storage::put('tmp', $file);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Motivasi  $motivasi
     * @return \Illuminate\Http\Response
     */
    public function show(Motivasi $motivasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Motivasi  $motivasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Motivasi $motivasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Motivasi  $motivasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motivasi $motivasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Motivasi  $motivasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motivasi $motivasi)
    {
        $motivasi->delete();
        return back()->with('success','Motivasi berhasil dihapus');
    }
}
