<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        try {
            $news = News::where('status', 'ON')->get();
        } catch (\Throwable $e) {
            $news = collect();
        }
        return view('home', compact('news'));
    }
}
