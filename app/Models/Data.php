<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $fillable = [
        'ward_id',
        'user_id',
        'qualification_id',
        'emp_status_id',
        'local_gov_id',
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'phone_number',
        'email',
        'dob',
    ];

    protected $casts = [
        'ward_id' => 'integer',
        'user_id' => 'integer',
        'local_gov_id' => 'integer',
        'qualification_id' => 'integer',
        'emp_status_id' => 'integer',
        'dob' => 'date',
    ];
}
