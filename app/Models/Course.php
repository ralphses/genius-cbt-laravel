<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['department_id','title', 'code', 'unit', 'semester', 'level'];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function students() {
        return $this->belongsToMany(Student::class, 'course_student', 'student_id', 'course_id');
    }
}
