<?php

namespace App\Http\Controllers\Admin\Blog;


use App\Models\Blog\Blog;
use App\Models\Blog\BlogKategori;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AdminBlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

        $blogs = Blog::all();



        return view('backend.blog.news-index',compact('blogs'));
    }

    public function form()
    {
        $blogkategori = BlogKategori::all();
        return view('backend.blog.news-creator',compact('blogkategori'));
    }


    public function kaydet(Request $request)
    {
        $this->validate(request(),[
            'post_baslik' => 'required',
            'onyazi' => 'required',
            'yazi' => 'required',
            'kimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'blogkategori' => 'required',
            'blog_aciklama' => 'required',
            'blog_keyword' => 'required',
        ]);

        $blog = new Blog();
        $blog->post_baslik = request('post_baslik');
        $blog->onyazi = request('onyazi');
        $blog->yazi = request('yazi');
        $blog->blog_aciklama = request('blog_aciklama');
        $blog->blog_keyword = request('blog_keyword');



        if(Input::hasFile('kimage'))
        {
            $file = Input::file('kimage');
            $file->move('frontend/uploads/blog/kapak',$file->getClientOriginalName());
            $blog->kimage = $file->getClientOriginalName();
        }

        if(Input::hasFile('gimage'))
        {
            $file = Input::file('gimage');
            $file->move('frontend/uploads/blog/ongorsel',$file->getClientOriginalName());
            $blog->gimage = $file->getClientOriginalName();
        }

        $blog['yayın'] = request()->has('yayın') ? 1: 0;

        $blog->blogkategori_id = request('blogkategori');



        $blog->save();

        Toastr::success('Veri Başarıyla Güncellendi :)','Success');

        return redirect()
            ->route('admin.blog.index');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        $blog_kategoriler = $blog->blogkategori()->pluck('id')->all();
        $blogkategori = BlogKategori::all();
        return view('backend.blog.news-guncelle',compact('blog','blogkategori','blog_kategoriler'));
    }
    public function guncelle(Request $request,$id)
    {


        request()->validate([
            'post_baslik' =>'required',
            'yazi' =>'required',
            'onyazi'=>'required'
        ]);

        $blog = Blog::find($id);

        $blog->post_baslik = request('post_baslik');
        $blog->yazi = request('yazi');
        $blog->onyazi = request('onyazi');
        $blog->blog_aciklama = request('blog_aciklama');
        $blog->blog_keyword = request('blog_keyword');


        if(Input::hasFile('kimage'))
        {
            $file = Input::file('kimage');
            $file->move('frontend/uploads/blog/kapak',$file->getClientOriginalName());
            $blog->kimage = $file->getClientOriginalName();
        }

        if(Input::hasFile('gimage'))
        {
            $file = Input::file('gimage');
            $file->move('frontend/uploads/blog/ongorsel',$file->getClientOriginalName());
            $blog->gimage = $file->getClientOriginalName();
        }

        $blog['yayın'] = request()->has('yayın') ? 1: 0;


        $blog->blogkategori_id = request('blogkategori');

        $blog->update();





        Toastr::success('Veri Başarıyla Güncellendi :)','Success');
        return redirect()->route('admin.blog.index');

    }



    public function sil($id)
    {
        Blog::destroy($id);
        Toastr::success('Blog Silindi','Success');
        return redirect()->route('admin.blog.index');
    }
}
