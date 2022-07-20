<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran_model;
use App\Models\Staff_Model;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function home()
    {
        return view('home');
    }
    public function berita()
    {
        return view('pages.berita_kampus');
    }
    public function sejarah()
    {
        return view('pages.sejarah');
    }

    public function sambutan_direktur()
    {
        return view('pages.sambutan_direktur');
    }

    public function visi_misi()
    {
        return view('pages.visi_misi');
    }

    public function sasaran_kebijakan()
    {
        return view('pages.sasaran_kebijakan');
    }
    public function pimpinan()
    {
        return view('pages.pimpinan');
    }

    public function dosen()
    {
        $dosen = Staff_Model::all();
        return view('pages.dosen', compact('dosen'));
    }

    public function prodi_mi()
    {
        return view('pages.prodi_mi');
    }

    public function prodi_ka()
    {
        return view('pages.prodi_ka');
    }

    public function prodi_tk()
    {
        return view('pages.prodi_tk');
    }

    public function kurikulum()
    {
        return view('pages.kurikulum');
    }

    public function peraturan_akademi()
    {
        return view('pages.peraturan_akademi');
    }

    public function informasi_pendaftaran()
    {
        return view('pages.informasi_pendaftaran');
    }

    public function biaya_pendidikan()
    {
        return view('pages.biaya_pendidikan');
    }

       public function kontak()
    {
        return view('pages.kontak');
    }

    public function login()
    {
        $data = [
            'title' => 'Amik Medicom',
        ];
        return view('auth.login', $data);
    }

    public function pmbpendaftaran(){

        $num     = Pendaftaran_model::count();
        $jlh = $num+1;
        $waktu =date('ymd');
        $noreg ="REG-".$waktu.$jlh;

        
        return view('pages.pendaftaran',compact('noreg'));
    }

    // public function pendaftaran_sukses(Pendaftaran_model $token){
    //     $pendataran = Pendaftaran_model::findorfail($token);
    //     dd($pendataran);
      
    //     return view('pages.pendaftaran_sukses',compact('pendataran'));
    // }
}
