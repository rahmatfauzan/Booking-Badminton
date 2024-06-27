<?php

namespace App\Http\Controllers;

use App\Models\lapangan;
use Illuminate\Http\Request;

class LapanganController extends Controller
{
    //
    public function view()
    {
        $lapangans = lapangan::all();
        return view('user.lapangan', compact('lapangans'));
    }
    public function viewHero()
    {
        $lapangans = lapangan::limit(4)->get();
        return view('user.hero', compact('lapangans'));
    }

    

    

    
}
