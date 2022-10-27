<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Modelgaleri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
   $galeri = [
            'galeriGaleriController' => Modelgaleri::all()
        ];
        return View('beranda.beranda',$galeri);
    }
    public function add()
    {
        return View('dashboard.tambahgaleri');
    }

    
    public function save(Request $r)
    {
        $judul = $r->judul;
        $deskripsi = $r->deskripsi;
        $gambar = $r->gambar;

        try {
            $tb_galeri = new Modelgaleri;
            $tb_galeri->judul_galeri = $judul;
        $tb_galeri->deskripsi_galeri = $deskripsi;
            if($r->hasFile('gambar')){
                $r->file('gambar')->move('gambarremaba/', $r->file('gambar')->getClientOriginalName());
                $tb_galeri->gambar_galeri = $r->file('gambar')->getClientOriginalName();
            }
        $tb_galeri->save();

        //echo 'Data berhasil tersimpan';
        $r->session()->flash('msg', "Data galeri terbaru berhasil tersimpan");
        return redirect('/galeri/tambah');
        } catch (Throwable $e) {
            echo $e;  
        }

    }
    
     public function hapus($id_galeri)
     {
        Modelgaleri::find($id_galeri)->delete();
        return redirect()->back();
     }
}
