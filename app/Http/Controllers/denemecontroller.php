<?php

namespace App\Http\Controllers;

use App\Models\KategoriUrun\Urun;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class denemecontroller extends Controller
{



    public function kaydet(Request $request,$id)
    {

        $this->validate(request(),[
            'name' => 'required',
            'surname' => 'required',
            'company' => 'required',
            'urun_resmi' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone' => 'required',
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
        ]);

        $user = User::find($id);

        $user->name = request('name');
        $user->surname = request('surname');
        $user->company = request('company');
        $user->website = request('website');
        $user->phone = request('phone');
        $user->address = request('address');
        $user->country = request('country');
        $user->state = request('state');

        if(Input::hasFile('urun_resmi'))
        {
            $file = Input::file('urun_resmi');
            $file->move('frontend/uploads/profile',$file->getClientOriginalName());
            $user->urun_resmi = $file->getClientOriginalName();
        }



        $user->update();




        Toastr::success('Veri Başarıyla Güncellendi :)','Success');

        return redirect()->route('user.profile');


    }

    public function java()
    {
        $product = Urun::all();

        $product = DB::table('urun')->select('urun.*')->get();

        return view('deneme',compact('product'));

    }

}
