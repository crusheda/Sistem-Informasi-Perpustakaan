<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userperpus;

class UserController extends Controller
{
    //
    public function index()
    {
        // $data = JenisBarang::orderBy('id', 'ASC')->get();
        // $data = JenisBarang::find(4);
        $user = userperpus::all();
        return view('caribuku',['user' => $user]);
    }
}

// ->with('jenisbarangs', $data)