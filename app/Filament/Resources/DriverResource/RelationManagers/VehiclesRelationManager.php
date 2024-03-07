<?php

namespace App\Filament\Resources\DriverResource\RelationManagers;

use App\Models\Vehicle;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VehiclesRelationManager extends RelationManager
{
    protected static string $relationship = 'vehicles';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Plate No'),
                TextInput::make('carmodel'),
                Select::make('location')
                    ->options([
                        'HQ'            => 'HQ',
                        'Wilayah 1'     => 'Wilayah 1',
                        'Worksyop'      => 'Worksyop',
                        'Pengembangan'  => 'Pengembangan'
                    ])
                    ->default('HQ')
                    ->label('Penempatan'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('name')
                    ->label('Plate No'),
                TextColumn::make('model')
                    ->label('Model'),
                TextColumn::make('location')
                    ->label('Penempatan'),
                TextColumn::make('drivers.name'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
