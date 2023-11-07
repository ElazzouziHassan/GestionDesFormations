<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminModel extends Model
{
    use HasFactory;
    protected $fillable = ['cin', 'nom', 'date_naissance', 'adresse', 'adresse_email', 'numero_telephone'];
    
    public function formations() {
        return $this->hasMany('formation');
    }
}
