<?php

namespace App\Http\Controllers\Admin\Urun;

use App\Models\KategoriUrun\Kategori;
use App\Models\KategoriUrun\KategoriUrun;
use App\Models\KategoriUrun\Urun;
use App\Models\KategoriUrun\UrunDetay;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AdminUrunController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $list = Urun::orderby('id')->paginate(30);

        return view('backend.urun.index',compact('list'));
    }

    public function create()
    {
         $urunkategori = KategoriUrun::all();

         return view('backend.urun.creater',compact('urunkategori'));
    }

    public function kaydet(Request $request,$id)
    {
        $data = request()->only('slug','urun_adi','oz1','oz2','oz3','oz4','aciklama',
            'seo_title','seo_description','seo_keywords');

        $kategoriler = request('kategoriler');

        $hayda = request('goster_gunun_firsati');


        $data['goster_gunun_firsati'] = request()->has('goster_gunun_firsati') ? 0: 1;



        $entry = Urun::where('id',$id)->firstOrFail();
        $entry1 = Urun::where('id',$id)->firstOrFail();


        $entry->update($data);

        $entry1->update($data);





        $entry->kategoriler()->sync($kategoriler);

        if (request()->hasFile('urun_resmi'))
        {
            $this->validate(request(),[
                'urun_resmi' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);

            $urun_resmi = request()->file('urun_resmi');
            $urun_resmi = request()->urun_resmi;

            //$dosyad = $urun_resmi->getClientOriginalName();

            $dosyad = $entry->id . "-" . time() . "." . $urun_resmi->extension();

            if($urun_resmi->isValid())
            {
                $urun_resmi->move('frontend/uploads/product',$dosyad);

                Urun::updateOrCreate(
                    ['id' => $entry->id],
                    ['urun_resmi'=> $dosyad]
                );

            }
        }


        if (request()->hasFile('urun_kapak_resmi'))
        {
            $this->validate(request(),[
                'urun_kapak_resmi' => 'image|mimes:jpg,png,jpeg,gif|max:5000'
            ]);

            $urun_resmi = request()->file('urun_kapak_resmi');
            $urun_resmi = request()->urun_kapak_resmi;

            //$dosyad = $urun_resmi->getClientOriginalName();

            $dosyad = $entry1->id . "-" . time() . "." . $urun_resmi->extension();

            if($urun_resmi->isValid())
            {
                $urun_resmi->move('frontend/uploads/product/kapak',$dosyad);

                Urun::updateOrCreate(
                    ['id' => $entry1->id],
                    ['urun_kapak_resmi'=> $dosyad]
                );

            }
        }



        Toastr::success('Veri Başarıyla Güncellendi :)','Success');

        return redirect()
            ->route('admin.urun',$entry->id);
    }

    public function edit($id)
    {
        $list = Urun::find($id);
        $urun_kategoriler = [];
        $urun_kategoriler = $list->kategoriler()->pluck('kategori_id')->all();
        $kategoriler = Kategori::all();
        return view('backend.urun.edit',compact('list','kategoriler','urun_kategoriler'));
    }

    public function guncelle(Request $request,$id)
    {
        request()->validate([
            'urun_adi' =>'required',
            'goster_gunun_firsati' => 'numeric|min:0|max:1',
            'goster_one_cikan' => 'numeric|min:0|max:1',
            'goster_cok_satan' => 'numeric|min:0|max:1',
            'goster_indirimli' => 'numeric|min:0|max:1'
        ]);

        $urun  = Urun::find($id);

        $urun->urun_adi = request('urun_adi');
        $urun->oz1 = request('oz1');
        $urun->oz2 = request('oz2');
        $urun->oz3 = request('oz3');
        $urun->oz4 = request('oz4');
        $urun->goster_gunun_firsati = request('goster_gunun_firsati');
        $urun->goster_one_cikan = request('goster_one_cikan');
        $urun->goster_cok_satan = request('goster_cok_satan');
        $urun->goster_indirimli = request('goster_indirimli');
        $urun->aciklama = request('aciklama');
        $urun->seo_title = request('seo_title');
        $urun->seo_description = request('seo_description');
        $urun->seo_keywords = request('seo_keywords');
        $kategoriler = request('kategoriler');

        if(Input::hasFile('urun_resmi'))
        {
            $file = Input::file('urun_resmi');
            $file->move('frontend/uploads/product',$file->getClientOriginalName());
            $urun->urun_resmi = $file->getClientOriginalName();
        }



        $urun->kategoriler()->sync($kategoriler);


        $urun->update();

        Toastr::success('Veri Başarıyla Güncellendi :)','Success');

        return redirect()
            ->route('admin.urun');
    }

    public function sil($id)
    {
        Urun::destroy($id);
        Toastr::success('Veri Başarıyla Silindi :)','Success');
        return redirect()->back();

    }
}
