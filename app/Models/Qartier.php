<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qartier extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'parametre_id',
        'supprimer',
        'created_at',
        'updated_at',
    ];
}
