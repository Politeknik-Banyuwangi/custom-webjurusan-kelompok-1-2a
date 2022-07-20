<?php

namespace App\Http\Controllers;

use App\Models\Blog_model;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $str   = Str::class;
        $blog = Blog_model::orderBy('id', 'desc')->get();

        $current = Carbon::now();
        $dt      = Carbon::yesterday();
        $data = [
            'current' => $current->diffInHours($dt),
        ];
        return view('pages.blog',compact('blog', 'str', 'data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog_model  $blog_model
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $blog = Blog_model::where('slug', $slug)->first();

        return view('pages.blog_detail', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog_model  $blog_model
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog_model $blog_model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog_model  $blog_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog_model $blog_model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog_model  $blog_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog_model $blog_model)
    {
        //
    }
}
