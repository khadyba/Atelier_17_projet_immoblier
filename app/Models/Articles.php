<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use  HasFactory, Notifiable;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
    public function chambre()
    {
        return $this->hasMany(Chambre::class);
    }
    use HasFactory;
    protected $fillable = [
        'nom',
        'user_id',
        'categorie',
        'description',
        'dimension',

        'image',
        'status',
        'espace_verte',
        'adresse'
    ];
}
