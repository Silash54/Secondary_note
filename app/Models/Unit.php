<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable=[
        'name',
        'course_id'
    ];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
