<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'lastname', 'age', 'address', 'email'];


    public function course(): HasMany
    {
        return $this->hasMany(Course::class);
    }

    public function student(): HasMany
    {
        return $this->hasMany(Student::class);
    }
    public function enrollment(): HasMany
    {
        return $this->hasMany(Enrollment::class);
    }

    public function payment(): BelongsTo
    {
        return $this->belongsTo(Payment::class);
    }
}
