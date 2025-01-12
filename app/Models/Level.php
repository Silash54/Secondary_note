<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Level extends Model
{
    protected $fillable=[
        'class',
        'syllabus'
    ];
    public function courses():BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }
}
