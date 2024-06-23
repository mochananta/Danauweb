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

        // validasi data yang diterima
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // buat instance baru dari model about
        $data = new About();
        // set judul dari request
        $data->judul = $request->judul;
        // cek foto unggah ato tidak
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('foto');
            $data->foto = $foto;
        } else {
            // Tetapkan nilai default atau tangani ketidakhadiran foto
            $data->foto = 'default.jpg'; // Pastikan nilai default ini ada atau dapat diterima
        }
        $data->deskripsi = $request->deskripsi;
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
        $editData = About::Find($id);
        return view('admin.about.edit_about', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = About::find($id);
        $data->judul = $request->judul;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('foto');
            $data->foto = $foto;
        }
        $data->deskripsi = $request->deskripsi;
        $data->update();
        return redirect()->route('about.view')->with('Success', 'Update Data Berhasil!!');
    }

    // public function PromoShow(string $id)
    // {
    //     $data = Promo::find($id);
    //     return view('user.index', compact('data'));
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = About::find($id);
        if ($data->foto != null || $data->foto ='' ){
            Storage::delete($data->foto);
        }
        $data->delete();
        return redirect()->route('about.view');
    }
}