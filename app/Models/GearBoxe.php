<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GearBoxe extends Model
{
    use HasFactory;

    protected $table = 'gear_boxes';

    protected $fillable = ['name'];
}
