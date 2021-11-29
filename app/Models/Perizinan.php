<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perizinan extends Model
{
    protected $table = 'perizinan';
    protected $primaryKey = 'id';

    public function kodeIzin()
    {
        return $this->hasOne(KodeIzin::class, 'id', 'kib_id');
    }
}
