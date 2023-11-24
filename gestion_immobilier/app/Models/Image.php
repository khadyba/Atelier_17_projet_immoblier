<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function chambre()
    {
        return $this->belongsTo(Chambre::class);
    }
    use HasFactory;
}
