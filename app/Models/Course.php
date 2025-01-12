<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    protected $fillable=[
        'title',
        'description'
    ];
    public function levels():BelongsToMany
    {
        return $this->belongsToMany(Level::class);
    }
}
