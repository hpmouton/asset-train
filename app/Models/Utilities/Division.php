<?php

namespace App\Models\Utilities;

use App\models\AssetManagement\Asset;
use App\Models\Utilities\Department;
//model imports
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $gaurded = [];

    /**
     * Get all of the assets for the Division
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assets(): HasMany
    {
        return $this->hasMany(Asset::class, 'asset_id');
    }

    /**
     * Get the department that owns the Division
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'dep_id');
    }
}
