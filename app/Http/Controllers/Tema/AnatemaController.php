<?php

namespace App\Http\Controllers\Tema;

use App\Models\KategoriUrun\Kategori;
use App\Tema\AnasayfaAyarları;
use App\Tema\İletisimAyarları;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnatemaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function anatema()
    {
        $ayarlar = AnasayfaAyarları::findOrFail(1)->get();




        return view('backend.Admin.Tema.admin-genel-ayar',compact('ayarlar'));
    }
}
