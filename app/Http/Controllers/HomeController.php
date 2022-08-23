<?php

namespace App\Http\Controllers;

use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        $user_id = auth()->id();

        $user = User::where('id',$user_id)->firstOrFail();

        $countries = DB::table('countries')->pluck("name","id");

        return view('userbackend.profile.index',compact('user','countries'));
    }

    public function getStates($id)
    {
        $states = DB::table("states")->where("countries_id",$id)->pluck("name","id");
        return json_encode($states);
    }


    public function sifreform()
    {
        return view('auth.changepassword');
    }

    public function Showcphl(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Sistemde tanımlı olan şifreyle şuanki şifreniz aynı degil. Lütfen kontrol ediniz.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","Yeni şifreleriniz Uyuşmuyor. Lütfen kontrol ediniz.");
        }

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        Toastr::success('Şifreniz Başarıyla Güncellendi :)','Success');

        return redirect()->back();
    }



    public function emailform()
    {
        return view('auth.changemail');
    }

    public function mailsjsj(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Sistemde tanımlı olan şifreyle şuanki şifreniz aynı degil. Lütfen kontrol ediniz.");
        }

        if(strcmp($request->get('new-mail'), $request->get('new-mail-confirm')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","Yeni şifreleriniz Uyuşmuyor. Lütfen kontrol ediniz.");
        }

        $user = Auth::user();

        $user->email = $request->get('new-mail');

        $user->save();

        if($user->save()==1)
        {
            Toastr::success('Emailiniz Başarıyla Güncellendi :)','Success');
        }




        return redirect()->back();

    }

}
