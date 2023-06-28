<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected  $table = 'medias';

    protected  $fillable = ['link','name','type','id_clients','id_vehicules'];
}