<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
<<<<<<< HEAD
    public function utilisateur() {
        return $this->belongTo(User::class);
    }
    public function article() {
        return $this->hasMany(User::class);
=======
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }
    public function article()
    {
        return $this->hastoMany(Article::class);
>>>>>>> 278dedfe453a6c379e8b0f09f0b2cbe0d32b556d
    }
    use HasFactory;
}
