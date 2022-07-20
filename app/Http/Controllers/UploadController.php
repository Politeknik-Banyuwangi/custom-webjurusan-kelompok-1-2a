<?php

namespace App\Http\Controllers;

use App\Models\Motivasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request){
    	    $file = $request->file('filepond');
          	return Storage::put('public/images/motivasi', $file);
    }
}
