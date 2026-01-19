<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'description',
        'logo_url',
        'link_url',
        'modal_id',
        'active'
    ];
}
