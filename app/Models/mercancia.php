<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mercancia extends Model
{
    use HasFactory;

    public function tipo_mercancia()
    {
        return $this->hasOne(tipo_mercancia::class);
    }

}
