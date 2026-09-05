<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        return view('admin.new_member', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('createmember');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'alamat' => 'required|string',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'unit_kegiatan' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:40960',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('img/new_members'), $imageName);

        Member::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan,
            'prodi' => $request->prodi,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'phone' => $request->phone,
            'email' => $request->email,
            'unit_kegiatan' => $request->unit_kegiatan,
            'image' => $imageName,
        ]);

        return redirect()->back()->with('success', 'Member created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $member = Member::findOrFail($id);
        $imagePath = public_path('img/new_members/' . $member->image);

        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $member->delete();

        return redirect()->back()->with('success', 'Member deleted successfully.');
    }
}
