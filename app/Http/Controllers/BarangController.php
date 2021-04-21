<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $nama = "Baju Koko";
        $kategoriBarang = ["Baju","Atasan Pria"];
        return view('barang',['nama'=> $nama, 'kategoriBarang'=> $kategoriBarang]);
        }
}
