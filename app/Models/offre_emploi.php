<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class offre_emploi extends Model
{
    use HasFactory;

    protected $fillable = [
        'recruteur_id',
        'titre',
        'description',
        'statut',
        'date_publication'
    ];

    protected function casts(): array{
        return [
            'date_publication' => 'datetime'
        ];
    }
}
