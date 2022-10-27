<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelgaleri extends Model
{
    use HasFactory;

    protected $table = 'tb_galeri';
    protected $primaryKey = 'id_galeri' ;
    public $timestamps = false;
}
