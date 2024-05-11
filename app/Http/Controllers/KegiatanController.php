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
        $kegiatans = Kegiatan::all();
        $title = 'Delete Data!';
        $text = "Apakah Kamu Yakin Akan Menghapus Data Ini?";
        confirmDelete($title, $text);
        return view('admin.kegiatan.view_kegiatan', compact('kegiatans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kegiatan.add_kegiatan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kegiatans = new Kegiatan();
        $kegiatans->topik = $request->topik;
        $kegiatans->tanggalkegiatan = $request->tanggalkegiatan;
        $kegiatans->judulkegiatan = $request->judulkegiatan;
        if ($request->hasFile('potokegiatan1') && $request->hasFile('potokegiatan2')) {
            $poto_kegiatan1 = $request->file('potokegiatan1')->store('potokegiatan1');
            $poto_kegiatan2 = $request->file('potokegiatan2')->store('potokegiatan2');
            $kegiatans->potokegiatan1 = $poto_kegiatan1;
            $kegiatans->potokegiatan2 = $poto_kegiatan2;        
        }
        $kegiatans->deskegiatan = $request->deskegiatan;
        $kegiatans->save();
    
        Alert::success('Success', 'Tambah data Berhasil!')->showConfirmButton('OK');
        return redirect()->route('kegiatan.view');
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
        $editData = Kegiatan::Find($id);
        return view('admin.kegiatan.edit_kegiatan', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kegiatans = Kegiatan::find($id);
        $kegiatans->topik = $request->topik;
        $kegiatans->tanggalkegiatan = $request->tanggalkegiatan;
        $kegiatans->judulkegiatan = $request->judulkegiatan;
        if ($request->hasFile('potokegiatan1') && $request->hasFile('potokegiatan2')) {
            $poto_kegiatan1 = $request->file('potokegiatan1')->store('potokegiatan1');
            $poto_kegiatan2 = $request->file('potokegiatan2')->store('potokegiatan2');
            $kegiatans->potokegiatan1 = $poto_kegiatan1;
            $kegiatans->potokegiatan2 = $poto_kegiatan2;        
            $kegiatans->save();
        }
        $kegiatans->deskegiatan = $request->deskegiatan;
        $kegiatans->update();
        return redirect()->route('kegiatan.view')->with('Success', 'Update Data Berhasil!!');
    }

    public function KegiatanShow(string $id)
    {
        $kegiatan = Kegiatan::find($id);        
        return view('user.detailkegiatan', compact('kegiatan'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kegiatans = Kegiatan::find($id);
            if ($kegiatans->potokegiatan1) {
                Storage::delete($kegiatans->potokegiatan1);
            }
            if ($kegiatans->potokegiatan2) {
                Storage::delete($kegiatans->potokegiatan2);        
            }
        $kegiatans->delete();
        return redirect()->route('kegiatan.view');
    }
}
