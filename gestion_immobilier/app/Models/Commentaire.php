<?php

namespace App\Models;

use App\Models\Articles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaire extends Model
{
    public function article()
    {
        return $this->belongsTo(Articles::class);
    }

public function utilisateur()
{
    return $this->belongsTo(User::class);
}

    use HasFactory;
}
