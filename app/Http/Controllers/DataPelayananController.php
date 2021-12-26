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
        $keyword = $req->cari;

        $crews = DB::table('data_pelayanan')->where('tanggal', 'like', '%Januari%')->distinct('fullname')->where(function ($query) use ($keyword) {
            $query->where('tanggal', 'like', '%' . $keyword . '%')->orWhere('fullname', 'like', '%' . strtolower($keyword) . '%');
        })->paginate(15);

        return view('data-pelayanan.data-pelayanan', ['crews' => $crews]);
    }
}
