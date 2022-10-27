<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Modelgaleri;
use App\Models\Modelanggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
   $anggota = [
            'anggotaAnggotaController' => Modelanggota::all()
        ];
        return View('beranda.beranda',$anggota);
    }
    public function add()
    {
        return View('dashboard.tambahanggota');
    }

    
    public function save(Request $r)
    {
        $judul = $r->judul;
        $no = $r->no;
        $gambar = $r->gambar;
         $jabatan = $r->jabatan;

        try {
            $tb_anggota = new Modelanggota;
            $tb_anggota->nama_anggota = $judul;
        $tb_anggota->no_anggota = $no;
         $tb_anggota->jabatan_anggota = $jabatan;
            if($r->hasFile('gambar')){
                $r->file('gambar')->move('gambarremaba/', $r->file('gambar')->getClientOriginalName());
                $tb_anggota->gambar_anggota = $r->file('gambar')->getClientOriginalName();
            }
        $tb_anggota->save();

        //echo 'Data berhasil tersimpan';
        $r->session()->flash('msg', "Data anggota terbaru berhasil tersimpan");
        return redirect('/anggota/tambah');
        } catch (Throwable $e) {
            echo $e;  
        }

    }
    
     public function hapus($id_anggota)
     {
        Modelanggota::find($id_anggota)->delete();
        return redirect()->back();
     }
}
