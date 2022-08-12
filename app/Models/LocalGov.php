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
    /**
     * Get all of the localGovs for the LocalGov
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wards()//: HasMany
    {
        return $this->hasMany(Ward::class, 'local_gov_id', 'id');
    }
    /**
     * Get the state that owns the LocalGov
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state()//: BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}
