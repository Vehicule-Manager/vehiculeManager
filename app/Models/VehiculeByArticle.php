<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Vehicule;
use App\Article;

class VehiculeByArticle extends Model
{
    use HasFactory;

    protected $table = 'vehicules_by_articles';
    protected $fillable = ['id_vehicules','id_articles'];
}
