<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pengunjung;

class pengunjungController extends Controller
{
    //
    function tambahpengunjung (Request $req){
        $nama   = $req->input('namapengunjung');
        $nis    = $req->input('nispengunjung');
        // $baca   = $req->input('baca');
        // $pinjam = $req->input('pinjam');
        // $kembali= $req->input('kembali');
        
        $pengunjung = new pengunjung();
        $pengunjung->nama = $nama;
        $pengunjung->nis = $nis;
        // $pengunjung->baca = $baca;
        // $pengunjung->pinjam = $pinjam;
        // $pengunjung->kembali = $kembali;

        $pengunjung->save();
        // $data = array('nama'=>$nama,'nis'=>$nis);
        // DB::table('pengunjung')->insert($data);

        return redirect('home');
    }
}
