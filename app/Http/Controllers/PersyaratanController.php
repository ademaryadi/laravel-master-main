<?php

namespace App\Http\Controllers;

use App\Models\Pemohon;
use App\Models\KodeIzin;
use App\Models\JenisIzin;
use App\Models\Perizinan;
use App\Models\Perusahaan;
use App\Models\Persyaratan;
use Illuminate\Http\Request;
use App\Models\PersyaratanTelsusFo;
use App\Models\PersyaratanKpltPjbTrt;
use App\Models\PersyaratanTelsusSatelit;
use App\Models\PersyaratanDataAlatTeknis;
use App\Models\PersyaratanKpltJartupVsat;
use App\Models\PersyaratanKpltPjbSatelit;
use App\Models\PersyaratanAchievementMttr;
use App\Models\PersyaratanTelsusRadioData;
use App\Models\PersyaratanTelsusRadioKonv;
use App\Models\PersyaratanKpltJartupFoSkkl;
use App\Models\PersyaratanKpltJartupMicrowave;
use App\Models\PersyaratanNetworkavailability;
use App\Models\PersyaratanTelsusRadioTrunking;
use App\Models\PersyaratanKpltJartupFoTerestrial;

class PersyaratanController extends Controller
{
    public function persyaratan($perizinan_id) {        
        $perizinan = Perizinan::select(
                            'perizinan.id', 
                            'jenis_izin.deskripsi AS jenis_izin', 
                            'kode_izin.kode AS kode_izin', 
                            'perizinan.tanggal_kib', 
                            'kode_izin.kbli', 
                            'kode_izin.judul_kbli AS jenis_penyelenggaraan', 
                            'kode_izin.media_transmisi',
                            'perizinan.badan_hukum',
                            'perizinan.status',
                            'perizinan.nomor_izin')
            ->leftJoin('kode_izin', 'kode_izin.id', '=', 'perizinan.kib_id')
            ->leftJoin('jenis_izin', 'jenis_izin.id', '=', 'kode_izin.jenis_izin_id')
            ->where(['perizinan.id' => $perizinan_id])->first();
            $perusahaan = Perusahaan::select('*')->where(['users_accounts_id'=> auth()->user()->id])->first();
            $pemohon = Pemohon::select('*')->where(['users_accounts_id'=> auth()->user()->id])->first();
            $data = [
                'perizinan' => $perizinan,
                'perusahaan' => $perusahaan,
                'pemohon' => $pemohon,
                'tanggalPengajuan' => date("d-m-Y")
            ];
        return view('persyaratan', $data);
    }

    public function getPersyaratanKpltJartupTerestrial($perizinan_id) {
        return PersyaratanKpltJartupFoTerestrial::where(["perizinan_id" => $perizinan_id])->get();
    }

    public function prosesKpltJartupFoTerestrial(Request $request) {
        $all=count($request->periode);
        // echo $request->perizinan_id;
        for($i=0;$i<$all;$i++){
            $syarat = new PersyaratanKpltJartupFoTerestrial;
            $syarat->perizinan_id = $request->perizinan_id;
            $syarat->periode = $request->periode[$i];
            $syarat->periode = $request->periode[$i];
            $syarat->jumlah_unit = $request->jumlahNode[$i];
            // $syarat->kota_id = $request->cakupanWilayah[$i];
            $syarat->jumlah_kabel_fo = $request->jumlahKabel[$i];
            $syarat->kapasitas_bw = $request->kapasitasBw[$i];
            $syarat->panjang_rute_fo = $request->panjangRuteKabel[$i];
            $syarat->notes = $request->notes[$i];
            $syarat->save();
        }   
    }

    public function prosesKpltJartupFoSkkl(Request $request) {
        $all=count($request->periode);
        // echo $request->perizinan_id;
        for($i=0;$i<$all;$i++){
            $syarat = new PersyaratanKpltJartupFoSkkl;
            $syarat->perizinan_id = $request->perizinan_id;
            $syarat->periode = $request->periode[$i];
            $syarat->jumlah_cable_landing_station = $request->jumlah_unit[$i];
            $syarat->lokasi_cable_landing_station = $request->lokasi_landing_station[$i];
            $syarat->rute_jaringan_kabel_laut = $request->rute[$i];
            $syarat->jumlah_kabel_fo = $request->jumlah_kabel[$i];
            $syarat->kapasitas_bw = $request->kapasitas_bw[$i];
            $syarat->save();
        }   
    }

    public function prosesDataAlatTeknis(Request $request) {
        // echo $request;
        $all=count($request->lokasi);
        for($i=0;$i<$all;$i++){
            $file = $request->file('foto_sertifikat')[$i];
            $tujuan_upload = 'documents';
            $fotosertifikat="sertifikat-".time()."-".$file->getClientOriginalName();
            $file->move($tujuan_upload,$fotosertifikat);

            $file = $request->file('foto_perangkat')[$i];
            $fotoperangkat="perangkat-".time()."-".$file->getClientOriginalName();
            $file->move($tujuan_upload,$fotoperangkat);

            $file = $request->file('foto_sn')[$i];
            $fotosn="serialnumber-".time()."-".$file->getClientOriginalName();
            $file->move($tujuan_upload,$fotosn);

            $file = $request->file('foto_bukti_kepemilikan')[$i];
            $fotobuktikepemilikan="buktikepemilikan-".time()."-".$file->getClientOriginalName();
            $file->move($tujuan_upload,$fotobuktikepemilikan);

            $syarat = new PersyaratanDataAlatTeknis;
            $syarat->perizinan_id = $request->perizinan_id;
            $syarat->lokasi = $request->lokasi[$i];
            $syarat->jenis = $request->jenis[$i];
            $syarat->merk = $request->merk[$i];
            $syarat->buatan = $request->buatan[$i];
            $syarat->type = $request->type[$i];
            $syarat->serial_number = $request->serial_number[$i];
            $syarat->nomor_sertifikat = $request->nomor_sertifikat[$i];
            $syarat->foto_sertifikat = $fotosertifikat;
            $syarat->foto_perangkat = $fotoperangkat;
            $syarat->foto_serial_number = $fotosn;
            $syarat->bukti_kepemilikan = $fotobuktikepemilikan;
            $syarat->save();
        }
        
    }

    public function prosesKomitmenKinerja(Request $request) {
        $syarat1 = new PersyaratanAchievementMttr;
        $syarat1->perizinan_id = $request->perizinan_id;
        $syarat1->tahun_1 = $request->network_availability1;
        $syarat1->tahun_2 = $request->network_availability2;
        $syarat1->tahun_3 = $request->network_availability3;
        $syarat1->tahun_4 = $request->network_availability4;
        $syarat1->tahun_5 = $request->network_availability5;
        $syarat1->save();

        $syarat2 = new PersyaratanNetworkavailability;
        $syarat2->perizinan_id = $request->perizinan_id;
        $syarat2->tahun_1 = $request->jam1;
        $syarat2->tahun_2 = $request->jam2;
        $syarat2->tahun_3 = $request->jam3;
        $syarat2->tahun_4 = $request->jam4;
        $syarat2->tahun_5 = $request->jam5;
        $syarat2->save();

    }

    public function prosesKpltJartupMicrowave(Request $request) {
        $all=count($request->periode);
        // echo $request->perizinan_id;
        for($i=0;$i<$all;$i++){
            $syarat = new PersyaratanKpltJartupMicrowave;
            $syarat->perizinan_id = $request->perizinan_id;
            $syarat->periode = $request->periode[$i];
            $syarat->min_jumlah_hop = $request->jumlah_hop[$i];
            $syarat->min_kapasitas_bw = $request->kapasitas_bw[$i];
            $syarat->save();
        }   
    }

    public function prosesKpltJartupVsat(Request $request) {
        $all=count($request->periode);
        // echo $request->perizinan_id;
        for($i=0;$i<$all;$i++){
            $syarat = new PersyaratanKpltJartupVsat;
            $syarat->perizinan_id = $request->perizinan_id;
            $syarat->periode = $request->periode[$i];
            $syarat->kapasitas_transponder = $request->kapasitas_bw[$i];
            $syarat->save();
        }   
    }

    public function prosesKpltPjbTrt(Request $request) {
        $all=count($request->periode);
        // echo $request->perizinan_id;
        for($i=0;$i<$all;$i++){
            $syarat = new PersyaratanKpltPjbTrt;
            $syarat->perizinan_id = $request->perizinan_id;
            $syarat->periode = $request->periode[$i];
            $syarat->jumlah_kanal = $request->jumlah_kanal[$i];
            $syarat->kapasitas_pelanggan = $request->kapasitas_pelanggan[$i];
            $syarat->save();
        }   
    }

    public function prosesKpltPjbSatelit(Request $request) {
        $all=count($request->periode);
        // echo $request->perizinan_id;
        for($i=0;$i<$all;$i++){
            $syarat = new PersyaratanKpltPjbSatelit;
            $syarat->perizinan_id = $request->perizinan_id;
            $syarat->periode = $request->periode[$i];
            $syarat->kapasitas_transponder = $request->kapasitas_transponder[$i];
            $syarat->kapasitas_sistem = $request->kapasitas_sistem[$i];
            $syarat->save();
        }   
    }

    public function prosesTelsusFo(Request $request) {
        $all=count($request->tahun);
        // echo $request->perizinan_id;
        for($i=0;$i<$all;$i++){
            $syarat = new PersyaratanTelsusFo;
            $syarat->perizinan_id = $request->perizinan_id;
            $syarat->tahun = $request->tahun[$i];
            $syarat->rute = $request->rute[$i];
            $syarat->panjang_rute = $request->panjang_rute[$i];
            $syarat->kapasitas = $request->kapasitas[$i];
            $syarat->cakupan_wilayah = $request->cakupan_wilayah[$i];
            $syarat->save();
        }   
    }

    public function prosesTelsusRadioKonv(Request $request) {
        $all=count($request->tahun);
        // echo $request->perizinan_id;
        for($i=0;$i<$all;$i++){
            $syarat = new PersyaratanTelsusRadioKonv;
            $syarat->perizinan_id = $request->perizinan_id;
            $syarat->tahun = $request->tahun[$i];
            $syarat->lokasi_perangkat = $request->lokasi_perangkat[$i];
            $syarat->jenis_perangkat = $request->jenis_perangkat[$i];
            $syarat->jumlah_perangkat = $request->jumlah_perangkat[$i];
            $syarat->cakupan_wilayah = $request->cakupan_wilayah[$i];

            if($syarat->save()){
                echo "Oke";
            }
        }   
    }

    public function prosesTelsusRadioTrunking(Request $request) {
        $all=count($request->tahun);
        // echo $request->perizinan_id;
        for($i=0;$i<$all;$i++){
            $syarat = new PersyaratanTelsusRadioTrunking;
            $syarat->perizinan_id = $request->perizinan_id;
            $syarat->tahun = $request->tahun[$i];
            $syarat->lokasi_perangkat = $request->lokasi_perangkat[$i];
            $syarat->jenis_perangkat = $request->jenis_perangkat[$i];
            $syarat->jumlah_perangkat = $request->jumlah_perangkat[$i];
            $syarat->cakupan_wilayah = $request->cakupan_wilayah[$i];

            if($syarat->save()){
                echo "Oke";
            }
        }   
    }

    public function prosesTelsusRadioData(Request $request) {
        $all=count($request->tahun);
        // echo $request->perizinan_id;
        for($i=0;$i<$all;$i++){
            $syarat = new PersyaratanTelsusRadioData;
            $syarat->perizinan_id = $request->perizinan_id;
            $syarat->tahun = $request->tahun[$i];
            $syarat->lokasi_perangkat = $request->lokasi_perangkat[$i];
            $syarat->jenis_perangkat = $request->jenis_perangkat[$i];
            $syarat->jumlah_perangkat = $request->jumlah_perangkat[$i];
            $syarat->cakupan_wilayah = $request->cakupan_wilayah[$i];

            if($syarat->save()){
                echo "Oke";
            }
        }   
    }

    public function prosesTelsusSatelit(Request $request) {
        $all=count($request->jumlah_transponder);
        // echo $request->perizinan_id;
        for($i=0;$i<$all;$i++){
            $syarat = new PersyaratanTelsusSatelit;
            $syarat->perizinan_id = $request->perizinan_id;
            $syarat->jumlah_transponder = $request->jumlah_transponder[$i];
            $syarat->kapasitas_transponder = $request->kapasitas_transponder[$i];
            $syarat->jumlah_hub = $request->jumlah_hub[$i];
            $syarat->lokasi_hub = $request->lokasi_hub[$i];
            $syarat->cakupan_wilayah = $request->cakupan_wilayah[$i];
            $syarat->save();
        }   
    }

    public function prosesPersyaratan(Request $request) {
        $tujuan_upload = 'documents';
    
        $file1 = $request->file('konfigurasi_sistem');
        $konfigurasi_sistem="konfigurasi_sistem-".time()."-".$file1->getClientOriginalName();
        $file1->move($tujuan_upload,$konfigurasi_sistem);
        // echo $konfigurasi_sistem;
        
        $file2 = $request->file('diagram_rute');
        $diagram_rute="diagram_rute-".time()."-".$file2->getClientOriginalName();
        $file2->move($tujuan_upload,$diagram_rute);

        $file3 = $request->file('pks');
        $pks="pks-".time()."-".$file3->getClientOriginalName();
        $file3->move($tujuan_upload,$pks);

        $file4 = $request->file('kontak_informasi');
        $kontak_informasi="kontak_informasi-".time()."-".$file4->getClientOriginalName();
        $file4->move($tujuan_upload,$kontak_informasi);

        $file5 = $request->file('monitoring_jaringan');
        $monitoring_jaringan="monitoring_jaringan-".time()."-".$file5->getClientOriginalName();
        $file5->move($tujuan_upload,$monitoring_jaringan);

        $file6 = $request->file('penanganan_gangguan');
        $penanganan_gangguan="penanganan_gangguan-".time()."-".$file6->getClientOriginalName();
        $file6->move($tujuan_upload,$penanganan_gangguan);

        $file7 = $request->file('billing_penagihan');
        $billing_penagihan="billing_penagihan-".time()."-".$file7->getClientOriginalName();
        $file7->move($tujuan_upload,$billing_penagihan);

        $file8 = $request->file('aktivasi_deaktivasi');
        $aktivasi_deaktivasi="aktivasi_deaktivasi-".time()."-".$file8->getClientOriginalName();
        $file8->move($tujuan_upload,$aktivasi_deaktivasi);

        $file9 = $request->file('pelayanan_pengguna');
        $pelayanan_pengguna="pelayanan_pengguna-".time()."-".$file9->getClientOriginalName();
        $file9->move($tujuan_upload,$pelayanan_pengguna);

        $file10 = $request->file('kesanggupan');
        $kesanggupan="kesanggupan-".time()."-".$file10->getClientOriginalName();
        $file10->move($tujuan_upload,$kesanggupan);

        $file11 = $request->file('data_valid');
        $data_valid="data_valid-".time()."-".$file11->getClientOriginalName();
        $file11->move($tujuan_upload,$data_valid);

        $file12 = $request->file('kewajiban_pnbp');
        $kewajiban_pnbp="kewajiban_pnbp-".time()."-".$file12->getClientOriginalName();
        $file12->move($tujuan_upload,$kewajiban_pnbp);

        $file13 = $request->file('status_pajak');
        $status_pajak="status_pajak-".time()."-".$file13->getClientOriginalName();
        $file13->move($tujuan_upload,$status_pajak);

        $file14 = $request->file('daftar_hitam');
        $daftar_hitam="daftar_hitam-".time()."-".$file14->getClientOriginalName();
        $file14->move($tujuan_upload,$daftar_hitam);

        $syarat = new Persyaratan;
        $syarat->perizinan_id = $request->perizinan_id;
        $syarat->dokumen_konfigurasi = $konfigurasi_sistem;
        $syarat->dokumen_diagram = $diagram_rute;
        $syarat->dokumen_pks = $pks;
        $syarat->dokumen_kontak = $kontak_informasi;
        $syarat->sop_monitoring = $monitoring_jaringan;
        $syarat->sop_gangguan = $penanganan_gangguan;
        $syarat->sop_biiling = $billing_penagihan;
        $syarat->sop_aktivasi = $aktivasi_deaktivasi;
        $syarat->sop_pelayanan = $pelayanan_pengguna;
        $syarat->pernyataan_kesanggupan = $kesanggupan;
        $syarat->pernyataan_data = $data_valid;
        $syarat->pernyataan_pnbp = $kewajiban_pnbp;
        $syarat->pernyataan_wajibpajak = $status_pajak;
        $syarat->pernyataan_pengurus = $daftar_hitam;

        if($syarat->save()){
            echo "oke";
        }
        
    }

    public function prosesPersyaratanTelsus(Request $request) {
        $tujuan_upload = 'documents';
    
        $file1 = $request->file('maksud_tujuan_bh');
        $maksud_tujuan_bh="maksud_tujuan_bh-".time()."-".$file1->getClientOriginalName();
        $file1->move($tujuan_upload,$maksud_tujuan_bh);
        
        $file2 = $request->file('diagram_rute_bh');
        $diagram_rute_bh="diagram_rute_bh-".time()."-".$file2->getClientOriginalName();
        $file2->move($tujuan_upload,$diagram_rute_bh);

        $file3 = $request->file('bersedia_mengembalikan_bh');
        $bersedia_mengembalikan_bh="bersedia_mengembalikan_bh-".time()."-".$file3->getClientOriginalName();
        $file3->move($tujuan_upload,$bersedia_mengembalikan_bh);

        $file4 = $request->file('daftar_hitam_bh');
        $daftar_hitam_bh="daftar_hitam_bh-".time()."-".$file4->getClientOriginalName();
        $file4->move($tujuan_upload,$daftar_hitam_bh);

        $file5 = $request->file('spektrum_frekuensi_bh');
        $spektrum_frekuensi_bh="spektrum_frekuensi_bh-".time()."-".$file5->getClientOriginalName();
        $file5->move($tujuan_upload,$spektrum_frekuensi_bh);

        $file6 = $request->file('ketidaksanggupan_bh');
        $ketidaksanggupan_bh="ketidaksanggupan_bh-".time()."-".$file6->getClientOriginalName();
        $file6->move($tujuan_upload,$ketidaksanggupan_bh);

        $syarat = new Persyaratan;
        $syarat->perizinan_id = $request->perizinan_id;
        $syarat->dokumen_bh_tujuan = $maksud_tujuan_bh;
        $syarat->dokumen_bh_konfigurasi = $diagram_rute_bh;
        $syarat->pernyataan_bh_bersedia = $bersedia_mengembalikan_bh;
        $syarat->pernyataan_bh_daftarhitam = $daftar_hitam_bh;
        $syarat->pernyataan_bh_spektrum = $spektrum_frekuensi_bh;
        $syarat->pernyataan_bh_ketidaksanggupan = $ketidaksanggupan_bh;
        $syarat->save();
        
    }
}
