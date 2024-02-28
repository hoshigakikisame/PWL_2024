<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        $nama = "Ferdi Riansyah Ramadhani Kusuma";
        $nim  = "2241720264";
        return "Nama saya adalah $nama dan NIM saya adalah $nim";
    }
}
