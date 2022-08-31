<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Event_Model;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
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
            // 'user_id'        => 'required',
            'image'          => 'file|mimes:jpeg,png,jpg|max:2024',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $slug = Str::slug($request->title, '-');
        $image = $request->image;
        $new_image = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $image->getClientOriginalName();

        $data = $request->all();
        $data['slug'] = $slug;
        $data['publish_at'] = date('Ymd');
        $data['image'] = $new_image;
        $data['user_id'] = Auth::user()->id;

        // $image->storeAs('public/images/event', $new_image);
        $request->file('image')->move('assets' . '/' . 'images' . '/' . 'event/', $new_image);
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
    public function update(Request $request, $id)
    {
        //
        try {
            $this->validate($request, [
                'title'  => 'required',
                'content' => 'required',
                'image' => 'file|mimes:png,jpg|max:2024',
                'start_time' => 'required',
                'end_time' => 'required',
                // 'is_active' => 'required|numeric',
            ]);
            $event = Event_Model::findOrFail($id);

            $image = $request->file('image');

            if (!empty($image)) {
                $data = $request->all();
                // $image = $request->file('image');
                $path = public_path('assets/images/event/' . $event->image);
                if (File::exists($path)) File::delete($path);
                $new_image = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $image->GetClientOriginalName();
                $data['image'] = $new_image;
                $request->file('image')->move('assets' . '/' . 'images' . '/' . 'event/', $new_image);
                $event->update([
                    'title' => $data['title'],
                    'content' => $data['content'],
                    'start_time' => $data['start_time'],
                    'end_time' => $data['end_time'],
                    'image' => $data['image'],
                ]);
            } else {
                $data = $request->all();
                $result = $event->update([
                    'title' => $data['title'],
                    'content' => $data['content'],
                    'start_time' => $data['start_time'],
                    'end_time' => $data['end_time'],
                ]);
                // return dd($id_event);
            }

            return redirect()->route('even.index')->with('success', 'Data Event berhasil diubah');
        } catch (Exception $e) {
            return dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $event = Event_Model::find($id);
            $path = public_path('assets/images/event/' . $event->image);
            if (File::exists($path)) File::delete($path);
            $event->delete();

            return redirect()->route('even.index')->with('success', 'Data Event berhasil dihapus');
        } catch (Exception $e) {
            return redirect()->route('even.index')->withErrors($e->getMessage());
        }
    }
}
