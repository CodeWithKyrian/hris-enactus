<?php

namespace App\Filament\Resources;

use App\Enums\Semester;
use App\Filament\Resources\MeetingResource\Pages;
use App\Filament\Resources\MeetingResource\RelationManagers;
use App\Models\Meeting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class MeetingResource extends Resource
{
    protected static ?string $model = Meeting::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    protected static ?string $navigationGroup = 'Operations';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Meeting Details')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('location')
                            ->maxLength(255)
                            ->required(),
                        Forms\Components\Select::make('academic_year_id')
                            ->relationship('academicYear', 'name')
                            ->native(false)
                            ->required(),
                        Forms\Components\Select::make('semester')
                            ->native(false)
                            ->options(Semester::class)
                            ->required(),
                        Forms\Components\DatePicker::make('held_on')
                            ->native(false)
                            ->required(),
                        Forms\Components\TimePicker::make('start_time')
                            ->seconds(false)
                            ->required(),
                        Forms\Components\TimePicker::make('end_time')
                            ->seconds(false)
                            ->required(),
                    ]),
                Forms\Components\Section::make('Meeting Minutes')
                    ->schema([
                        Forms\Components\Textarea::make('minutes')
                            ->maxLength(65535)
                            ->hiddenLabel(true)
                            ->rows(8),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('semester'),
                Tables\Columns\TextColumn::make('academicYear.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_time')
                    ->time('h:i A'),
                Tables\Columns\TextColumn::make('end_time')
                    ->time('h:i A'),
                Tables\Columns\TextColumn::make('held_on')
                    ->date()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('semester')
                    ->options(Semester::class),
                Tables\Filters\SelectFilter::make('academic_year_id')
                    ->relationship('academicYear', 'name')
                    ->label('Academic Year'),
            ])
            ->filtersFormColumns(2)
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\AttendeesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMeetings::route('/'),
            'create' => Pages\CreateMeeting::route('/create'),
            'view' => Pages\ViewMeeting::route('/{record}'),
            'edit' => Pages\EditMeeting::route('/{record}/edit'),
        ];
    }
}
