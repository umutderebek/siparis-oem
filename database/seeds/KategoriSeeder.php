<?php

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('urunkategori')->truncate();


        $id = DB::table('urunkategori')->insertGetId(['kategori_adi'=>'Percutaneous access','kategori_resmi'=> '','aciklama'=>null,'slug'=>'percutaneous-access']);
        DB::table('urunkategori')->insert(['kategori_adi'=>'Intraducers','kategori_resmi'=> null,'slug'=>'intraducers','aciklama'=>null,'üst_id'=>$id]);
        DB::table('urunkategori')->insert(['kategori_adi'=>'Dilators','slug'=>'dilators','kategori_resmi'=> null,'aciklama'=>null,'üst_id'=>$id]);
        DB::table('urunkategori')->insert(['kategori_adi'=>'Seldınger needles','kategori_resmi'=> null,'slug'=>'seldinger-needles','aciklama'=>null,'üst_id'=>$id]);


        $id = DB::table('urunkategori')->insertGetId(['kategori_adi'=>'Tubing','kategori_resmi'=> null,'aciklama'=>null,'slug'=>'tubing']);
        DB::table('urunkategori')->insert(['kategori_adi'=>'High-pressure-tubing','kategori_resmi'=> null,'aciklama'=>null,'slug'=>'high-pressure-tubing','üst_id'=>$id]);

        $id = DB::table('urunkategori')->insertGetId(['kategori_adi'=>'Molded parts & components','aciklama'=>null,'kategori_resmi'=> null,'slug'=>'Molded-parts-components']);
        DB::table('urunkategori')->insert(['kategori_adi'=>'Luer & connectors','kategori_resmi'=> null,'aciklama'=>null,'slug'=>'Luer-connectors','üst_id'=>$id]);
        DB::table('urunkategori')->insert(['kategori_adi'=>'Caps & covers','slug'=>'Caps-&-overs','aciklama'=>null,'kategori_resmi'=> null,'üst_id'=>$id]);
        DB::table('urunkategori')->insert(['kategori_adi'=>'Adapters & rotators','kategori_resmi'=> null,'aciklama'=>null,'slug'=>'Adapters-rotators','üst_id'=>$id]);


        $id = DB::table('urunkategori')->insertGetId(['kategori_adi'=>'Guıdewıres','kategori_resmi'=> null,'aciklama'=>null,'slug'=>'guıdewıres']);
        DB::table('urunkategori')->insert(['kategori_adi'=>'Curved','kategori_resmi'=> null,'aciklama'=>null,'slug'=>'curved','üst_id'=>$id]);
        DB::table('urunkategori')->insert(['kategori_adi'=>'Hydrophilic','slug'=>'Hydrophilic','kategori_resmi'=> null,'aciklama'=>null,'üst_id'=>$id]);
        DB::table('urunkategori')->insert(['kategori_adi'=>'Angled','kategori_resmi'=> null,'aciklama'=>null,'slug'=>'angled','üst_id'=>$id]);
        DB::table('urunkategori')->insert(['kategori_adi'=>'Recanalızatıon','kategori_resmi'=> null,'aciklama'=>null,'slug'=>'recanalizatıon','üst_id'=>$id]);
        DB::table('urunkategori')->insert(['kategori_adi'=>'Pta','kategori_resmi'=> null,'aciklama'=>null,'slug'=>'ptca','üst_id'=>$id]);

        $id = DB::table('urunkategori')->insertGetId(['kategori_adi'=>'Catheters','kategori_resmi'=> null,'aciklama'=>null,'slug'=>'catheters']);
        DB::table('urunkategori')->insert(['kategori_adi'=>'Otw balloon catheters','kategori_resmi'=> null,'aciklama'=>null,'slug'=>'otw-balloon-catheters','üst_id'=>$id]);
        DB::table('urunkategori')->insert(['kategori_adi'=>'Support catheters','slug'=>'support-catheters','aciklama'=>null,'kategori_resmi'=> null,'üst_id'=>$id]);
        DB::table('urunkategori')->insert(['kategori_adi'=>'Exturded tubıng','kategori_resmi'=> null,'aciklama'=>null,'slug'=>'exturded-tubing','üst_id'=>$id]);



        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
