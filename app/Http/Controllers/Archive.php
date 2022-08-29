<?php

namespace App\Http\Controllers;

use App\Models\Archive_Model;
use App\Models\Event_Model;
use App\Models\Motivasi;
use Illuminate\Http\Request;

class Archive extends Controller
{
    public function index()
    {

        $archive = Archive_Model::orderBy('id', 'desc');
        $event = Event_Model::orderBy('id', 'desc')->take(3)->get();

        return view('n', compact('archive','event'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $motivasi = Motivasi::orderBy('id','desc')->take(4)->get();
        $read = Archive_Model::where('slug', $slug)->first();

        $data = [
            'view' => $read->view + 1
        ];

        $read->update($data);

        return view('pages.archive_detail', compact('read','motivasi'));
    }
}
