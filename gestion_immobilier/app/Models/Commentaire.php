<?php

namespace App\Models;

<<<<<<< HEAD
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
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{

    use HasFactory;
    protected $fillable = [

        'contenue',
        'articles_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
>>>>>>> d0b82fbc19f8f6688fb2805ec6553a82abe9e9ee
}
