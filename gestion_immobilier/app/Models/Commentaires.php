<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaires extends Model
{
    public function utilisateur() {
        return $this->belongsTo(User::class);
    }
    public function article() {
        return $this->belongsTo(Article::class);
    }
    use HasFactory;
}
