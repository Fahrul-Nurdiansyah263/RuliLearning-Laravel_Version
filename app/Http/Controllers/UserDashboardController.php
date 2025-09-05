<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ategoriMateri;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
       return view('dashboard');
    }
}