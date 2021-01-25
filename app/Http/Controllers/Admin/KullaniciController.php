<?php namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class KullaniciController extends Controller
{
    public function index()
    {
        return view('admin.kullanici_listele', [
            'kullanicilar' => User::all(),
        ]);
    }


    public function ekle()
    {
        return view('admin.kullanici_ekle', [
        ]);
    }


    public function kaydet(Request $request)
    {

        User::create([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'password' => Hash::make($request->post('password')),
        ]);

        return redirect()->route('kullanici');
    }


    public function detay($id)
    {
        return view('admin.kullanici_detay', [
            'user' => User::find($id),
        ]);
    }


    public function guncelle($id, Request $request)
    {
        User::where('id', $id)->update([
            'name' => $request->post('name'),
            'email' => $request->post('email'),
        ]);
        return redirect()->route('kullanici_detay', ['id' => $id]);
    }


    public function sil($id)
    {
        User::destroy($id);
        return redirect()->route('kullanici');
    }


    public function parola($id, Request $request)
    {
        User::where('id', $id)->update([
            'password' => Hash::make($request->post('password')),
        ]);
        return redirect()->route('kullanici_detay', ['id' => $id]);;
    }
}
