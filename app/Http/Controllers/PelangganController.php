<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(){
        $nama = "Joultop Sidabuke";
        $email = "joultop66@gmail.com";
        return view('pelanggan',['nama'=> $nama, 'email'=> $email]);
        }
}