<?php

namespace App\Http\Controllers;

use App\Models\train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('welcome', compact('trains'));
    }
}
