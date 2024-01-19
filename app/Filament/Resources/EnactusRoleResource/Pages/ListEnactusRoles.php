<?php

namespace App\Filament\Resources\EnactusRoleResource\Pages;

use App\Filament\Resources\EnactusRoleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEnactusRoles extends ListRecords
{
    protected static string $resource = EnactusRoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
