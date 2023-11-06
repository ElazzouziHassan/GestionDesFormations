<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formationModel extends Model
{
    use HasFactory;
    protected $fillable = ['date_debut', 'prix', 'duree_en_mois', 'intitule', 'description', 'administrateur_id'];

    public function administrateur() {
        return $this->belongsTo('administrateur');
    }

    public function etudiants() {
        return $this->hasMany('etudiant');
    }

    public function formateurs() {
        return $this->hasMany('formateur');
    }
}
