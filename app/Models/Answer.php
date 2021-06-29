<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function questions()
    {
        return $this->belongsTo(Question::class);
    }

    public function responses()
    {
        return $this->hasmany(SurveyResponse::class);
    }

}
