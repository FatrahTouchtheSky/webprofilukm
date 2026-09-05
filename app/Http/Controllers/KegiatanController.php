<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    //
    public function index()
    {
        $galleries = Gallery::all();
        return view('kegiatan', compact('galleries'));
    }
}
