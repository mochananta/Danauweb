<?php

namespace App\Http\Controllers;

use App\Models\Recentpost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class RecentpostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Recentpost::all();
        $title = 'Delete Data!';
        $text = "Apakah Kamu Yakin Akan Menghapus Data Ini?";
        confirmDelete($title, $text);
        return view('admin.recentpost.view_recentpost', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */

    //  public function Recentpost()
    //  {
    //      $data = Recentpost::all();
    //      return view('user.detailberita', compact('data'));
    //  }
 

    public function create()
    {
        return view('admin.recentpost.add_recentpost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Recentpost();
        $data->judulpost = $request->judulpost;
        if ($request->hasFile('photopost')) {
            $photo_post = $request->file('photopost')->store('photopost');
            $data->photopost = $photo_post;
        }
        $data->tanggalpost = $request->tanggalpost;
        $data->save();
    
        Alert::success('Success', 'Tambah data Berhasil!')->showConfirmButton('OK');
        return redirect()->route('recentpost.view');
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
        $editData = Recentpost::Find($id);
        return view('admin.recentpost.edit_recentpost', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Recentpost::find($id);
        $data->judulpost = $request->judulpost;
        if ($request->hasFile('photopost')) {
            $photo_post = $request->file('photopost')->store('photopost');
            $data->photopost = $photo_post;
        }
        $data->tanggalpost = $request->tanggalpost;
        $data->update();
        return redirect()->route('recentpost.view')->with('Success', 'Update Data Berhasil!!');
    }

    // public function RecentpostShow(string $id)
    // {
    //     $data = Recentpost::find($id);
    //     return view('user.detailberita', compact('data'));
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Recentpost::find($id);
        if ($data->photopost != null || $data->photopost ='' ){
            Storage::delete($data->photopost);
        }
        $data->delete();
        return redirect()->route('recentpost.view');
    }
}
