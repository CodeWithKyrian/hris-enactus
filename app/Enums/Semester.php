<?php

declare(strict_types=1);


namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum Semester: int implements HasLabel
{
    case RAIN = 1;

    case HARMATTAN = 2;

    public function getLabel(): ?string
    {
        return match ($this) {
            self::RAIN => 'Rain Semester',
            self::HARMATTAN => 'Harmattan Semester',
        };
    }
}
