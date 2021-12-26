<?php

namespace App\Http\Controllers;

use App\Models\DataPelayananModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataPelayananController extends Controller
{
    public function __construct()
    {
        $this->DataPelayananModel = new DataPelayananModel();
    }

    public function index()
    {
        $crews = DB::table('data_pelayanan')->where('tanggal', 'like', '%Januari%')->distinct('fullname')->paginate(10);

        return view('data-pelayanan.data-pelayanan', ['crews' => $crews]);
    }

    public function search(Request $req)
    {
        $cari = $req->cari;

        $crews = DB::table('data_pelayanan')->where('tanggal', 'like', '%Januari%')->distinct('fullname')->where(function ($query) use ($cari) {
            $query->where('tanggal', 'like', '%' . $cari . '%')->orWhere('fullname', 'like', '%' . strtolower($cari) . '%');
        })->paginate(15);

        return view('data-pelayanan.data-pelayanan', ['crews' => $crews]);
    }
}
