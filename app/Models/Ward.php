<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'local_gov_id'
    ];

    protected $casts = [
        'local_gov_id' => 'integer',
    ];
}
