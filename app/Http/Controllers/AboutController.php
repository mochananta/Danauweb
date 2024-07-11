<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = About::all();
        $title = 'Delete Data!';
        $text = "Apakah Kamu Yakin Akan Menghapus Data Ini?";
        confirmDelete($title, $text);
        return view('admin.about.view_about', compact('data'));
    }

 

    public function create()
    {
        return view('admin.about.add_about');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'judul' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = new About();
        $data->judul = $request->judul;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('foto');
            $data->foto = $foto;
        } else {
            $data->foto = 'default.jpg'; 
        }
        $data->deskripsi = $request->deskripsi;
        $data->link = $request->link;
        $data->save();
    
        Alert::success('Success', 'Tambah data Berhasil!')->showConfirmButton('OK');
        return redirect()->route('about.view');
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
        $editData = About::find($id);
        return view('admin.about.edit_about', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = About::find($id);

        if (!$data) {
            return redirect()->back()->withErrors('Data tidak ditemukan.');
        }

        // Validasi data yang diterima
        $request->validate([
            'judul' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data->judul = $request->judul;
        
        if ($request->hasFile('foto')) {
            if ($data->foto && $data->foto != 'default.jpg') {
                Storage::delete($data->foto);
            }
            $foto = $request->file('foto')->store('foto');
            $data->foto = $foto;
        }

        $data->deskripsi = $request->deskripsi;
        $data->link = $request->link;

        $data->save();

        return redirect()->route('about.view')->with('success', '');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = About::find($id);

        if (!$data) {
            return redirect()->back()->withErrors('Data tidak ditemukan.');
        }

        if ($data->foto && $data->foto != 'default.jpg') {
            Storage::delete($data->foto);
        }

        $data->delete();

        return redirect()->route('about.view')->with('success', '');
    }
}