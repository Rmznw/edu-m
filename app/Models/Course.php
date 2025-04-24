<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $primaryKey = 'id';
    protected $fillable = ['name','syllabus', 'duration' ];



    protected $casts = [
        'duration' => 'integer'
    ];

    protected static function booted()
    {
        static::saving(function ($course) {
            if ($course->duration < 1 || $course->duration > 3) {
                throw new \Exception("Invalid duration (1-3 months)");
            }
        });
    }



    public function duration()
    {
        return $this->duration. ' Months';

    }


    public function batch(): HasMany
    {
        return $this->hasMany(Batch::class);


    }

    public function course(): HasMany
    {
        return $this->hasMany(Course::class);
    }


    public function student(): HasMany
    {
        return $this->hasMany(Student::class);
    }



}
