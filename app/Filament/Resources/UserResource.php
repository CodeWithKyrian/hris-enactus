<?php

namespace App\Filament\Resources;

use App\Enums\Relationship;
use App\Filament\Imports\UserImporter;
use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $modelLabel = 'Member';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Operations';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Personal Information')
                    ->description('This information is used to identify the member.')
                    ->columns(2)
                    ->icon('heroicon-o-user')
                    ->collapsible()
                    ->schema([
                        Forms\Components\TextInput::make('first_name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('last_name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('other_names')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone_number')
                            ->tel()
                            ->required()
                            ->maxLength(255),
                        Forms\Components\DatePicker::make('dob')
                            ->label('Date of Birth')
                            ->native(false),
                        Forms\Components\TextInput::make('address')
                            ->maxLength(535),
                        Forms\Components\DatePicker::make('recruited_on')
                            ->native(false),
                    ]),

                Forms\Components\Section::make('Emergency Contact')
                    ->description('This information is used to contact the member\'s emergency contact.')
                    ->columns(2)
                    ->icon('heroicon-o-shield-exclamation')
                    ->collapsible()
                    ->relationship('emergencyContact',
                        condition: fn(?array $state): bool => filled($state['name'])
                    )
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone_number')
                            ->tel()
                            ->requiredWith('name')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->maxLength(255),
                        Forms\Components\Select::make('relationship')
                            ->requiredWith('name')
                            ->options(Relationship::class),
                    ]),

                Forms\Components\Section::make('Academic Information')
                    ->description('This information is used to identify the member\'s academic information.')
                    ->columns(2)
                    ->icon('heroicon-o-academic-cap')
                    ->collapsible()
                    ->relationship('academicInfo',
                        condition: fn(?array $state): bool => filled($state['school'])
                    )
                    ->schema([
                        Forms\Components\TextInput::make('school')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('course')
                            ->requiredWith('school')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('year')
                            ->maxLength(255)
                            ->requiredWith('school'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(['first_name', 'last_name', 'other_names']),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dob')
                    ->label('Date of Birth')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('recruited_on')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
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
            RelationManagers\RolesRelationManager::class,
            RelationManagers\UnitsRelationManager::class,
            RelationManagers\ProjectsRelationManager::class,
            RelationManagers\SessionalDuesRelationManager::class,
            RelationManagers\MeetingsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
