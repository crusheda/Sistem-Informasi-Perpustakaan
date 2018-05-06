<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pengunjung;

class indexController extends Controller
{
    public function home(){
        $jmlpengunjung = pengunjung::all()->count();
        // echo($jmlpengunjung);
        return view('index',['jumlahpengunjung' => $jmlpengunjung]);
    }
}
