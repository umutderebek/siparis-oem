<?php

namespace App\Http\Controllers\Eticaret;

use App\Models\Siparis\Siparis;
use Toastr;
use Cart;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;

class OdemeController extends Controller
{
    public function index()
    {
    if(!auth()->check())
    {
        return redirect('login')->with('mesaj_tur','primary')
            ->with('mesaj','You only need to have a user registration to sign in for the order process.');

    }
    else if(count(Cart::content())==0)
    {
        return redirect()->route('anasayfa')->with('mesaj_tur','primary')
            ->with('mesaj','Please Continue your ordering. For the order process , you need have at least 1 product.');
    }




    return view('frontend.odeme.order');

    }

    public function order(Request $request)
    {
        $this->validate(request(),[
            'billing_name' => 'required',
            'billing_last_name' => 'required',
            'billing_company' => 'required',
            'billing_address' => 'required',
            'billing_address2' => 'required',
            'billing_city' => 'required',
            'billing_phone' => 'required',
            'billing_email' => 'required',
            'shipping_name' => 'required',
            'shipping_last_name' => 'required',
            'shipping_company' => 'required',
            'shipping_address' => 'required',
            'shipping_address2' => 'required',
            'shipping_city' => 'required',
            'shipping_notes' => 'required',
        ]);

        $siparis = new Siparis();
        $siparis->billing_name = request('billing_name');
        $siparis->billing_last_name = request('billing_last_name');
        $siparis->billing_company = request('billing_company');
        $siparis->billing_address = request('billing_address');
        $siparis->billing_address2 = request('billing_address2');
        $siparis->billing_city = request('billing_city');
        $siparis->billing_phone = request('billing_phone');
        $siparis->billing_email = request('billing_email');
        $siparis->shipping_name = request('shipping_name');
        $siparis->shipping_last_name = request('shipping_last_name');
        $siparis->shipping_company = request('shipping_company');
        $siparis->shipping_address = request('shipping_address');
        $siparis->shipping_address2 = request('shipping_address2');
        $siparis->shipping_city = request('shipping_city');
        $siparis->shipping_notes = request('shipping_notes');

        $siparis->sepet_id = session('aktif_sepet_id');
        $siparis['durum'] = "Your order has been reviewed";

        $siparis->save();

        Cart::destroy();

        session()->forget('aktif_sepet_id');

        Toastr::success('Your Order Created Successfuly.','Success');

        return redirect()->route('siparisler');


    }
}
