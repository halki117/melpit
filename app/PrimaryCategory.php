<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrimaryCategory extends Model
{
    public function secondaryCategories()
    {
        return $this->hasMany(SecondaryCategory::class);
    }
}
