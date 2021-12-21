<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FormPelayananModel extends Model
{
    // use HasFactory;
    public function saveData($data){
        return DB::table('data_pelayanan')->insert($data);
    }
}
