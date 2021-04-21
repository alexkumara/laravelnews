<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(){
        $id = "1";
        $jenisTransaksi = "tunai";
        return view('transaksi',['id'=> $id, 'jenisTransaksi'=> $jenisTransaksi]);
        }
}
