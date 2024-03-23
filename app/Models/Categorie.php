<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [

        'nom',
        'description',
        'affiche',
        // 'boutique_id',
        'supprimer',
        'photo',
        'created_at',
        'updated_at'
    ];
    public function getLeProfilAttribute(){
        //recupper la photo
        return Storage::url($this->attributes['photo']);
    }
    public function produits(){
        return $this->hasMany(Produit::class,'categorie_id','id');
    }
}
