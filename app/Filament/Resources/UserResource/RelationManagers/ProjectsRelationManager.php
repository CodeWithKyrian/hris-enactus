<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectsRelationManager extends RelationManager
{
    protected static string $relationship = 'projects';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('joined_on')
                    ->native(false),
                Forms\Components\DatePicker::make('left_on')
                    ->native(false),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('joined_on')
                    ->date(),
                Tables\Columns\TextColumn::make('left_on')
                    ->date(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->label('Attach to New Project')
                    ->preloadRecordSelect()
                    ->form(fn(Tables\Actions\AttachAction $action): array => [
                        $action->getRecordSelect(),
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\DatePicker::make('joined_on')
                                    ->native(false),
                                Forms\Components\DatePicker::make('left_on')
                                    ->native(false)
                            ]),
                    ])
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->modalHeading(
                    fn(Project $project) => "Edit {$this->getOwnerRecord()->first_name}'s involvement in {$project->name}"
                ),
                Tables\Actions\DetachAction::make()
                    ->label('Detach from Project')
                    ->modalHeading(
                        fn() => "Remove {$this->getOwnerRecord()->first_name} from the  Project"
                    )
                    ->modalDescription("Are you sure you want to remove this member from this project?"),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DetachBulkAction::make(),
                ]),
            ]);
    }
}
