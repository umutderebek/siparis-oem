<?php

namespace App\Http\Controllers\Eticaret;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Siparis\Siparis;

class RequestOrder extends Controller
{
    public function index()
    {
        $siparisler = Siparis::with('sepet')->wherehas('sepet',function ($query)
        {
            $query->where('user_id',auth()->id());
        })->get();

        return view('userbackend.orders.index',compact('siparisler'));
    }

    public function detay($id)
    {
        $siparis  = Siparis::with('sepet.sepet_urunler.urun')
            ->whereHas('sepet',function ($query)
            {
                $query->where('user_id',auth()->id());
            })
            ->where('siparis.id',$id)
            ->firstOrFail();

        return view('userbackend.orders.index-detay',compact('siparis'));
    }
}
