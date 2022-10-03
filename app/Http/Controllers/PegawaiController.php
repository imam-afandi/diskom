<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function tampilpegawai(Request $request)
    {
        {
            if($request->has('search')){
                $pegawai = Pegawai::where('nama', 'LIKE', '%' .$request->search. '%')->paginate(5);
            }else{
                $pegawai = Pegawai::paginate(5);
            }
           
            return view('pages.admin.data-pegawai.pegawai', compact('pegawai'));    
        }
    }


    public function tambahpegawai()
    {
        $pegawai = Pegawai::all();
        $jabatan = Jabatan::all();
        return view('pages.admin.data-pegawai.createpegawai', compact('pegawai', 'jabatan'));
    }

    public function create(Request $request)
    {
        $data = Pegawai::create($request->all());
        if($request->hasFile('foto')) {
                $request->file('foto')->move('fotopegawai/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
        return redirect()->route('tampilpegawai');
        }
    }

    public function editpegawai($id)
    {
        $jabatan= Jabatan::all();
        $data = Pegawai::find($id);
        return view('pages.admin.data-pegawai.editpegawai', compact('data', 'jabatan')); 
    }

    public function updatepegawai(Request $request, $id)
    {
        $data = Pegawai::findorfail($id);
        $data->jabatan_id = $request->input('jabatan_id');
        $data->nama = $request->input('nama');
        $data->tempat_lahir = $request->input('tempat_lahir');
        $data->tanggal_lahir = $request->input('tanggal_lahir');
        $data->pangkat_gol_ruang = $request->input('pangkat_gol_ruang');
        $data->tugas_fungsi = $request->input('tugas_fungsi');

        if($request->hasFile('foto')) 
        {
            $tempatfile = public_path('/fotopegawai/'.$data->foto);
            if(file_exists($tempatfile))
            {
                @unlink($tempatfile);
            }
            $request->file('foto')->move('fotopegawai/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
        }
        
        $data->update();
        return redirect()->route('tampilpegawai');
    }

    public function hapusdata($id)
    {
    $data = Pegawai::findorfail($id);
    $file = public_path('/fotopegawai/').$data->foto;
    //cek jika ada gambar
    if (file_exists($file)){
       @unlink($file);
    }

    $data->delete();
    return redirect()->route('tampilpegawai');
    //return redirect()->route('kategori')->with('success', 'Data Kategori Berhasil Ditambahkan');
    }

    public function view($id)
    {
        $data = Pegawai::findorfail($id);
        return view('layouts.frontend.detailunitkerja', compact('data')); 

    }

}