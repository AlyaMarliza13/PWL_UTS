<?php

namespace App\Http\Controllers;

use App\Models\list_films;
use App\Models\list_filmsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class list_filmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $list_films = list_films::all();
        if($request->has('search')){
            $list_films = list_films::where('nama_film','LIKE',"%" . request('search'). "%")->paginate(5);
        }else{
           $list_films = list_films::paginate(5);
        }

        return view ('list_films.list_films')->with('list_films', $list_films);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('list_films.create_list_films')
                    ->with('url_form', url('/list_films'));
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
            'nama_film' => 'required|string|max:100,',
            'kategori_film' => 'required|in:Aksi,Anak-anak,Drama,Fiksi,Komedi,Keluarga,Petualangan,Sejarah',
            'jumlah' => 'required|integer',
            'harga_sewa' => 'required|integer',
        ]);

        $data = list_films::create($request->except(['_token']));
        return redirect('list_films')
                    ->with('success', 'list_films berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\list_films  $list_films
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\list_films  $list_films
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list_films = list_films::find($id);
        return view('list_films.create_list_films')
                ->with('list_films', $list_films)
                ->with('url_form', url('/list_films/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\list_films  $list_films
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_film' => 'required|string|max:50,'. $id,
            'nama_film' => 'required|string|max:100,',
            'kategori_film' => 'required|in:Aksi,Anak-anak,Drama,Fiksi,Komedi,Keluarga,Petualangan,Sejarah',
            'jumlah' => 'required|integer',
            'harga_sewa' => 'required|integer',
        ]);

        $data = list_films::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('list_films')
                    ->with('success', 'list_films berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\list_films  $list_films
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        list_films::where('id', '=', $id)->delete();
        return redirect('list_films')
        ->with('success', 'List Film Berhasil dihapus');
    }

}
