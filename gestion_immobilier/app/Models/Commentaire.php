<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }
    public function article()
    {
        return $this->hastoMany(Article::class);
    }
    use HasFactory;
}
