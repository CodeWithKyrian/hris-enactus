<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Filament\Panel;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements FilamentUser, HasName
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'other_names',
        'email',
        'password',
        'phone_number',
        'address',
        'dob',
        'recruited_on',
        'left_on',
    ];

    protected $appends = [
        'name',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'dob' => 'date',
        'recruited_on' => 'date',
        'left_on' => 'date',
    ];

    public function name(): Attribute
    {
        return Attribute::make(
            get: function (mixed $value, array $attributes) {
                return "{$attributes['first_name']} {$attributes['last_name']} {$attributes['other_names']}";
            },
        );
    }

    public function emergencyContact(): HasOne
    {
        return $this->hasOne(EmergencyContact::class);
    }

    public function academicInfo(): HasOne
    {
        return $this->hasOne(AcademicInfo::class);
    }

    public function evaluations(): HasMany
    {
        return $this->hasMany(Evaluation::class);
    }


    public function sessionalDues(): BelongsToMany
    {
        return $this->belongsToMany(AcademicYear::class, 'sessional_dues', 'user_id', 'academic_year_id')
            ->using(SessionalDue::class)
            ->withPivot('amount', 'paid_on');
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class)
            ->withPivot('joined_on', 'left_on');
    }

    public function departure(): HasOne
    {
        return $this->hasOne(Departure::class);
    }

    public function units(): BelongsToMany
    {
        return $this->belongsToMany(Unit::class)
            ->withPivot('joined_on', 'left_on');
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(EnactusRole::class, 'enactus_role_user')
            ->using(EnactusRoleUser::class)
            ->withPivot('academic_year_id');
    }

    public function meetings(): BelongsToMany
    {
        return $this->belongsToMany(Meeting::class)
            ->using(Attendance::class)
            ->withPivot('status', 'time_in');
    }

    public function getFilamentName(): string
    {
        return $this->first_name;
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }
}
