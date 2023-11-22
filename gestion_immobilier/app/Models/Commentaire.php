<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    public function utilisateur() {
        return $this->belongTo(User::class);
    }
    public function article() {
        return $this->hasMany(User::class);
    }
    use HasFactory;
}
