<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jabatan;

use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function tampiljabatan(){
        $jabatan = Jabatan::all();
        return view('pages.admin.data-pegawai.data-jabatan.jabatan', compact('jabatan'));
    }

    public function tambahjabatan(Request $request){
        $jabatan = Jabatan::create($request->all());
        return redirect()->route('jabatan');
    }

    public function editjabatan(Request $request, $id){
        $jabatan = Jabatan::find($id);
        return view('pages.admin.data-pegawai.data-jabatan.edit', compact('jabatan'));
    }
    public function updatejabatan(Request $request, $id){
        $jabatan = Jabatan::find($id);
        $jabatan->update($request->all());
        return redirect()->route('jabatan');
    }

    public function hapusdata($id)
    {
    $data = Jabatan::find($id);
    $data->delete();
    return redirect()->route('jabatan');
    }
}
