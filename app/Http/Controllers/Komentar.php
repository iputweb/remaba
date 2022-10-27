<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Modelgaleri;
use App\Models\Modelanggota;
use Illuminate\Http\Request;
use App\Models\Modelkomentar;

class Komentar extends Controller
{
    public function index()
    {
   $komentar = [
            'komentarKomentar' => Modelkomentar::all()
        ];
        return View('beranda.beranda',$komentar);
    }
    public function add()
    {
        return View('dashboard.tambahanggota');
    }

    
    public function save(Request $r)
    {
        $komentar = $r->komentar;
        

        try {
            $komentar_remaba = new Modelkomentar;
            $komentar->komentar_remaba = $komentar;
       
        $komentar_remaba->save();

        //echo 'Data berhasil tersimpan';
        $r->session()->flash('msg', "Data anggota terbaru berhasil tersimpan");
        return redirect('/remaba');
        } catch (Throwable $e) {
            echo $e;  
        }

    }
    

}
