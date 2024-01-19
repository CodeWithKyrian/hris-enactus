<?php

declare(strict_types=1);


namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class SessionalDue extends Pivot
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    public $casts = [
        'paid_on' => 'date',
    ];

}
