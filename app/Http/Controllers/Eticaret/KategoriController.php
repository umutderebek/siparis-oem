<?php

namespace App\Http\Controllers\Eticaret;

use App\Models\KategoriUrun\Kategori;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    public function index($slug_kategoriadi)
    {

        $kategori = Kategori::where('slug',$slug_kategoriadi)->firstOrFail();

        $alt_kategori = Kategori::where('üst_id',$kategori->id)->get();

        $sirala = request('sirala');

        if($sirala == 'goster_cok_satan')
        {
            $urunler = $kategori->urunler()
                ->distinct()
                ->orderBy('goster_cok_satan','desc')
                ->paginate(9);
        }

        else if ($sirala == 'yeni')
        {
            $urunler = $kategori->urunler()->distinct()->orderByDesc('updated_at')->paginate('4');
        }

        else
        {
            $urunler = $kategori->urunler()->paginate(9);
        }


        return view('frontend.category.kategori',compact('kategori','alt_kategori','urunler'));
    }


}
