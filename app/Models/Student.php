<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'matric', 'image_path', 'department_id', 'password', 'email', 'status', 'level'];

    public function courses(): BelongsToMany {
        return $this->belongsToMany(Course::class, 'course_student');
    }
}
