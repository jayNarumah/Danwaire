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

    /**
     * Get the localGovs that owns the Ward
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function localGovs()//: BelongsTo
    {
        return $this->belongsTo(LocalGov::class, 'local_gov_id', 'id');
    }
    /**
     * Get all of the datas for the Ward
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function datas()//: HasMany
    {
        return $this->hasMany(Data::class, 'ward_id', 'id');
    }
}
