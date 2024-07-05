<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Komentar;
use App\Models\Recentpost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Berita::all();
        $title = 'Delete Data!';
        $text = "Apakah Kamu Yakin Akan Menghapus Data Ini?";
        confirmDelete($title, $text);
        return view('admin.berita.view_berita', compact('data'));
    }

    public function Berita()
    {
        $beritas = Berita::all();
        return view('user.berita', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.add_berita');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Berita();
        $data->judulberita = $request->judulberita;
        $data->tanggal = $request->tanggal;
        if ($request->hasFile('fotoberita')) {
            $foto_berita = $request->file('fotoberita')->store('fotoberita');
            $data->fotoberita = $foto_berita;
        }
        $data->deskripsi = $request->deskripsi;
        $data->save();

        Alert::success('Success', 'Tambah data Berhasil!')->showConfirmButton('OK');
        return redirect()->route('berita.view');
    }

    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        $editData = Berita::Find($id);
        return view('admin.berita.edit_berita', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Berita::find($id);
        $data->judulberita = $request->judulberita;
        $data->tanggal = $request->tanggal;
        if ($request->hasFile('fotoberita')) {
            $foto_berita = $request->file('fotoberita')->store('fotoberita');
            $data->fotoberita = $foto_berita;
        }
        $data->deskripsi = $request->deskripsi;
        $data->update();
        return redirect()->route('berita.view')->with('Success', 'Update Data Berhasil!!');
    }

    public function BeritaShow($id)
    {
        // Dapatkan berita berdasarkan ID
        $berita = Berita::find($id);
        if (!$berita) {
            return response()->view('errors.404', [], 404);
        }

        $berita->increment('views');
        $previousBerita = Berita::where('id', '<', $berita->id)->orderBy('id', 'desc')->first();
        $nextBerita = Berita::where('id', '>', $berita->id)->orderBy('id')->first();
        $recentPosts = Recentpost::all();

        return view('user.detailberita', compact('berita', 'recentPosts', 'previousBerita', 'nextBerita'));
    }


    public function showRecentPost($id)
    {
        $post = Recentpost::findOrFail($id);
        $beritaId = $post->berita_id;

        return redirect()->route('user.detailberita', ['id' => $beritaId]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Berita::find($id);
        if ($data->fotoberita != null || $data->fotoberita = '') {
            Storage::delete($data->fotoberita);
        }
        $data->delete();
        return redirect()->route('berita.view');
    }
}
