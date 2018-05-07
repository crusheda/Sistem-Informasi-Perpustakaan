<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengunjung;

class UserController extends Controller
{
    public function stats()
    {
        $totalstats = pengunjung::all()->count();
        return view('admin.homeadmin',['totalstats' => $totalstats]);
    }
}

// ->with('jenisbarangs', $data)