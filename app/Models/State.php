<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    /**
     * Get all of the localGovs for the State
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function localGovs()//: HasMany
    {
        return $this->hasMany(LocalGov::class, 'state_id', 'id');
    }
}
