<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\NewContactRequest;

use App\Mail\NewSubscribeRequest;
use App\Models\Blog\Blog;
use App\Models\Forms\Contact;
use App\Models\KategoriUrun\Kategori;
use App\Models\KategoriUrun\Urun;
use App\Models\Subscribers;
use App\Tema\İletisimAyarları;
use App\Tema\TemaAyarları;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\DB;

class SayfaController extends Controller
{

    public function index()
    {

        $most_recent = Urun::select('urun.*')
            ->where('goster_cok_satan',1)->
            orderBy('updated_at','desc')->take(5)->get();

        $kategoriler = Kategori::whereRaw('üst_id is null')->get();

    return view('frontend.anasayfa',compact('most_recent','kategoriler'));
    }

    public function iletisim()
    {

        return view('frontend.iletisim');
    }

    public function mail(Request $request)
    {
        request()->validate([
            'name',
            'email',
            'subject',
            'message'
        ]);

        Contact::create($request->all());

        Mail::to('info@rdglobal.com.tr')->send(new NewContactRequest($request));

        toastr()->success('Your message has been successfully sent');

        return back();
    }

    public function subs(Request $request)
    {
        request()->validate([
            'name',
        ]);

        Subscribers::create($request->all());

        Mail::to('info@rdglobal.com.tr')->send(new NewSubscribeRequest($request));

        toastr()->success('Thank you for your subscription');
        return back();
    }

    public function hakkimda()
    {

        return view('frontend.hakkimda');
    }

    public function career()
    {
        $temaayar = TemaAyarları::all();
        return view('frontend.career');
    }


}
