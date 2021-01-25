<?php namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Yazi;

class YaziController extends Controller
{
    public function index()
    {
        return view('admin.yazi_listele', [
            'yazilar' => Yazi::all(),
        ]);
    }


    public function ekle()
    {
        return view('admin.yazi_ekle');
    }


    public function kaydet(Request $request)
    {
        $y = Yazi::create([
            'baslik' => $request->post('baslik'),
            'slug' => Str::slug($request->post('baslik'), '-'),
            'icerik' => $request->post('icerik'),
        ]);

        return redirect()->route('yazi');
    }


    public function detay($id)
    {
        return view('admin.yazi_detay', [
            'yazi' => Yazi::find($id),
        ]);
    }


    public function guncelle($id, Request $request)
    {
        Yazi::where('id', $id)->update([
            'baslik' => $request->post('baslik'),
            'slug' => Str::slug($request->post('baslik')),
            'icerik' => $request->post('icerik'),
        ]);
        return redirect()->route('yazi_detay', ['id' => $id]);
    }


    public function sil($id)
    {
        Yazi::destroy($id);
        return redirect()->route('yazi');
    }
}
