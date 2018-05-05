<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function index()
    {
        $datasiswa = \App\DataSiswa::all(); // mengambil semua data kendaraan
 
        return view('admin.datasiswa', compact('datasiswa')); // melempar data ke view
    }
}
