<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Nim: 2241720156 <br> Nama: Muhammad Ainur Riziq';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id ' .$id;
    }
}
