<?php

namespace App\Http\Controllers;
use App\Models\Fotogallery;
use Illuminate\Http\Request;

class fotogalleryController extends Controller
{
    public function tampilfoto(Request $request)
    {
        {
            if($request->has('search')){
                $fotogallery = Fotogallery::where('judul', 'LIKE', '%' .$request->search. '%')->paginate(5);
            }else{
                $fotogallery = Fotogallery::paginate(5);
            }
            return view('pages.admin.gallery.foto.index', compact('fotogallery'));    
        }
    }

    public function create(Request $request)
    {
            $data = Fotogallery::create($request->all());
            if($request->hasFile('foto')) {
                    $request->file('foto')->move('fotogallery/', $request->file('foto')->getClientOriginalName());
                    $data->foto = $request->file('foto')->getClientOriginalName();
                    $data->save();
            return redirect()->route('tampilfoto');
            }

    }

    public function updatefoto(Request $request, $id)
    {
        $data = Fotogallery::findorfail($id);
        $data->judul = $request->input('judul');

        if($request->hasFile('foto')) 
        {
            $tempatfile = public_path('/fotogallery/'.$data->foto);
            if(file_exists($tempatfile))
            {
                @unlink($tempatfile);
            }
            $request->file('foto')->move('fotogallery/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
        }
        
        $data->update();
        return redirect()->route('tampilfoto');
}

public function editfoto($id){

    $data = Fotogallery::find($id);
    return view('pages.admin.gallery.foto.edit', compact('data'));


}
public function hapusdata($id)
{
$data = Fotogallery::findorfail($id);
$file = public_path('/fotogallery/').$data->foto;
//cek jika ada gambar
if (file_exists($file)){
   @unlink($file);
}
$data->delete();
return redirect()->route('tampilfoto');

}


}




