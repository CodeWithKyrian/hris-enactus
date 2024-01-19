<?php

declare(strict_types=1);


namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum Relationship : string implements HasLabel
{
    case Father = 'father';
    case Mother = 'mother';
    case Brother = 'brother';
    case Sister = 'sister';
    case Uncle = 'uncle';
    case Aunt = 'aunt';
    case Friend = 'friend';
    case Spouse = 'spouse';
    case Partner = 'partner';
    case Son = 'son';
    case Daughter = 'Daughter';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Father => 'Father',
            self::Mother => 'Mother',
            self::Brother => 'Brother',
            self::Sister => 'Sister',
            self::Uncle => 'Uncle',
            self::Aunt => 'Aunt',
            self::Friend => 'Friend',
            self::Spouse => 'Spouse',
            self::Partner => 'Partner',
            self::Son => 'Son',
            self::Daughter => 'Daughter',
        };
    }
}
