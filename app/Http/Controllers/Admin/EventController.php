<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Event_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event_Model::all();
        return view('admin.even.index', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.even.create');
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
            'content' => 'required',
            'image' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'is_active' => 'required|numeric'

        ]);

        $data = $request->all();
        $image = $request->file('image');
        $new_image = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $image->GetClientOriginalName();

        $image->storeAs('public/images/event', $new_image);

        $data['image'] = 'images/event/' . $new_image;

        Event_Model::create($data);

        return redirect()->route('even.index')->with('success', 'Data berhasil ditambahkan');
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
    public function edit($id_event)
    {
        //
        $data = Event_Model::findorfail($id_event);
        return view('admin.even.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Event_Model $id_event)
    {
        //
        $this->validate($request, [
            'title'  => 'required',
            'content' => 'required',
            'image' => 'file|mimes:png,jpg|max:2024',
            'start_time' => 'required',
            'end_time'=> 'required',
            'is_active' => 'required|numeric',
        ]);

        $image = $request->file('image');

        if (!empty($image)) {
            $data = $request->all();
            $image = $request->file('image');
            $new_image = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $image->GetClientOriginalName();
            $data['image'] = 'images/event/' . $new_image;
            $image->storeAs('public/images/event', $new_image);
            $id_event->update($data);
        } else {
            $data = $request->all();
            $id_event->update($data);
        }

        return redirect()->route('even.index')->with('success', 'Data Event berhasil diubah');
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
        // $filename = $id->gambar;
        // Storage::disk('public')->delete($filename);
        // $id->delete();

        // return redirect()->route('berita.index')->with('error', 'Data pengumuman berhasil dihapus');
    }
}
