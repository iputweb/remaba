<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelanggota extends Model
{
    use HasFactory;

    protected $table = 'tb_anggota';
    protected $primaryKey = 'id_anggota' ;
    public $timestamps = false;
}
