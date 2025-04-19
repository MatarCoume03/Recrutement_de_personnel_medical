<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class candidature extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidat_id',
        'offre_emploi_id',
        'statut',
        'date_depot'
    ];

    protected function casts(): array{
        return [
            'date_depot' => 'datetime'
        ];
    }
}