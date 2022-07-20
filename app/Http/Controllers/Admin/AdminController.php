<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumni_Model;
use App\Models\Pengumuman_model;
use App\Models\Staff_Model;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        $user       = User::count();
        $staff      = Staff_Model::count();
        $alumni     = Alumni_Model::count();
        $takeuser = User::orderBy('id', 'desc')->take(3)->get();
        $pengumuman = Pengumuman_model::orderBy('id', 'desc')->take(3)->get();

        $data = [
            'title' => 'AMIK Medicom',
            'username' => 'Ramson Rajagukguk',
            'jumlah_dosen' => '20'
        ];
        return view('admin.index', compact('data', 'user', 'staff', 'alumni', 'pengumuman', 'takeuser'));
    }
}
