<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Berita;
use App\Models\Fotogallery;
use App\Models\KategoriBerita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_berita=Berita::all();
        $user=User::all();
        $kategori=KategoriBerita::all();
        $gallery=Fotogallery::all();
        return view('layouts.frontend.landingpage', compact('data_berita', 'user', 'kategori', 'gallery'));
    }

    public function adminberita(Request $request)
    {
    
        if($request->has('search')){
            $berita = Berita::where('judul', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $berita = Berita::paginate(5);
        }
        
        return view('pages.admin.daftar-berita.index', compact('berita'));
    }

    public function tambahberita()
    {
        $kategori = KategoriBerita::all();
        return view('pages.admin.daftar-berita.create', compact('kategori'));
    }

    public function tampilkategori()
    {
        $kategori = KategoriBerita::all();
        return view('pages.admin.daftar-berita.edit', compact('kategori'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
            $data = Berita::create($request->all());
            if($request->hasFile('foto')) {
                    $request->file('foto')->move('fotoberita/', $request->file('foto')->getClientOriginalName());
                    $data->foto = $request->file('foto')->getClientOriginalName();
                    $data->save();
            return redirect()->route('adminberita');
            }


        
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
    public function show($post)
    {
        $tampilkan = Berita::where('slug', $post)->first();
       // return view('tampil')->with('tampilkan', $tampilkan);
        return view('layouts.frontend.detailberita', compact('tampilkan'));
    }

    public function readmore(Berita $post)
    {
        return view('layouts.frontend.detailberita', [
           // "title" => "Detail Berita",
            "post" => $post
        ]);
    }

    public function view(Berita $post)
    {
        return view('pages.admin.daftar-berita.view', [
           // "title" => "Detail Berita",
            "post" => $post
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = Berita::findorfail($id);
        $data->user_id = $request->input('user_id');
        $data->kategori_id = $request->input('kategori_id');
        $data->judul = $request->input('judul');
        $data->slug = $request->input('slug');
        $data->excerpt = $request->input('excerpt');
        $data->body = $request->input('body');

        if($request->hasFile('foto')) 
        {
            $tempatfile = public_path('/fotoberita/'.$data->foto);
            if(file_exists($tempatfile))
            {
                @unlink($tempatfile);
            }
            $request->file('foto')->move('fotoberita/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
        }
        
        $data->update();
        return redirect()->route('adminberita');
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

    public function tampiledit($id){

        $kategori = KategoriBerita::all();
        $data = Berita::find($id);
        return view('pages.admin.daftar-berita.edit', compact('data', 'kategori'));

 
    }
    public function hapusdata($id)
    {
    $data = Berita::findorfail($id);
    $file = public_path('/fotoberita/').$data->foto;
    //cek jika ada gambar
    if (file_exists($file)){
       @unlink($file);
    }

    $data->delete();
    return redirect()->route('adminberita');
    //return redirect()->route('kategori')->with('success', 'Data Kategori Berhasil Ditambahkan');
    }

   
}
