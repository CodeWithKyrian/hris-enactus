<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EnactusRole extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'enactus_role_user')
            ->using(EnactusRoleUser::class)
            ->withPivot('academic_year_id');
    }
}
