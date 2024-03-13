<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;



class student extends Model
{
    use HasFactory;

    protected $table = 'students';

    /**Student 這個class關聯至Mobile這個class */
    public function mobileRelation(): HasOne
    {
        return $this->hasOne(Mobile::class);
    }

    public function loveRelations(): HasMany
    {
        return $this->hasMany(Love::class);
    }
}
