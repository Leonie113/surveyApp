<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded =[];
    protected $fillable = ['question'];

    public function quiz() {
        return $this->belongsTo(Quiz::class);
    }

    public function answers() {
        return $this->hasMany(Answer::class);
    }

    public function responses() {
        return $this->hasMany(QuizResponses::class);
    }
}
