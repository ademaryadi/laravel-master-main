<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KodeIzin;
use App\Models\Kota;
use DB;

class MasterController extends Controller
{
    public function getKodeIzin(Request $request, $jenisIzin) {
        $term = $request->input('term');
        if(empty($term)) {            
            return KodeIzin::where(['jenis_izin_id' => $jenisIzin])->get();
        }else{
            return KodeIzin::where([['jenis_izin_id', '=', $jenisIzin]])
                ->whereRaw('(lower(kode) like (?) or lower(nama_izin) like (?))',["%{$term}%", "%{$term}%"])
                ->get();
        }
        
    }

    public function getKodeIzinByKbli(Request $request, $kbli, $jenis_izin) {
        $term = $request->input('term');
        if(empty($term)) {            
            return KodeIzin::where(['kbli' => $kbli, 'jenis_izin_id'=>$jenis_izin])->get();
        }else{
            return KodeIzin::where([['kbli', '=', $kbli, 'jenis_izin_id'=>$jenis_izin]])
                ->whereRaw('(lower(kode) like (?) or lower(nama_izin) like (?))',["%{$term}%", "%{$term}%"])
                ->get();
        }
        
    }

    public function getKbli($jenis_izin) {
        return KodeIzin::select('kbli', 'judul_kbli')
            ->where(['jenis_izin_id' => $jenis_izin])
            ->groupBy('kbli','judul_kbli')->get();
        
    }

    public function getNamaIzinJaringanByKbli(Request $request, $kbli) {
        return KodeIzin::select('id', 'nama_izin')
            ->where(['jenis_izin_id' => 2, 'kbli' => $kbli])->get();
    }

    public function getNamaIzinJaringanTertutup(Request $request) {        
        return KodeIzin::select('id', 'nama_izin')
            ->where(['jenis_izin_id' => 2])
            ->whereRaw('lower(nama_izin) like (?)',["%tertutup%"])
            ->get();
    }

    public function getKotaProvinsi(Request $request) {
        $term = $request->input('term');
        // $term = '';
        $query =  Kota::select('kota.city_id', 'kota.city_name','provinsi.prov_name')
            ->leftJoin('provinsi', 'provinsi.prov_id', '=', 'kota.prov_id');
        $result;
        if(!empty($term)) {
            $result = $query->whereRaw('lower(kota.city_name) like (?)',["%{$term}%"])->take(20)->get();
        } else{
            $result = $query->take(20)->get();
        }

        $data = array();

        foreach ($result as $element) {
            $item = array();            
            $item['text'] = $element['city_name']." - ".$element['prov_name'];
            $item['id'] = $element['city_id'];
            // $item['children'] = [['id' => $element['city_id'], 'text' => $element['city_name']]];
            array_push($data, $item);
        }
        return $data;
    }
}
