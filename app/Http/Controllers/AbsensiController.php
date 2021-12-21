<?php

namespace App\Http\Controllers;

use App\Models\AbsensiModel;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function __construct()
    {
        $this->AbsensiModel = new AbsensiModel();
    }
    
    public function index(){
        
        return view('absensi.absensi');
    }
}
