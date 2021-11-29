<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecamatan;

class KecamatanController extends Controller
{
    public function getKecamatan($kotaid=0){
        $data_kecamatan['data'] = Kecamatan::orderby("dis_name","asc")
        			->select('dis_id','dis_name')
        			->where('city_id',$kotaid)
        			->get();
  
        return response()->json($data_kecamatan);
     
    }
}
