<?php

declare(strict_types=1);

namespace App\Filament\Resources\MeetingResource\Pages;

use App\Filament\Resources\MeetingResource;
use App\Models\Meeting;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMeeting extends ViewRecord
{
    protected static string $resource = MeetingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make()
                ->label('Edit Meeting')
                ->icon('heroicon-o-pencil'),
            Actions\Action::make('pdf')
                ->label('Export Meeting')
                ->color('success')
                ->icon('heroicon-o-arrow-up-on-square')
        ];
    }
}
