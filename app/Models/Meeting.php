<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Meeting extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'semester',
        'academic_year_id',
        'location',
        'minutes',
        'start_time',
        'end_time',
        'held_on',
    ];

    protected $casts = [
        'semester' => \App\Enums\Semester::class,
        'held_on' => 'date',
    ];

    public static function booted(): void
    {
        static::created(function (Meeting $meeting) {
            $meeting->attendees()->sync(User::pluck('id')->toArray());
        });
    }

    public function academicYear(): BelongsTo
    {
        return $this->belongsTo(AcademicYear::class);
    }

    public function attendees(): BelongsToMany
    {
        return $this->belongsToMany(User::class)
            ->using(Attendance::class)
            ->withPivot('status', 'time_in');
    }

}
