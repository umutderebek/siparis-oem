<?php

namespace App\Http\Controllers\Eticaret;

use App\Models\KategoriUrun\Kategori;
use App\Models\KategoriUrun\Urun;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UrunController extends Controller
{
    public function urun($slug_urunadi)
    {
        $urun = Urun::whereSlug($slug_urunadi)->firstOrFail();
        // iki tane olandan kategoriyi 1 e indirmek
        $kategoriler = Kategori::whereRaw('üst_id is null')->get();
        //$urun = Urun::where('slug',$slug_urunadi)->firstOrFail();



        $most_recent = Urun::select('urun.*')
            ->where('goster_cok_satan',1)->
            orderBy('updated_at','asc')->take(5)->get();


        $rand_product  = Urun::inRandomOrder()->where('goster_one_cikan','=',1)->orderByRaw('created_at ASC')->take(3)->get();


        return view('frontend.urun.product',compact('urun','kategoriler','most_recent','rand_product'));
    }

    public function ara()
    {

        $aranan = request()->input('aranan');
        $urunler = Urun::where('urun_adi','like',"%$aranan%")
            ->orwhere('aciklama','like',"%$aranan%")
            ->get();

        request()->flash();

        return view('arama',compact('urunler'));
    }
}
