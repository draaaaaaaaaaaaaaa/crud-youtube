<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SekolahController;

class SekolahController extends Controller
{
    public function index()
    {
        return view('sekolah.index');
    }

}
