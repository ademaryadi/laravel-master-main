<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KodeIzin extends Model
{
    protected $table = 'kode_izin';
    protected $primaryKey = 'id';

    public function jenisIzin() {
        return $this->hasOne(JenisIzin::class, 'jenis_izin_id');
    }    
}
