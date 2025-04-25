<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Batch extends Model
{
    protected $table = 'batches';


    protected $primaryKey = 'id';


    protected $fillable = ['name', 'course_id', 'start_date'];


    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
