<?php

namespace App\Http\Controllers;

use App\Models\IsiMateri;
use Illuminate\Http\Request;
use App\Models\KategoriMateri;

class FrontEndController extends Controller
{
    public function index()
    {
        $materis = KategoriMateri::all(); 
        return view('index', compact('materis'));
    }
}
