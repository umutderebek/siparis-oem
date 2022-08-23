<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urun', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug',160);
            $table->string('urun_adi',150);
            $table->string('oz1')->nullable();
            $table->string('oz2')->nullable();
            $table->string('oz3')->nullable();
            $table->string('oz4')->nullable();
            $table->text('aciklama')->nullable();
            $table->string('urun_resmi')->nullable();
            $table->boolean('goster_gunun_firsati')->default(0);
            $table->boolean('goster_one_cikan')->default(0);
            $table->boolean('goster_cok_satan')->default(0);
            $table->boolean('goster_indirimli')->default(0);
            $table->decimal('fiyat',6,3)->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();
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
        Schema::dropIfExists('urun');
    }
}
