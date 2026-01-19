<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'position',
        'img_url',
        'linkedin',
        'external',
        'active'
    ];
}
