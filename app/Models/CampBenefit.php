<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampBenefit extends Model
{
    use HasFactory;
    protected $table = 'camp_benefits';
    protected $fillable = [
        'camp_id',
        'name'
    ];
}
