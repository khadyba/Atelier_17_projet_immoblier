<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{

    public function image()
    {
        return $this->hasMany(Image::class);
    }

    public function article()
    {
        return $this->belongsTo(Articles::class);
    }
    use HasFactory;
}
