<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\PelangganModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $Pelanggan = Pelanggan::all();
        if($request->has('search')){
            $Pelanggan = Pelanggan::where('nama_pelanggan','LIKE',"%" . request('search'). "%")->paginate(5);
        }else{
           $Pelanggan = Pelanggan::paginate(5);
        }

        return view ('Pelanggan.Pelanggan')->with('Pelanggan', $Pelanggan);

    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;

    		// mengambil data dari table pegawai sesuai pencarian data
		$Pelanggan = DB::table('Pelanggans')
		->where('Pelanggans','like',"%".$search."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index',['Pelanggans' => $Pelanggan]);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pelanggan.create_Pelanggan')
                    ->with('url_form', url('/Pelanggan'));
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
            'kode_pelanggan' => 'required|string|max:50',
            'nama_pelanggan' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat_pelanggan' => 'required|string|max:255',
            'hp' => 'required|string|max:15',
            'riwayat_peminjaman' => 'required|string|max:200',
        ]);

        $data = Pelanggan::create($request->except(['_token']));
        return redirect('Pelanggan')
                    ->with('success', 'Pelanggan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelanggan  $Pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggan  $Pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Pelanggan = Pelanggan::find($id);
        return view('Pelanggan.create_Pelanggan')
                ->with('Pelanggan', $Pelanggan)
                ->with('url_form', url('/Pelanggan/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggan  $Pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_pelanggan' => 'required|string|max:50,'. $id,
            'nama_pelanggan' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat_pelanggan' => 'required|string|max:255',
            'hp' => 'required|string|max:15',
            'riwayat_peminjaman' => 'required|string|max:200',
        ]);

        $data = Pelanggan::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('Pelanggan')
                    ->with('success', 'Pelanggan berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggan  $Pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pelanggan::where('id', '=', $id)->delete();
        return redirect('Pelanggan')
        ->with('success', 'Pelanggan Berhasil dihapus');
    }
}
