<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'libelle',
        'description',
        'supprimer',
        'created_at',
        'updated_at',
        'type_parametre_id'
    ];
    public function type_parametre(){
        return $this->belongsTo(TypeParametre::class, 'type_parametre_id','id');
    }
    public function produits(){
        return $this->hasMany(Produit::class,'parametre_id','id');
    }
    public function tarif(){
        return $this->hasOne(Tarif::class, 'parametre_id','id');
    }
}
