<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;

class KategoriBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $kategori = KategoriBerita::where('nama', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $kategori = KategoriBerita::paginate(5);
        }
       
        return view('pages.admin.kategori-berita.index', compact('kategori'));
           

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        KategoriBerita::create($request->all());
        return redirect()->route('kategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    public function tampildata($id)
    {
    $data = KategoriBerita::find($id);
    return view('pages.admin.kategori-berita.tampildata', compact('data'));
    //return redirect()->route('kategori')->with('success', 'Data Kategori Berhasil Ditambahkan');
    }

    public function updatedata(Request $request, $id)
    {
    $data = KategoriBerita::find($id);
    $data->update($request->all());
    return redirect()->route('kategori');
    //return redirect()->route('kategori')->with('success', 'Data Kategori Berhasil Ditambahkan');
    }

    public function hapusdata($id)
    {
    $data = KategoriBerita::find($id);
    $data->delete();
    return redirect()->route('kategori');
    //return redirect()->route('kategori')->with('success', 'Data Kategori Berhasil Ditambahkan');
    }

}

