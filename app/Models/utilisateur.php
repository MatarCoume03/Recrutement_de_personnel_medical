<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Utilisateur as Authenticatable;
use Illuminate\Notifications\Notifiable;

class utilisateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'mot_de_passe',
        'genre_id'
    ];

    protected $hidden = [
        'mot_de_passe'
    ];

    protected function casts(): array{
        return [
            'mot_de_passe' => 'hashed'
        ];
    }
}