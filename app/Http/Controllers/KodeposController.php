<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kodepos;

class KodeposController extends Controller
{
    public function getKodepos($desaid=0){
        $data_kodepos['data'] = Kodepos::orderby("postal_code","asc")
        			->select('postal_id','postal_code')
        			->where('subdis_id',$desaid)
        			->get();
  
        return response()->json($data_kodepos);
     
    }
}
