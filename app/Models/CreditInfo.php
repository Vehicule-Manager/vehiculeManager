<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditInfo extends Model
{
    use HasFactory;

    protected $table = 'credit_infos';

    protected $fillable = [
        'placeOfBirth', 'nationality', 'budgets', 'contract',
        'contractDate', 'banquet', 'professionnalStatus', 'familySituation',
    ];
}
