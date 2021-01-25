<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Yazi;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'yazilar' => Yazi::all(),
        ]);
    }


    public function yazi($slug)
    {
        return view('yazi', [
            'yazi' => Yazi::where('slug', $slug)->first(),
        ]);
    }
}
