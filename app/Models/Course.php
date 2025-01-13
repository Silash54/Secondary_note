<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    protected $fillable=[
        'title',
        'description'
    ];
    public function level():BelongsTo
    {
        return $this->belongsTo(Level::class);
    }
}
