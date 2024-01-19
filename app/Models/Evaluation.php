<?php

namespace App\Models;

use App\Enums\Assessment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Evaluation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'punctuality',
        'attendance',
        'teamwork',
        'communication',
        'professionalism',
        'initiative',
        'productivity',
        'project_engagement',
        'unit_engagement',
        'overall',
        'comments',
        'evaluated_on',
    ];

    protected $casts = [
        'punctuality' => Assessment::class,
        'attendance' => Assessment::class,
        'teamwork' => Assessment::class,
        'communication' => Assessment::class,
        'professionalism' => Assessment::class,
        'initiative' => Assessment::class,
        'productivity' => Assessment::class,
        'project_engagement' => Assessment::class,
        'unit_engagement' => Assessment::class,
        'evaluated_on' => 'date',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
