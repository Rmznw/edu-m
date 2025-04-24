<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Payment extends Model
{

    protected $table = 'payments';
    protected $primaryKey = 'id';
    protected $fillable = ['enroll_no', 'paid_date', 'amount',];


    public function enrollment(): BelongsTo
    {
        return $this->belongsTo(enrollment::class);
    }

    public function payment(): HasMany
    {
        return $this->hasMany(Payment::class);
    }


}
