<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kodepos extends Model
{
    protected $table = 'kodepos';
    protected $fillable = [
        'postal_code'
      ];
}
