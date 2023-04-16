<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\PeminjamanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $Peminjaman = Peminjaman::all();
        if($request->has('search')){
            $Peminjaman = Peminjaman::where('kode_pelanggan','LIKE',"%" . request('search'). "%")->paginate(5);
        }else{
           $Peminjaman = Peminjaman::paginate(5);
        }

        return view ('Peminjaman.Peminjaman')->with('Peminjaman', $Peminjaman);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Peminjaman.create_Peminjaman')
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

        $data = Peminjaman::create($request->except(['_token']));
        return redirect('Peminjaman')
                    ->with('success', 'Peminjaman berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peminjaman  $Peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjaman  $Peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Peminjaman = Peminjaman::find($id);
        return view('Peminjaman.create_Peminjaman')
                ->with('Peminjaman', $Peminjaman)
                ->with('url_form', url('/Peminjaman/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peminjaman  $Peminjaman
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

        $data = Peminjaman::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('Peminjaman')
                    ->with('success', 'Peminjaman berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjaman  $Peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Peminjaman::where('id', '=', $id)->delete();
        return redirect('Peminjaman')
        ->with('success', 'Peminjaman Berhasil dihapus');
    }
}
