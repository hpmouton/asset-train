<?php

namespace App\Models\Utilities;

use App\models\AssetManagement\Asset;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//model imports
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
}
