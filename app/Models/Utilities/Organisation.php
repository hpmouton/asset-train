<?php

namespace App\Models\Utilities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//model imports
use App\Models\Utilities\Department;
class Organisation extends Model
{
    use HasFactory;

    protected $gaurded = [];

    /**
     * Get all of the departments for the Organisation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function departments(): HasMany
    {
        return $this->hasMany(Department::class, 'org_id');
    }
}
