<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable = [
        'produit_id',
        'user_id',
        'supprimer',
        'created_at',
        'updated_at',
    ];
    public function produit(){
        return $this->belongsTo(Produit::class, 'produit_id','id');
    }
    public function user(){
        return $this->belongsTo(Produit::class, 'user_id','id');
    }
}
