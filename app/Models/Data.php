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
        'qualification_id' => 'integer',
        'emp_status_id' => 'integer',
        'dob' => 'date',
    ];

    /**
     * Get the user that owns the Data
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()//: BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }
    /**
     * Get the ward that owns the Data
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ward()//: BelongsTo
    {
        return $this->belongsTo(Ward::class, 'ward_id', 'id');
    }

    /**
     * Get the qualification that owns the Data
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function qualification()//: BelongsTo
    {
        return $this->belongsTo(Qualification::class, 'qualification_id', 'id');
    }
    /**
     * Get the empStatus that owns the Data
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empStatus()//: BelongsTo
    {
        return $this->belongsTo(EmpStatus::class, 'emp_status_is', 'id');
    }
}
