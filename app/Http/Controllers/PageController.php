<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $data = [
            'title' => 'PKBM Winaya Bakti',
        ];
        return view('index', $data);
    }

    public function register() {

        $data = [
            'title' => 'Pendaftaran | PKBM Winaya Bakti',
        ];
        return view('pendaftaran', $data);
    }
}
