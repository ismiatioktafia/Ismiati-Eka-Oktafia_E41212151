<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kecantikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $brg= DB::table('kecantikans')->get();
        return view('halaman/kecantikanindex', compact('brg'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Tampilan Create
        return view('halaman/kecantikancreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Simpan Data
        DB::table('kecantikans')->insert([
            'id' => $request->id,
            'nama' => $request->nama,
            'paket_kecantikan' => $request->paket_kecantikan,
            'pembayaran_awal' => $request->pembayaran_awal,
            'tanggal_transaksi' => $request->tanggal_transaksi
        ]);

        //jika berhasil kembali ke index
        return redirect()->route('kecantikan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //menampilkan lebih detail data
        $brg = DB::table('kecantikans')->where('id', $id)->get();
        return view('halaman/kecantikanshow', compact('brg'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit data
        $brg = DB::table('kecantikans')->where('id', $id)->get();
        return view('halaman/kecantikanedit', compact('brg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update data
        DB::table('kecantikans')->where('id', $id)->update([
            'nama' => $request->nama,
            'paket_kecantikan' => $request->paket_kecantikan,
            'pembayaran_awal' => $request->pembayaran_awal,
            'tanggal_transaksi' => $request->tanggal_transaksi
        ]);

        //jika berhasil diubah kembali ke index
        return redirect()->route('kecantikan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //untuk menghapus data
        DB::table('kecantikans')->where('id', $id)->delete();

        //jika berhasil kembali ke index
        return redirect()->route('kecantikan.index');
    }
}
