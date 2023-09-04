<?php

namespace App\Models\Utilities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//model imports
use App\Models\Utilities\Organisation;
use App\Models\Utilities\Division;
class Department extends Model
{
    use HasFactory;

    protected $gaurded = [];

    /**
     * Get the organisation that owns the Department
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organisation(): BelongsTo
    {
        return $this->belongsTo(Organisation::class, 'org_id');
    }

    /**
     * Get all of the divisions for the Department
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function divisions(): HasMany
    {
        return $this->hasMany(Division::class, 'dep_id');
    }
}
