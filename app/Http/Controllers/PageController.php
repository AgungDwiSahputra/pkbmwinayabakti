<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $data = [
            'title' => 'PKBM Winaya Bakti',
            ''
        ];
        return view('index', $data);
    }
}
