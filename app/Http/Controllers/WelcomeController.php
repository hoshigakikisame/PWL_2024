<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }

    public function about() {
        $nama = "Ferdi Riansyah Ramadhani Kusuma";
        $nim  = "2241720264";
        return "Nama saya adalah $nama dan NIM saya adalah $nim";
    }

    public function articles($id) {
        return "Halaman Artikel dengan ID {$id}";
    }
}
