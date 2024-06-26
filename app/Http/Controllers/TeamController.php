<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Team::all();
        $title = 'Delete Data!';
        $text = "Apakah Kamu Yakin Akan Menghapus Data Ini?";
        confirmDelete($title, $text);
        return view('admin.team.view_team', compact('data'));
    }

 

    public function create()
    {
        return view('admin.team.add_team');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // validasi data yang diterima
        $request->validate([
            'nama' => 'required|string|max:255',
            'posisi' => 'required|string',
            'poto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // buat instance baru dari model about
        $data = new Team();
        // set judul dari request
        $data->nama = $request->nama;
        $data->posisi = $request->posisi;

        if ($request->hasFile('poto')) {
            $data->poto = $request->file('poto')->store('potos', 'public');
        }
        $data->save();
    
        Alert::success('Success', 'Tambah data Berhasil!')->showConfirmButton('OK');
        return redirect()->route('team.view');
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
        $editData = Team::Find($id);
        return view('admin.team.edit_team', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Team::find($id);
        $data->nama = $request->nama;
        $data->posisi = $request->posisi;
        if ($request->hasFile('poto')) {
            $poto = $request->file('poto')->store('poto');
            $data->poto = $poto;
        }
        $data->update();
        return redirect()->route('team.view')->with('Success', 'Update Data Berhasil!!');
    }

    // public function PromoShow(string $id)
    // {
    //     $data = Promo::find($id);
    //     return view('user.index', compact('data'));
    // }

    /**
     * Remove the specified resource from storage.
     */
    /**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    // Ambil data tim berdasarkan ID
    $data = Team::find($id);

    // Periksa apakah ada foto yang perlu dihapus dari storage
    if ($data->poto) {
        Storage::disk('public')->delete($data->poto);
    }

    // Hapus data dari database
    $data->delete();

    // Redirect kembali ke halaman daftar tim
    return redirect()->route('team.view');
}

}