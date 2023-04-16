<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;
use App\Models\PengembalianModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $Pengembalian = Pengembalian::all();
        if($request->has('search')){
            $Pengembalian = Pengembalian::where('kode_pelanggan','LIKE',"%" . request('search'). "%")->paginate(5);
        }else{
           $Pengembalian = Pengembalian::paginate(5);
        }

        return view ('Pengembalian.Pengembalian')->with('Pengembalian', $Pengembalian);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pengembalian.create_Pengembalian')
                    ->with('url_form', url('/Pengembalian'));
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

        $data = Pengembalian::create($request->except(['_token']));
        return redirect('Pengembalian')
                    ->with('success', 'Pengembalian berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengembalian  $Pengembalian
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengembalian  $Pengembalian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Pengembalian = Pengembalian::find($id);
        return view('Pengembalian.create_Pengembalian')
                ->with('Pengembalian', $Pengembalian)
                ->with('url_form', url('/Pengembalian/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengembalian  $Pengembalian
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

        $data = Pengembalian::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('Pengembalian')
                    ->with('success', 'Pengembalian berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengembalian  $Pengembalian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengembalian::where('id', '=', $id)->delete();
        return redirect('Pengembalian')
        ->with('success', 'Pengembalian Berhasil dihapus');
    }
}
