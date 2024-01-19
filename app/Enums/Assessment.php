<?php

declare(strict_types=1);


namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum Assessment : int implements  HasLabel
{
    case Excellent = 5;
    case VeryGood = 4;
    case Good = 3;
    case Fair = 2;
    case Poor = 1;

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Excellent => 'Excellent',
            self::VeryGood => 'Very Good',
            self::Good => 'Good',
            self::Fair => 'Fair',
            self::Poor => 'Poor',
        };
    }

}

