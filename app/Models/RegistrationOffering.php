<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RegistrationOffering extends Model
{
    use HasFactory;

    protected $fillable = [
        'active',
        'start_date',
        'end_date',
        'academic_year_id',
        'semester_id',
        'year'
    ];

    /**
     * Get the user that owns the Appointment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function academicYear(): BelongsTo
    {
        return $this->belongsTo(AcademicYear::class);
    }
    
    /**
     * Get the user that owns the Appointment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function semester(): BelongsTo
    {
        return $this->belongsTo(Semester::class);
    }
}
