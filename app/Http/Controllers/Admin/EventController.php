<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Event_Model;
use Illuminate\Support\Str;
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
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'user_id'        => 'required',
            'image'          => 'required|file|mimes:jpeg,png,jpg|max:2024',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $slug = Str::slug($request->title, '-');
        $image = $request->image;
        $new_image = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $image->getClientOriginalName();

        $data = $request->all();
        $data['slug'] = $slug;
        $data['publish_at'] = date('Ymd');
        $data['image'] = 'images/event/' . $new_image;

        $image->storeAs('public/images/event', $new_image);
        Event_Model::create($data);

        return redirect('admin/event')->with('success', 'Berhasil menambahkan data event baru');

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
    public function destroy(Event_Model $id_event)
    {
        $filename = $id_event->image;
        Storage::disk('public')->delete($filename);
        $id_event->delete();

        return redirect()->route('even.index')->with('error', 'Data Event berhasil dihapus');
    }
}
