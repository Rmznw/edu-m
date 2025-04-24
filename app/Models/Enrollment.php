<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Enrollment extends Model
{
    protected $table = 'enrollments';


    protected $primaryKey = 'id';


    protected $fillable = ['enroll_no', 'batch_id', 'student_id', 'join_date', 'fee'];


    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }


    public function batch(): BelongsTo

    {
        return $this->belongsTo(Batch::class);
    }


    public function payment(): HasMany
    {
        return $this->hasMany(Payment::class);
    }


}
