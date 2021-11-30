<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Pemohon;
use App\Models\KodeIzin;
use App\Models\JenisIzin;
use App\Models\Perizinan;
use App\Models\Perusahaan;
use Illuminate\Http\Request;


class PenomoranController extends Controller
{
    public function index($perizinan_id) {
        $perusahaan = Perusahaan::select('*')->where(['users_accounts_id'=> auth()->user()->id])->first();
        $pemohon = Pemohon::select('*')->where(['users_accounts_id'=> auth()->user()->id])->first();
        $perizinan = Perizinan::select(
            'perizinan.id', 
            'jenis_izin.deskripsi AS jenis_izin', 
            'kode_izin.kode AS kode_izin', 
            'perizinan.tanggal_kib', 
            'kode_izin.kbli', 
            'kode_izin.judul_kbli AS jenis_penyelenggaraan', 
            'kode_izin.media_transmisi',
            'perizinan.badan_hukum',
            'perizinan.status')
        ->leftJoin('kode_izin', 'kode_izin.id', '=', 'perizinan.kib_id')
        ->leftJoin('jenis_izin', 'jenis_izin.id', '=', 'kode_izin.jenis_izin_id')
        ->where(['perizinan.id' => $perizinan_id])->first();
        // dd($perusahaan);

        $availno = DB::select("CALL p_cekavail_idperizinan(".$perizinan_id.")");

        $data = [
            'perizinan' => $perizinan,
            'perusahaan' => $perusahaan,
            'pemohon' => $pemohon,
            'availno' => $availno
        ];
        return view('penomoran/form-penomoran', $data);
    }

    public function admpagedetailkodeakses($id){
        
        $apprequestno = DB::table('vw_listperizinan')->where('id',$id)->first();
        $logperizinan = DB::table('vw_log_perizinan')->where('id_log',$id)->get();
        
        return view('adminpage/detailpengajuankodeakses', compact('apprequestno','logperizinan'));
    }
    
}
