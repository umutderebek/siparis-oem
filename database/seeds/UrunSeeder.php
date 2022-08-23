<?php

use Illuminate\Database\Seeder;
use App\Models\KategoriUrun\Urun;


class UrunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Urun::truncate();


        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '4F';
        $urun->oz2 = '11cm';
        $urun->oz3 = 'kırmızı';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '5F';
        $urun->oz2 = '11cm';
        $urun->oz3 = 'gri';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '6F';
        $urun->oz2 = '11cm';
        $urun->oz3 = 'yeşil';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '7F';
        $urun->oz2 = '11cm';
        $urun->oz3 = 'turuncu';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '8F';
        $urun->oz2 = '11cm';
        $urun->oz3 = 'mavi';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '9F';
        $urun->oz2 = '11cm';
        $urun->oz3 = 'siyah';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '10F';
        $urun->oz2 = '11cm';
        $urun->oz3 = 'mor';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '11F';
        $urun->oz2 = '11cm';
        $urun->oz3 = 'sarı';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '4F';
        $urun->oz2 = '16cm';
        $urun->oz3 = 'kırmızı';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '5F';
        $urun->oz2 = '16cm';
        $urun->oz3 = 'gri';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '6F';
        $urun->oz2 = '16cm';
        $urun->oz3 = 'yeşil';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '7F';
        $urun->oz2 = '16cm';
        $urun->oz3 = 'turuncu';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '8F';
        $urun->oz2 = '16cm';
        $urun->oz3 = 'mavi';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '9F';
        $urun->oz2 = '16cm';
        $urun->oz3 = 'siyah';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '10F';
        $urun->oz2 = '16cm';
        $urun->oz3 = 'mor';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '11F';
        $urun->oz2 = '16cm';
        $urun->oz3 = 'sarı';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '4F';
        $urun->oz2 = '45cm';
        $urun->oz3 = 'kırmızı';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '5F';
        $urun->oz2 = '45cm';
        $urun->oz3 = 'gri';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '6F';
        $urun->oz2 = '45cm';
        $urun->oz3 = 'yeşil';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '7F';
        $urun->oz2 = '45cm';
        $urun->oz3 = 'turuncu';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '8F';
        $urun->oz2 = '45cm';
        $urun->oz3 = 'mavi';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '9F';
        $urun->oz2 = '45cm';
        $urun->oz3 = 'siyah';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '10F';
        $urun->oz2 = '45cm';
        $urun->oz3 = 'mor';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '11F';
        $urun->oz2 = '45cm';
        $urun->oz3 = 'sarı';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '4F';
        $urun->oz2 = '65cm';
        $urun->oz3 = 'kırmızı';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '5F';
        $urun->oz2 = '65cm';
        $urun->oz3 = 'gri';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '6F';
        $urun->oz2 = '65cm';
        $urun->oz3 = 'yeşil';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '7F';
        $urun->oz2 = '65cm';
        $urun->oz3 = 'turuncu';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '8F';
        $urun->oz2 = '65cm';
        $urun->oz3 = 'mavi';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '9F';
        $urun->oz2 = '65cm';
        $urun->oz3 = 'siyah';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '10F';
        $urun->oz2 = '65cm';
        $urun->oz3 = 'mor';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '11F';
        $urun->oz2 = '65cm';
        $urun->oz3 = 'sarı';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '4F';
        $urun->oz2 = '90 cm';
        $urun->oz3 = 'kırmızı';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '5F';
        $urun->oz2 = '90 cm';
        $urun->oz3 = 'gri';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '6F';
        $urun->oz2 = '90 cm';
        $urun->oz3 = 'yeşil';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '7F';
        $urun->oz2 = '90 cm';
        $urun->oz3 = 'turuncu';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '8F';
        $urun->oz2 = '90 cm';
        $urun->oz3 = 'mavi';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '9F';
        $urun->oz2 = '90 cm';
        $urun->oz3 = 'siyah';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '10F';
        $urun->oz2 = '90 cm';
        $urun->oz3 = 'mor';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('IN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '11F';
        $urun->oz2 = '90 cm';
        $urun->oz3 = 'sarı';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '4F';
        $urun->oz2 = '16cm';
        $urun->oz3 = 'kırmızı';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();



        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '5F';
        $urun->oz2 = '16cm';
        $urun->oz3 = 'gri';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '6F';
        $urun->oz2 = '16cm';
        $urun->oz3 = 'yeşil';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '7F';
        $urun->oz2 = '16cm';
        $urun->oz3 = 'turuncu';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '8F';
        $urun->oz2 = '16cm';
        $urun->oz3 = 'mavi';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '9F';
        $urun->oz2 = '16cm';
        $urun->oz3 = 'siyah';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '10F';
        $urun->oz2 = '16cm';
        $urun->oz3 = 'mor';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '11F';
        $urun->oz2 = '16cm';
        $urun->oz3 = 'sarı';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '4F';
        $urun->oz2 = '21cm';
        $urun->oz3 = 'kırmızı';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '5F';
        $urun->oz2 = '21cm';
        $urun->oz3 = 'gri';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '6F';
        $urun->oz2 = '21cm';
        $urun->oz3 = 'yeşil';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '7F';
        $urun->oz2 = '21cm';
        $urun->oz3 = 'turuncu';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '8F';
        $urun->oz2 = '21cm';
        $urun->oz3 = 'mavi';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '9F';
        $urun->oz2 = '21cm';
        $urun->oz3 = 'siyah';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();



        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '10F';
        $urun->oz2 = '21cm';
        $urun->oz3 = 'mor';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '11F';
        $urun->oz2 = '21cm';
        $urun->oz3 = 'sarı';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '4F';
        $urun->oz2 = '50 cm';
        $urun->oz3 = 'kırmızı';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '5F';
        $urun->oz2 = '50 cm';
        $urun->oz3 = 'gri';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '6F';
        $urun->oz2 = '50 cm';
        $urun->oz3 = 'yeşil';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '7F';
        $urun->oz2 = '50 cm';
        $urun->oz3 = 'turuncu';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '8F';
        $urun->oz2 = '50 cm';
        $urun->oz3 = 'mavi';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '9F';
        $urun->oz2 = '50 cm';
        $urun->oz3 = 'siyah';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '10F';
        $urun->oz2 = '50 cm';
        $urun->oz3 = 'mor';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '11F';
        $urun->oz2 = '50 cm';
        $urun->oz3 = 'sarı';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '4F';
        $urun->oz2 = '70 cm';
        $urun->oz3 = 'kırmızı';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '5F';
        $urun->oz2 = '70 cm';
        $urun->oz3 = 'gri';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '6F';
        $urun->oz2 = '70 cm';
        $urun->oz3 = 'yeşil';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();



        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '7F';
        $urun->oz2 = '70 cm';
        $urun->oz3 = 'turuncu';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '8F';
        $urun->oz2 = '70 cm';
        $urun->oz3 = 'mavi';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '9F';
        $urun->oz2 = '70 cm';
        $urun->oz3 = 'siyah';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '10F';
        $urun->oz2 = '70 cm';
        $urun->oz3 = 'mor';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '11F';
        $urun->oz2 = '70 cm';
        $urun->oz3 = 'sarı';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '4F';
        $urun->oz2 = '95 cm';
        $urun->oz3 = 'kırmızı';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '5F';
        $urun->oz2 = '95 cm';
        $urun->oz3 = 'gri';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '6F';
        $urun->oz2 = '95 cm';
        $urun->oz3 = 'yeşil';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '7F';
        $urun->oz2 = '95 cm';
        $urun->oz3 = 'turuncu';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '8F';
        $urun->oz2 = '95 cm';
        $urun->oz3 = 'mavi';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '9F';
        $urun->oz2 = '95 cm';
        $urun->oz3 = 'siyah';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '10F';
        $urun->oz2 = '95 cm';
        $urun->oz3 = 'mor';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('DT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '11F';
        $urun->oz2 = '95 cm';
        $urun->oz3 = 'sarı';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('ND'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '18G XTV';
        $urun->oz2 = '6.88cm';
        $urun->oz4 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('ND'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '21G XTV';
        $urun->oz2 = '6.88cm';
        $urun->oz4 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('ND'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '18G';
        $urun->oz2 = '5 CM';
        $urun->oz4 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('ND'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '18G';
        $urun->oz2 = '7 CM';
        $urun->oz4 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('ND'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '18G';
        $urun->oz2 = '9 CM';
        $urun->oz4 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('ND'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '20G';
        $urun->oz2 = '4cm';
        $urun->oz4 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('ND'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '20G';
        $urun->oz2 = '7cm';
        $urun->oz4 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('ND'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '21G';
        $urun->oz2 = '4cm';
        $urun->oz4 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('ND'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '21G';
        $urun->oz2 = '7cm';
        $urun->oz4 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('ND'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '21G';
        $urun->oz2 = '9cm';
        $urun->oz4 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('ND'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '22G';
        $urun->oz2 = '6cm';
        $urun->oz4 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('TB'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '500 psi';
        $urun->oz2 = 'female/female';
        $urun->oz3 = '3.0';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('TB'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '500 psi';
        $urun->oz2 = 'female/male';
        $urun->oz3 = '3.0';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('TB'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '500 psi';
        $urun->oz2 = 'female/rotator';
        $urun->oz3 = '3.0';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('TB'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '500 psi';
        $urun->oz2 = 'male/male';
        $urun->oz3 = '3.0';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('TB'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '500 psi';
        $urun->oz2 = 'female/female';
        $urun->oz3 = '4.0';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('TB'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '500 psi';
        $urun->oz2 = 'female/male';
        $urun->oz3 = '4.0';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('TB'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '500 psi';
        $urun->oz2 = 'female/rotator';
        $urun->oz3 = '4.0';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('TB'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '500 psi';
        $urun->oz2 = 'male/male';
        $urun->oz3 = '4.0';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('ADPRT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = 'ROTATORS';
        $urun->oz2 = 'POCKET ID 6F';
        $urun->oz4 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('ADPRT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = 'ROTATORS';
        $urun->oz2 = 'POCKET ID 7F';
        $urun->oz4 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('ADPRT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = 'ROTATORS';
        $urun->oz2 = 'POCKET ID 8F';
        $urun->oz4 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('ADPRT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = 'ELBOW';
        $urun->oz2 = 'SCREWED';
        $urun->oz4 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('ADPRT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = 'ELBOW';
        $urun->oz2 = 'STRAIGHT';
        $urun->oz4 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('ADPRT'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = 'ELBOW';
        $urun->oz2 = 'STRAIGHT';
        $urun->oz4 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('CRVD'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0,035';
        $urun->oz2 = '15O CM';
        $urun->oz3 = 'PTFE';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('CRVD'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0,038';
        $urun->oz2 = '260 CM';
        $urun->oz3 = 'PTFE';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('HYPC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.012';
        $urun->oz2 = '150 CM';
        $urun->oz3 = 'Hydrophılıc coated';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('HYPC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = '150 CM';
        $urun->oz3 = 'Hydrophılıc coated';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('HYPC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.018';
        $urun->oz2 = '150 CM';
        $urun->oz3 = 'Hydrophılıc coated';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('HYPC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.035';
        $urun->oz2 = '150 CM';
        $urun->oz3 = 'Hydrophılıc coated';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('HYPC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.012';
        $urun->oz2 = '180 CM';
        $urun->oz3 = 'Hydrophılıc coated';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('HYPC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = '180 CM';
        $urun->oz3 = 'Hydrophılıc coated';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('HYPC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.018';
        $urun->oz2 = '180 CM';
        $urun->oz3 = 'Hydrophılıc coated';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('HYPC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.035';
        $urun->oz2 = '180 CM';
        $urun->oz3 = 'Hydrophılıc coated';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('HYPC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.038';
        $urun->oz2 = '180 CM';
        $urun->oz3 = 'Hydrophılıc coated';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('HYPC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.012';
        $urun->oz2 = '260 CM';
        $urun->oz3 = 'Hydrophılıc coated';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('HYPC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = '260 CM';
        $urun->oz3 = 'Hydrophılıc coated';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('HYPC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.018';
        $urun->oz2 = '260 CM';
        $urun->oz3 = 'Hydrophılıc coated';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('HYPC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.035';
        $urun->oz2 = '260 CM';
        $urun->oz3 = 'Hydrophılıc coated';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('HYPC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.038';
        $urun->oz2 = '260 CM';
        $urun->oz3 = 'Hydrophılıc coated';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('ANGLED'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.018';
        $urun->oz2 = '260 CM';
        $urun->oz3 = 'Coated';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('ANGLED'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.035';
        $urun->oz2 = '260 CM';
        $urun->oz3 = 'Coated';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('ANGLED'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.038';
        $urun->oz2 = '260 CM';
        $urun->oz3 = 'Coated';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('RCZTN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = '12g';
        $urun->oz3 = '180';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('RCZTN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = '12g';
        $urun->oz3 = '300';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('RCZTN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = '18g';
        $urun->oz3 = '180';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('RCZTN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = '18g';
        $urun->oz3 = '300';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('RCZTN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = '25g';
        $urun->oz3 = '180';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('RCZTN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = '25g';
        $urun->oz3 = '300';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('RCZTN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = '30g';
        $urun->oz3 = '180';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('RCZTN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = '30g';
        $urun->oz3 = '300';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('RCZTN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.018';
        $urun->oz2 = '12g';
        $urun->oz3 = '180';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('RCZTN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.018';
        $urun->oz2 = '12g';
        $urun->oz3 = '300';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('RCZTN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.018';
        $urun->oz2 = '18g';
        $urun->oz3 = '180';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('RCZTN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.018';
        $urun->oz2 = '18g';
        $urun->oz3 = '300';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('RCZTN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.018';
        $urun->oz2 = '25g';
        $urun->oz3 = '180';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('RCZTN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.018';
        $urun->oz2 = '25g';
        $urun->oz3 = '300';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('RCZTN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.018';
        $urun->oz2 = '30g';
        $urun->oz3 = '180';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('RCZTN'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.018';
        $urun->oz2 = '30g';
        $urun->oz3 = '300';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('PTCA'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = 'Core to tıp';
        $urun->oz3 = '0.8 GRF';
        $urun->oz4 = '180 CM';
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('PTCA'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = 'Core to tıp';
        $urun->oz3 = '0.8 GRF';
        $urun->oz4 = '300 CM';
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('PTCA'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = 'Core to tıp';
        $urun->oz3 = '0.9 GRF';
        $urun->oz4 = '180 CM';
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('PTCA'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = 'Core to tıp';
        $urun->oz3 = '0.9 GRF';
        $urun->oz4 = '300 CM';
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('PTCA'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = 'Core to tıp';
        $urun->oz3 = '1.0 GRF';
        $urun->oz4 = '180 CM';
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('PTCA'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = 'Core to tıp';
        $urun->oz3 = '1.0 GRF';
        $urun->oz4 = '300 CM';
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('PTCA'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = 'Core to tıp';
        $urun->oz3 = '1.2 GRF';
        $urun->oz4 = '180 CM';
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('PTCA'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = 'Core to tıp';
        $urun->oz3 = '1.2 GRF';
        $urun->oz4 = '300 CM';
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('PTCA'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = 'Core to tıp';
        $urun->oz3 = '1.5 GRF';
        $urun->oz4 = '180 CM';
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('PTCA'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = 'Core to tıp';
        $urun->oz3 = '1.5 GRF';
        $urun->oz4 = '300 CM';
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('PTCA'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = 'Core to tıp';
        $urun->oz3 = '1.7 GRF';
        $urun->oz4 = '180 CM';
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('PTCA'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = 'Core to tıp';
        $urun->oz3 = '1.7 GRF';
        $urun->oz4 = '300 CM';
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('PTCA'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = 'Core to tıp';
        $urun->oz3 = '2.7 GRF';
        $urun->oz4 = '180 CM';
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('PTCA'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = 'Core to tıp';
        $urun->oz3 = '2.7 GRF';
        $urun->oz4 = '300 CM';
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('PTCA'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = 'Core to tıp';
        $urun->oz3 = '4.1 GRF';
        $urun->oz4 = '180 CM';
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('PTCA'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '0.014';
        $urun->oz2 = 'Core to tıp';
        $urun->oz3 = '4.1 GRF';
        $urun->oz4 = '300 CM';
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('SPCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '4F';
        $urun->oz2 = '90 cm';
        $urun->oz3 = 'Single ro mark';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('SPSPCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '4F';
        $urun->oz2 = '135 cm';
        $urun->oz3 = 'Single ro mark';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('SPCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '5F';
        $urun->oz2 = '90 cm';
        $urun->oz3 = 'Single ro mark';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('SPCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '5F';
        $urun->oz2 = '135 cm';
        $urun->oz3 = 'Single ro mark';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('SPCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '6F';
        $urun->oz2 = '90 cm';
        $urun->oz3 = 'Single ro mark';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('SPCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '6F';
        $urun->oz2 = '135 cm';
        $urun->oz3 = 'Single ro mark';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('SPCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '7F';
        $urun->oz2 = '90 cm';
        $urun->oz3 = 'Single ro mark';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('SPCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '7F';
        $urun->oz2 = '135 cm';
        $urun->oz3 = 'Single ro mark';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('SPCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '4F';
        $urun->oz2 = '90 cm';
        $urun->oz3 = 'Double ro mark';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('SPCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '4F';
        $urun->oz2 = '135 cm';
        $urun->oz3 = 'Double ro mark';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('SPCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '5F';
        $urun->oz2 = '90 cm';
        $urun->oz3 = 'Double ro mark';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('SPCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '5F';
        $urun->oz2 = '135 cm';
        $urun->oz3 = 'Double ro mark';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('SPCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '6F';
        $urun->oz2 = '90 cm';
        $urun->oz3 = 'Double ro mark';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('SPCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '6F';
        $urun->oz2 = '135 cm';
        $urun->oz3 = 'Double ro mark';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('SPCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '7F';
        $urun->oz2 = '90 cm';
        $urun->oz3 = 'Double ro mark';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('SPCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '7F';
        $urun->oz2 = '135 cm';
        $urun->oz3 = 'Double ro mark';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('SPCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '6F';
        $urun->oz2 = '90 cm';
        $urun->oz3 = 'Re entry spcatheter';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('SPCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '6F';
        $urun->oz2 = '135 cm';
        $urun->oz3 = 'Re entry spcatheter';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('EXTCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '2F';
        $urun->oz2 = 'Order by custom';
        $urun->oz3 = 'Order by custom';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('EXTCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '3F';
        $urun->oz2 = 'Order by custom';
        $urun->oz3 = 'Order by custom';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('EXTCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '4F';
        $urun->oz2 = 'Order by custom';
        $urun->oz3 = 'Order by custom';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('EXTCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '5F';
        $urun->oz2 = 'Order by custom';
        $urun->oz3 = 'Order by custom';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('EXTCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '6F';
        $urun->oz2 = 'Order by custom';
        $urun->oz3 = 'Order by custom';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('EXTCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '7F';
        $urun->oz2 = 'Order by custom';
        $urun->oz3 = 'Order by custom';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('EXTCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '8F';
        $urun->oz2 = 'Order by custom';
        $urun->oz3 = 'Order by custom';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('EXTCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '9F';
        $urun->oz2 = 'Order by custom';
        $urun->oz3 = 'Order by custom';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('EXTCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '10F';
        $urun->oz2 = 'Order by custom';
        $urun->oz3 = 'Order by custom';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('EXTCATH'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '11F';
        $urun->oz2 = 'Order by custom';
        $urun->oz3 = 'Order by custom';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('LUAC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '4F';
        $urun->oz2 = 'female';
        $urun->oz3 = 'mavi';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('LUAC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '5F';
        $urun->oz2 = 'female';
        $urun->oz3 = 'siyah';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('LUAC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '6F';
        $urun->oz2 = 'female';
        $urun->oz3 = 'turkuaz';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('LUAC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '7F';
        $urun->oz2 = 'female';
        $urun->oz3 = 'turuncu';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('LUAC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '8F';
        $urun->oz2 = 'female';
        $urun->oz3 = 'gri';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('LUAC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '9F';
        $urun->oz2 = 'female';
        $urun->oz3 = 'clear';
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        $urun = new Urun();
        $random_sayı = ('CAAC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '3F';
        $urun->oz2 = 'beyaz';
        $urun->oz3 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('CAAC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '4F';
        $urun->oz2 = 'mavi';
        $urun->oz3 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('CAAC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '5F';
        $urun->oz2 = 'siyah';
        $urun->oz3 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('CAAC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '6F';
        $urun->oz2 = 'turkuaz';
        $urun->oz3 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('CAAC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '7F';
        $urun->oz2 = 'turuncu';
        $urun->oz3 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('CAAC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '8F';
        $urun->oz2 = 'gri';
        $urun->oz3 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();

        $urun = new Urun();
        $random_sayı = ('CAAC'.'-'. rand(1000,9999));
        $urun->slug = $random_sayı;
        $urun->urun_adi = $random_sayı;
        $urun->oz1 = '9F';
        $urun->oz2 = 'clear';
        $urun->oz3 = null;
        $urun->oz4 = null;
    $urun->aciklama = '';
        $urun->fiyat = 0.00;
        $urun->save();


        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
