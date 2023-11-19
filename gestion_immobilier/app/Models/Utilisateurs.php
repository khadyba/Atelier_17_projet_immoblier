<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateurs extends Model
{

    protected $fillable = ['nom', 'prenom', 'email','motdepasse','Role'];

    public function articles() {
        return $this->hasMany(Article::class);
    }
    public function commentaires() {
        return $this->hasMany(Commentaire::class);
    }
    public function isAdmin()
    {
        return $this->Role === true;
    }
    use HasFactory;
}
