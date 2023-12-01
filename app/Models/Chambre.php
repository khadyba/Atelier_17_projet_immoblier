<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;
    protected $fillable = [
        'articles_id',
        'titre',
        'dimension',
        'image'
    ];

    public function Article()
    {
        return $this->belongsTo(Articles::class);
    }
}
