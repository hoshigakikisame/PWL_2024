<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function articles($id) {
        return "Halaman Artikel dengan ID {$id}";
    }

    public function about() {
        $nama = "Ferdi Riansyah Ramadhani Kusuma";
        $nim  = "2241720264";
        return "Nama : " . $nama . "<br>" . "NIM : " . $nim;
    }
}
