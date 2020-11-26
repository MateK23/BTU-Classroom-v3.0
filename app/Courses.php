<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = [
        'name', 'score', 'status', 'lecturer', 'max_credit', 'credit', 'requirement', 'week_day', 'hour', 'room', 'link', 'group',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
