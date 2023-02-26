<?php

namespace App\Models;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'date', 'title', 'type', 'no_options', 'no_answerable_questions', 'no_questions'];

    public function questions(): HasMany {
        return $this->hasMany(Question::class);
    }
}
