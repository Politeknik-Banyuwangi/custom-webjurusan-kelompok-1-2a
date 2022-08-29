<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\Models\Event_Model;
use Illuminate\Http\Request;

class Event extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $str   = Str::class;
        $event = Event_Model::orderBy('id', 'desc')->get();
        $datetime = Event_Model::select('publish_at')->get();

        $current = Carbon::now();
        $dt      = Carbon::yesterday();
        $data = [
            'current' => $current->diffInHours($dt),
        ];

        return view('pages.event_kampus', compact('event', 'str', 'data'));
    }

    public function show($slug)
    {
        $event = Event_Model::where('slug', $slug)->first();
        $event_populer = Event_Model::orderBy('id', 'desc')->take(4)->get();

        return view('pages.event_kampus_detail', compact('event', 'event_populer'));
    }
}
