<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class message extends Model
{
    use HasFactory;

    protected $fillable =[
        'recruteur_id',
        'candidat_id',
        'contenu',
        'date_envoi'
    ];

    protected function casts(): array{
        return [
            'date_envoi' => 'datetime'
        ];
    } 
}
