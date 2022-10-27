<?php

namespace App\Http\Controllers;

use App\Models\Modelgaleri;
use App\Models\Modelanggota;
use Illuminate\Http\Request;

class RemabaController extends Controller
{
    public function index()
    {
        $data = [
            'galeri'=> Modelgaleri::all(),
            'anggota'=> Modelanggota::all()
        ];
        return View('beranda.beranda', $data);
    }
}