<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    /**
     * Get the datas associated with the Qualification
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function datas()//: HasMany
    {
        return $this->hasOne(Data::class, 'qualification_id', 'id');
    }
}
