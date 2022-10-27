<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelkomentar extends Model
{
    use HasFactory;

    protected $table = 'komentar_remaba';
    protected $primaryKey = 'id' ;
    public $timestamps = false;
}
