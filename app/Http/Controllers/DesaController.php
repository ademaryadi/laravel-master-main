<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desa;

class DesaController extends Controller
{
    public function getDesa($kecamatanid=0){
        $data_desa['data'] = Desa::orderby("subdis_name","asc")
        			->select('subdis_id','subdis_name')
        			->where('dis_id',$kecamatanid)
        			->get();
  
        return response()->json($data_desa);
     
    }
}
