<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hello() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Ericha Rizki Wardani - 2341720202';
    }

    public function articles($id) {
        return "Halaman Artikel dengan ID : {$id}";
    }
}
