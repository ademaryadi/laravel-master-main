<?php

namespace App\Http\Controllers;

use DB;
use App\Models\KodeIzin;
use App\Models\JenisIzin;
use App\Models\Perizinan;
use Illuminate\Http\Request;
use App\Models\NomorPerizinan;

class PerizinanController extends Controller
{
    
    public function daftar(Request $request) {
        $perizinan = new Perizinan;

        $perizinan->tanggal_kib = $request->tanggal_pengajuan;
        $perizinan->kib_id = $request->kode_izin_id;
        $perizinan->reference_id = $request->referensi_nomor_izin;
        $perizinan->nomor_izin = $this->nomor_izin();
        $perizinan->pemohon_id = auth()->user()->id;
        $perizinan->save();
    }

    public function dalamProses(Request $request) {
        $offset = $request->input('start');
        $limit = $request->input('length');
        $query = Perizinan::select('perizinan.id', 'jenis_izin.deskripsi AS jenis_izin', 
                    'kode_izin.kode AS kode_izin', 'perizinan.tanggal_kib', 'kode_izin.kbli', 
                    'kode_izin.judul_kbli AS jenis_penyelenggaraan', 'perizinan.status', 'perizinan.sla','perizinan.nomor_izin',
                    'perizinan.penomoran')
                ->leftJoin('kode_izin', 'kode_izin.id', '=', 'perizinan.kib_id')
                ->leftJoin('jenis_izin', 'jenis_izin.id', '=', 'kode_izin.jenis_izin_id')
                ->where('perizinan.pemohon_id', auth()->user()->id);                
                //where status <> 'SKLO'
        $total_records = $query->count();
        $per_page = $query->orderBy('updated_at', 'DESC')->skip($offset)->take($limit)->get();        
        return [
            'data' => $per_page,
            'recordsTotal' => $total_records,
            'recordsFiltered' => $total_records
        ];
    }

    public function getPerizinan(Request $request){
        $query = Perizinan::select('perizinan.id', 'jenis_izin.deskripsi AS jenis_izin', 
                    'kode_izin.kode AS kode_izin', 'perizinan.tanggal_kib', 'kode_izin.kbli', 
                    'kode_izin.judul_kbli AS jenis_penyelenggaraan', 'perizinan.status', 'perizinan.sla','perizinan.nomor_izin',
                    'kode_izin.media_transmisi','perusahaan.nib','perusahaan.nama as nama_perusahaan')
                ->leftJoin('kode_izin', 'kode_izin.id', '=', 'perizinan.kib_id')
                ->leftJoin('jenis_izin', 'jenis_izin.id', '=', 'kode_izin.jenis_izin_id')
                ->leftJoin('users_accounts', 'perizinan.pemohon_id', '=', 'users_accounts.id')
                ->leftJoin('perusahaan', 'users_accounts.id', '=', 'perusahaan.users_accounts_id')
                ->where('perizinan.pemohon_id', auth()->user()->id)
                ->where('perizinan.id', $request->id)->get()->first();
        return json_encode($query);
    }

    public function nomor_izin(){
        date_default_timezone_set('Asia/Jakarta');
        $NomorPerizinan = NomorPerizinan::select('*')->get()->first();
        $tanggal_konversi = array(
            "1" => "A",
            "2" => "B",
            "3" => "C",
            "4" => "D",
            "5" => "E",
            "6" => "F",
            "7" => "G",
            "8" => "H",
            "9" => "I",
            "0" => "X");
        
        $tanggal_asli = date('d');
        $tanggal = strtr($tanggal_asli,$tanggal_konversi);

        if($NomorPerizinan->tahun==date('Y') ){
           if($NomorPerizinan->bulan==date('m')){
               if($NomorPerizinan->tanggal==$tanggal){
                    $nomorbaru=$NomorPerizinan->nomor + 1;
                    $nomorbaru_fill = sprintf("%03d", $nomorbaru);

                    // echo $NomorPerizinan->nomor;
                    $update_nomor = [
                        'nomor' => $nomorbaru
                    ];
                    NomorPerizinan::where('id', $NomorPerizinan->id)
                        ->update($update_nomor);
                    
                    return $nomor_izin=$tanggal.date('m').date('Y').$nomorbaru_fill;
               }else{
                    $update_tgl = [
                        'tanggal' => $tanggal,
                        'nomor' => 1
                    ];
                    NomorPerizinan::where('id', $NomorPerizinan->id)
                        ->update($update_tgl);
                    return $nomor_izin=$tanggal.date('m').date('Y')."001";
               }
           }else{
                $update_bulan = [
                    'bulan' => date('m'),
                    'nomor' => 1
                ];
                NomorPerizinan::where('id', $NomorPerizinan->id)
                    ->update($update_bulan);
                return $nomor_izin=$tanggal.date('m').date('Y')."001";
           }
        }else{
            $update_tahun = [
                'tahun' => date('Y'),
                'nomor' => 1
            ];
            NomorPerizinan::where('id', $NomorPerizinan->id)
                ->update($update_tahun);
            return $nomor_izin=$tanggal.date('m').date('Y')."001";
        }
    }

    public function getPerizinanAktifByKibId(Request $request, $kib_id) {
        return Perizinan::select('id', 'nomor_izin')
            ->where(['kib_id' => $kib_id]) 
            //todo where userId = $userId &status = active & tanggal_izin >= 5 thn
            ->get();
    }    
}
