<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;
    use HasSlug;
    protected $table = "blog";

    protected $guarded=[];

    protected $fillable = ['post_baslik','yazi','blog_aciklama','blog_keyword','yayın','taslak'];


    //Blog Model'e psikolog fonksiyonunu tanımlayınca ,
    // veritabanındaki relationship oldugu icin post kime aitse psikolog_id ye baglı olan blog gelir.
    public function blogkategori()
    {
        return $this->belongsTo(BlogKategori::class,'blogkategori_id');
    }



    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('post_baslik')
            ->saveSlugsTo('slug');
    }
}
