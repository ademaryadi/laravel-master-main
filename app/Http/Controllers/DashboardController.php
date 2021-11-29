<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Pemohon;
use App\Models\KodeIzin;
use App\Models\JenisIzin;
use App\Models\Perusahaan;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index() {
        $perusahaan = Perusahaan::select('*')->where(['users_accounts_id'=> auth()->user()->id])->first();
        $pemohon = Pemohon::select('*')->where(['users_accounts_id'=> auth()->user()->id])->first();
        // dd($perusahaan);
        $data = [
            'jenisPerizinan' => JenisIzin::all(),
            'KodeIzin' => kodeIzin::all(),
            'perusahaan' => $perusahaan,
            'pemohon' => $pemohon,
            'tanggalPengajuan' => date("d-m-Y")
        ];
        return view('dashboard', $data);
    }

    public function kodeIzin($jenisIzin) {
        return KodeIzin::find(["jenis_izin_id" => $jenisIzin]);
    }
    
}
