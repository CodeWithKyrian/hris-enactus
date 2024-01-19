<?php

declare(strict_types=1);


namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum AttendanceStatus: string implements HasLabel, HasColor
{
    case PRESENT = 'present';
    case LATE = 'late';
    case LATE_WITH_PERMISSION = 'late-with-permission';
    case ABSENT = 'absent';
    case ABSENT_WITH_PERMISSION = 'absent-with-permission';
    case HOLIDAY = 'holiday';
    case INTERNSHIP = 'internship';
    case SICK = 'sick';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::PRESENT => 'Present',
            self::LATE => 'Late',
            self::LATE_WITH_PERMISSION => 'Late with Permission',
            self::ABSENT => 'Absent',
            self::ABSENT_WITH_PERMISSION => 'Absent with Permission',
            self::HOLIDAY => 'Holiday',
            self::INTERNSHIP => 'Internship',
            self::SICK => 'Sick',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::PRESENT => 'success',
            self::LATE, self::LATE_WITH_PERMISSION => 'primary',
            self::ABSENT, self::ABSENT_WITH_PERMISSION => 'danger',
            self::HOLIDAY => 'info',
            self::SICK, self::INTERNSHIP => 'gray',
        };
    }
}
