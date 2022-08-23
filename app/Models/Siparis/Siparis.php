<?php

namespace App\Models\Siparis;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siparis extends Model
{
    Use SoftDeletes;

    protected $table ="siparis";


    public function sepet()
    {
        return $this->belongsTo('App\Models\Sepet\Sepet');
    }
}
