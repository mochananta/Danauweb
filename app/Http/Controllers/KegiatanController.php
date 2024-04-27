<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kegiatan::all();
        $title = 'Delete Data!';
        $text = "Apakah Kamu Yakin Akan Menghapus Data Ini?";
        confirmDelete($title, $text);
        return view('admin.kegiatan.view_kegiatan', compact('data'));
    }
    public function create()
    {
        return view('admin.kegiatan.add_kegiatan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Kegiatan();
        $data->judulkegiatan = $request->judulkegaitan;
        $data->tanggalkegiatan = $request->tanggalkegiatan;
        if ($request->hasFile('photokegiatan')) {
            $photo_kegiatan = $request->file('photokegiatan')->store('photokegiatan');
            $data->photokegiatan = $photo_kegiatan;
        }
        $data->save();

        Alert::success('Success', 'Tambah data Berhasil!')->showConfirmButton('OK');
        return redirect()->route('kegiatan.store');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $editData = Kegiatan::Find($id);
        return view('admin.kegiatan.edit_kegiatan', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Kegiatan::find($id);
        $data->judulpost = $request->judulpost;
        if ($request->hasFile('photopost')) {
            $photo_post = $request->file('photopost')->store('photopost');
            $data->photopost = $photo_post;
        }
        $data->tanggalpost = $request->tanggalpost;
        $data->update();
        return redirect()->route('kegiatan.view')->with('Success', 'Update Data Berhasil!!');
    }

    public function destroy(string $id)
    {
        $data = Kegiatan::find($id);
        if ($data->photopost != null || $data->photopost = '') {
            Storage::delete($data->photopost);
        }
        $data->delete();
        return redirect()->route('kegiatan.view');
    }
}
