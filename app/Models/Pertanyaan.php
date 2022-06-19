<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'm_pertanyaan';
    protected $primaryKey = 'id';
    protected $connection = 'mysql';
    protected $guarded =[];
    public function quiz(){
        return $this->belongsTo('App\Models\Quiz');
    }
}
