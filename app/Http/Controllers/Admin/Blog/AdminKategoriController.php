<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Models\Blog\BlogKategori;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;

class AdminKategoriController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $kats = BlogKategori::all();

        return view('backend.blogkategori.kategori-index',compact('kats'));
    }

    public function form()
    {

        return view('backend.blogkategori.kategori-form');
    }

    public function kaydet(Request $request)
    {
        request()->validate([
            'slug' =>'required',
            'kategori_adi' =>'required',
        ]);

        BlogKategori::create($request->all());

        Toastr::success('Kategori Eklendi','Success');

        return redirect()->route('admin.blogkategori.index');
    }

    public function edit($id)
    {
        $kategori  = BlogKategori::find($id);

        return view('backend.blogkategori.kategori-edit',compact('kategori'));

    }

    public function guncelle($id)
    {
        $data = request()->only('slug','kategori_adi');

        $update = BlogKategori::where('id',$id)->firstorFail();

        $update->update($data);

        Toastr::success('Kategori Guncellendi','Success');

        return redirect()->route('admin.blogkategori.index');
    }

    public function sil($id)
    {
        BlogKategori::destroy($id);
        Toastr::success('Kategori Silindi','Success');
        return redirect()->route('admin.blogkategori.index');
    }
}
