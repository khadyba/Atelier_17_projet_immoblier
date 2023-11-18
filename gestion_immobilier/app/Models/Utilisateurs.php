<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateurs extends Model
{
    public function articles() {
        return $this->hasMany(Article::class);
    }
    public function commentaires() {
        return $this->hasMany(Commentaire::class);
    }
    use HasFactory;
}
