<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $newss = News::all();
        return view('admin.dashboard', compact('newss'));
    }
}
