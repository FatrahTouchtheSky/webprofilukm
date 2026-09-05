<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::where('status', 'ON')->get();
        return view('home', compact('news'));
    }
}
