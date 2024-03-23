<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [

        'nom',
        'description',
        'supprimer',
        'categorie_id',
        'solde',
        'prix',
        // 'nombre',
        'quantite',
        // 'boutique_id',
        'parametre_id',
        'photo1',
        'photo2',
        'favori',
        'vue',
        'like',
        'created_at',
        'updated_at'
    ];
    //photo du categorie debut
    public function getLeProfil1Attribute(){
        //recupper la photo
        return Storage::url($this->attributes['photo1']);
    }
    public function getLeProfil2Attribute(){
        //recupper la photo
        return Storage::url($this->attributes['photo2']);
    }
    public function parametre(){
        return $this->belongsTo(Parametre::class,'parametre_id','id');
    }
    public function categorie(){
        return $this->belongsTo(Categorie::class,'categorie_id','id');
    }
    public function likes(){
        return $this->hasMany(Like::class, 'produit_id','id');
    }
    public function paniers(){
        return $this->hasMany(Panier::class, 'produit_id','id');
    }
}
