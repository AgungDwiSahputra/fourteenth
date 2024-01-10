<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index_management() {
        $data = [
            'user' => Auth::user(),
        ];

        return view('index_management', $data);
    }
    public function index_ops() {
        $data = [
            'user' => Auth::user(),
        ];

        return view('index_ops', $data);
    }
}
