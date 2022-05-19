<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $databuku = Buku::all();
        return view('admin.index',['buku' => $databuku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.form_tambah');
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
            'kode_buku' => 'required',
            'nama' => 'required',
            'pengarang' => 'required',
            'thn_terbit' => 'required',
            'foto' => 'required'
        ]);
        // dd($request->foto);
        $foto = $request->foto;
        $nama = $request->kode_buku."_".$foto->getClientOriginalName();
        // dd($request->id);
        $data = Buku::updateOrCreate(['id'=>$request->id],[
            'kode_buku' => $request->kode_buku,
            'nama' => $request->nama,
            'pengarang' => $request->pengarang,
            'thn_terbit' => $request->thn_terbit,
            'foto' => $nama,
        ]);

        
        $foto->move(public_path('images'),$nama);

        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku= Buku::where('id',$id)-> first();
        return view('profil_buku',['buku' => $buku]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daftarbuku = Buku::find($id);
        return view('admin.form_ubah',['buku' => $daftarbuku]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::find($id);
        $buku -> delete();

        return redirect()->route('buku.index');
    }
}
