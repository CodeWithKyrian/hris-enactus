<?php

declare(strict_types=1);


namespace App\Models;

use App\Enums\AttendanceStatus;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Attendance extends Pivot
{

    protected $casts = [
        'status' => AttendanceStatus::class,
    ];
}
