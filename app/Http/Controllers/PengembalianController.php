<?php

namespace App\Http\Controllers;

use App\Models\pengembalian;
use App\Models\pengembalianModel;
use Illuminate\Http\Request;

class pengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengembalian = pengembalian::all();
        return view ('pengembalian.pengembalian')
                    ->with('pengembalian', $pengembalian);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengembalian.create_pengembalian')
                    ->with('url_form', url('/pengembalian'));
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
            'tanggal_pengembalian' => 'required|date',
            'denda_keterlambatan' => 'required|integer',
            'kondisi' => 'required|string|max:150',
            'status' => 'required|string|max:50',
        ]);

        $data = pengembalian::create($request->except(['_token']));
        return redirect('pengembalian')
                    ->with('success', 'pengembalian berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengembalian = pengembalian::find($id);
        return view('pengembalian.create_pengembalian')
                ->with('pengembalian', $pengembalian)
                ->with('url_form', url('/pengembalian/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_film' => 'required|string|max:50,'. $id,
            'kode_pelanggan' => 'required|string|max:50',
            'jenis_peminjaman' => 'required|in:Harian,Mingguan,Bulanan',
            'tanggal_pengembalian' => 'required|date',
            'denda_keterlambatan' => 'required|integer',
            'kondisi' => 'required|string|max:150',
            'status' => 'required|string|max:50',
        ]);

        $data = pengembalian::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('pengembalian')
                    ->with('success', 'pengembalian berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pengembalian::where('id', '=', $id)->delete();
        return redirect('pengembalian')
        ->with('success', 'pengembalian Berhasil dihapus');
    }
}
