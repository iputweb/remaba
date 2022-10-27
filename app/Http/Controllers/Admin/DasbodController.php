<?php

namespace App\Http\Controllers\Admin;

use App\Models\Modelgaleri;
use App\Models\Modelanggota;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DasbodController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
 $data = [
            'galeri'=> Modelgaleri::all(),
            'anggota'=> Modelanggota::all()
        ];
        return View('dashboard.dasbod', $data);        
    }
}