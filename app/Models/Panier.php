<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'produit_id',
        'nombre',
        'prix',
        // 'supprimer',
        'supprimer',
        'created_at',
        'updated_at'
    ];
    public function user (){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function produit (){
        return $this->belongsTo(Produit::class, 'produit_id');
    }
    

}
