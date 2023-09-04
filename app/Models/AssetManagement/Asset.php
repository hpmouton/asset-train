<?php

namespace App\Models\AssetManagement;

use App\models\AssetManagement\AssetCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//import models
use Illuminate\Database\Eloquent\Model;
use App\Models\Utilities\Division;
class Asset extends Model
{
    use HasFactory;

    protected $gaurded = [];

    /**
     * Get the category that owns the Asset
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(AssetCategory::class, 'asset_id');
    }

    /**
     * Get the division that owns the Asset
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class, 'division_id');
    }
}
