<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Archive_Model;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $archive = Archive_Model::orderBy('id', 'DESC')->get();
        return view('admin.archive.index', compact('archive'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.archive.create');

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
            'name'         => 'required',
            'description'    => 'required',
            'user_id'       => 'required',
            'file_berkas'   => 'mimes:doc,docx,pdf,txt|max:2048',
        ]);

        $slug = Str::slug($request->name, '-');

        if ($request->file_berkas) {
            $name_file = $request->file_berkas;
            $new_file = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . "_" . $name_file->getClientOriginalName();
            Archive_Model::create([
                'name' => $request->name,
                'description' => $request->description,
                'user_id' => $request->user_id,
                'slug' => $slug,
                'tgl_publish'   => date('Ymd'),
                'view'      => 1,
                'file' => 'images/archive/' . $new_file
            ]);

            $name_file->storeAs('public/images/archive', $new_file);
            // $name_file->move('uploads', $new_file);
        } else {
            Archive_Model::create([
                'name' => $request->name,
                'description' => $request->description,
                'user_id' => $request->user_id,
                'slug' => $slug,
                'tgl_publish'   => date('Ymd'),
                'view'          => 1,
                'file'          => Null
            ]);
        }

        return redirect('admin/archive')->with('success', 'Berhasil menambahkan data event baru!');
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
        //
        $archive = Archive_Model::findorfail($id);
        return view('admin.archive.edit', compact('archive'));

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

        $this->validate($request, [
            'name'         => 'required',
            'description'    => 'required',
            'user_id'       => 'required',
            'file_berkas'   => 'mimes:jpeg,png,jpg,pdf,doc,docx,xls,xlsx,ppt,pptx',
        ]);

        $archive = Archive_Model::findorfail($id);
        $slug = Str::slug($request->name, '-');

        if ($request->file_berkas) {
            $name_file = $request->file_berkas;
            $new_file = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . "_" . $name_file->getClientOriginalName();
            $data = [
                'name' => $request->name,
                'description' => $request->description,
                'user_id' => $request->user_id,
                'slug' => $slug,
                'file' => 'images/archive/' . $new_file
            ];

            $name_file->storeAs('public/images/archive', $new_file);
            $archive->update($data);
        } else {
            $data = [
                'name' => $request->name,
                'description' => $request->description,
                'user_id' => $request->user_id,
                'slug' => $slug,
            ];

            $archive->update($data);
        }

        return redirect()->route('archive')->with('success', 'Data archive berhasil diperbarui!');
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
        $archive = Archive_Model::where('id', $id);
        $archive->Delete();
        return redirect()->route('archive.index')->with('error', 'Data archive berhasil dihapus');
    }
}
