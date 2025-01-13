<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Level extends Model
{
    protected $fillable=[
        'class',
        'syllabus'
    ];
    public function course():HasMany
    {
        return $this->hasMany(Course::class);
    }
}
