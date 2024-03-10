<?php

namespace App\Filament\Resources\DriverResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
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
                Forms\Components\TextInput::make('plateno')
                    ->label('Plate No')
                    ->placeholder('KEE5656')
                    ->live()
                    ->afterStateUpdated(function($state, $set) {
                        $set('plateno', strtoupper($state));
                    })
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('location')
                    ->live()
                    ->afterStateUpdated(function($state, $set) {
                        $set('location', strtoupper($state));
                    })
                    ->required()
                    ->placeholder('Example: Pengembangan')
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('plateno')
            ->columns([
                Tables\Columns\TextColumn::make('plateno')
                    ->label('Plate No')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
