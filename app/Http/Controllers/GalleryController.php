<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:40960',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('img/gallery'), $imageName);

        Gallery::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
            'status' => $request->status ?? 'off',
        ]);

        return redirect()->route('gallery.index')->with('success', 'Gallery created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.create', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:40960',
        ]);

        $gallery = Gallery::findOrFail($id);

        if ($request->hasFile('image')) {
            // Hapus gambar lama
            Storage::delete('public/img/gallery/' . $gallery->image);

            // Simpan gambar baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('img/gallery'), $imageName);
            $gallery->image = $imageName;
        }

        $gallery->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status ?? 'off',
        ]);

        return redirect()->route('gallery.index')->with('success', 'Gallery updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        Storage::delete('public/img/gallery/' . $gallery->image);
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Gallery deleted successfully.');
    }
}
