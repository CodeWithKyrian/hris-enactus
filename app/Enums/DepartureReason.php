<?php

declare(strict_types=1);


namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum DepartureReason : string implements HasLabel
{
    case Resignation = 'resignation';
    case Expelled = 'expelled';
    case Graduation = 'graduation';
    case Death = 'death';
    case Other = 'other';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Resignation => 'Resignation',
            self::Expelled => 'Expelled',
            self::Graduation => 'Graduation',
            self::Death => 'Death',
            self::Other => 'Other',
        };
    }
}
