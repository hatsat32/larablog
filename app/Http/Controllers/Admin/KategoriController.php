<?php namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        return view('admin.kategori_listele', [
            'kategoriler' => Kategori::all(),
        ]);
    }


    public function ekle()
    {
        return view('admin.kategori_ekle');
    }


    public function kaydet(Request $request)
    {
        $k = Kategori::create([
            'isim' => $request->post('isim'),
            'aciklama' => $request->post('aciklama'),
        ]);

        return redirect()->route('kategori');
    }


    public function detay($id)
    {
        $kategori = Kategori::find($id);
        return view('admin.kategori_detay', [
            'kategori' => $kategori,
        ]);
    }


    public function guncelle($id, Request $request)
    {
        Kategori::where('id', $id)->update([
            'isim' => $request->post('isim'),
            'aciklama' => $request->post('aciklama'),
        ]);
        return redirect()->route('kategori_detay', ['id' => $id]);
    }


    public function sil($id)
    {
        Kategori::destroy($id);
        return redirect()->route('kategori');
    }
}
