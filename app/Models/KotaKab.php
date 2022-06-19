<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KotaKab extends Model
{
    public function provinsi(){
        return $this->belongsTo('App\Models\Provinsi');
    }
}
