<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_mercancia extends Model
{
    use HasFactory;

    public function mercancia()
    {
        return $this->belongsTo(mercancia::class);
    }

}
