<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Energie extends Model
{
    use HasFactory;

    protected $table = 'energies';
    protected $fillable = ['name'];
}
