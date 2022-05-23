<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $nama = "<strong>Abdul Salam</strong>";
        $alamat = "Jl. Jawa No. 7 Pontianak";
        $warnas = array("merah", "hijau", "biru", "kuning");
        return view('home', ['nama' => $nama, 'alamat' => $alamat, 'warnas' => $warnas]);
    }

    public function beranda()
    {
        return view('beranda');
    }

    public function data()
    {
        $data = "Abdul Salam";
        return view('home', ['nama' => $data]);
    }
}
