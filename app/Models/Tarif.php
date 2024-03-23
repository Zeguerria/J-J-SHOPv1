<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;
    protected $fillable = [
        'prix',
        'supprimer',
        'qartier_id',
        'parametre_id',
        'created_at',
        'updated_at',
    ];
    public function parametre(){
        return $this->belongsTo(Parametre::class,'parametre_id','id');
    }
}
