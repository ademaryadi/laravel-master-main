<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Provinsi;
use App\Models\Kota;

class ProvinsiController extends Controller
{
    public function getKota($provinsiid=0){
        $data_kota['data'] = Kota::orderby("city_name","asc")
        			->select('city_id','city_name')
        			->where('prov_id',$provinsiid)
        			->get();
  
        return response()->json($data_kota);
     
    }
}
