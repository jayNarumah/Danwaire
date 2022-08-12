<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpStatus extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    /**
     * Get all of the datas for the EmpStatus
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function datas()//: HasMany
    {
        return $this->hasMany(Data::class, 'emp_status_id', 'id');
    }

}
