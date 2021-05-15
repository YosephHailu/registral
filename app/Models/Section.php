<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'stream_id',
        'academic_year_id',
        'coordinator_id',
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
    public function stream(): BelongsTo
    {
        return $this->belongsTo(Stream::class);
    }
    
    /**
     * Get the user that owns the Appointment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function coordinator(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * Get the user that owns the Appointment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
