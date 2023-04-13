<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use App\Models\peminjamanModel;
use Illuminate\Http\Request;

class peminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = peminjaman::all();
        return view ('peminjaman.peminjaman')
                    ->with('peminjaman', $peminjaman);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peminjaman.create_peminjaman')
                    ->with('url_form', url('/Peminjaman'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_film' => 'required|string|max:50',
            'kode_pelanggan' => 'required|string|max:50',
            'jenis_peminjaman' => 'required|in:Harian,Mingguan,Bulanan',
            'tanggal_pinjam' => 'required|date',
            'tanggal_pengembalian' => 'required|date',
            'biaya_sewa' => 'required|integer',
        ]);

        $data = peminjaman::create($request->except(['_token']));
        return redirect('peminjaman')
                    ->with('success', 'peminjaman berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjaman = peminjaman::find($id);
        return view('peminjaman.create_peminjaman')
                ->with('peminjaman', $peminjaman)
                ->with('url_form', url('/Peminjaman/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_film' => 'required|string|max:50,'. $id,
            'kode_pelanggan' => 'required|string|max:50',
            'jenis_peminjaman' => 'required|in:Harian,Mingguan,Bulanan',
            'tanggal_pinjam' => 'required|date',
            'tanggal_pengembalian' => 'required|date',
            'biaya_sewa' => 'required|integer',
        ]);

        $data = peminjaman::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('peminjaman')
                    ->with('success', 'peminjaman berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        peminjaman::where('id', '=', $id)->delete();
        return redirect('peminjaman')
        ->with('success', 'peminjaman Berhasil dihapus');
    }
}
