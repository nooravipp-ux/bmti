<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    public function topik(){
        return $this->belongsTo('App\Models\Topik');
    }
}
