<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
    use HasFactory;
    protected $fillable = [
        'nom',
        'user_id',
        'categorie',
        'description',
        'image',
        'status',
        'adresse'
    ];
}