<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalGov extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'state_id'
    ];

    protected $casts = [
        'state_id' => 'integer',
    ];
}
