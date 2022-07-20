<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $user = $request->user();
        // return view('admin.user.profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $roles = Role::all()->pluck('name', 'id');
        $users = User::all();

        return view('admin.user.profile',compact('users','roles'));
    }

    function ubahfoto(Request $request){
        $path = 'public/images/users/';
        $file = $request->file('gambar-profile');
        $new_image_name = 'UIMG'.date('Ymd').uniqid().'.jpg';
        // $upload = $file->move(public_path($path), $new_image_name);
        $upload =  $file->storeAs('public/images/users', $new_image_name);

        if(!$upload){
            return response()->json(['status'=>0, 'msg'=>'Something went wrong, try again later']);
        }else{

            $filename = Auth::user()->picture;
            Storage::disk('public')->delete($filename);

           $request->user()->update(['picture' => 'images/users/'. $new_image_name]);

            return response()->json(['status'=>1, 'msg'=>'Update gambar Berhasil']);    
        }

        

      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request )
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $gambar = $request->file('foto_profile');
        if (!empty($gambar)) {
            $filenamewithextension  = $request->file('foto_profile')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $date                   = date('Y' . 'm' . 'd' . 'H' . 'i' . 's');
            $new_gambar             = Str::slug($filename. '-'. $date). '.'. $gambar->getClientOriginalExtension();
            $gambar->storeAs('public/images/user', $new_gambar);
            $data = [
                'name'          => $request->name,
                'email'         => $request->email,
                'picture'  => 'images/users/' . $new_gambar
            ];
            // dd($data);
            $request->user()->update($data);
        } else {
            $request->user()->update([
                'name'  => $request->name,
                'email'       => $request->email,
                'foto_profile'  => 'images/users/'
            ]);
        }

        return redirect()->route('profile.index')->with('success', 'Profile user berhasil di update');
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
    }
}
