<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel newss
        $news = News::all();
        return view('newss', compact('news'));
    }

    public function show($id)
    {
        // Ambil single data dari tabel newss berdasarkan id
        // $newsItem = News::findOrFail($id);
        // return view('news', compact('newsItem'));
        $newsItem = News::findOrFail($id);
        $latestNews = News::where('id', '!=', $id)->orderBy('created_at', 'desc')->take(2)->get();

        return view('news', compact('newsItem', 'latestNews'));
    }

    public function create()
    {
        return view('admin.newsform');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:40960',
            'status' => 'required',
        ]);

        // Menyimpan file gambar
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('img'), $imageName);
        }

        // Membuat entri baru di database
        $news = new News;
        $news->title = $validatedData['title'];
        $news->body = trim($validatedData['body']);
        $news->image = $imageName;
        $news->status = $validatedData['status'];
        $news->save();


        return redirect()->route('admin.dashboard')
            ->with('success', 'Berita berhasil ditambahkan');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.newsform', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:40960',
            'status' => 'required',
        ]);

        $news = News::findOrFail($id);
        try {
            // Update file gambar jika ada
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('img'), $imageName);
                $news->image = $imageName;
            }

            $news->title = $validatedData['title'];
            $news->body = trim($validatedData['body']);
            $news->status = $validatedData['status'];
            $news->save();

            return redirect()->route('admin.dashboard')
                ->with('success', 'Berita berhasil diperbarui');
        } catch (\Exception $e) {
            // Redirect kembali ke form dengan pesan gagal
            return redirect()->back()
                ->with('error', 'Gagal menambahkan berita. Silakan coba lagi.');
        }
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('admin.dashboard')
            ->with('success', 'Berita berhasil dihapus');
    }
}
