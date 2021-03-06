<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content',
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

}
