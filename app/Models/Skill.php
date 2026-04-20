<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'icon',
        'name',
        'category',
        'icon_class',
        'icon_color',
        'level',
        'sort_order',
        'status',
    ];
}
