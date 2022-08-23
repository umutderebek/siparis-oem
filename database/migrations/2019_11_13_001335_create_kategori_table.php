<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urunkategori', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('üst_id')->nullable();
            $table->string('kategori_adi',30);
            $table->string('kategori_resmi')->nullable();
            $table->string('aciklama')->nullable();

            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->string('slug',30);
            $table->timestamps();
            $table->softDeletes()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urunkategori');
    }
}
