<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarmodelResource\Pages;
use App\Filament\Resources\CarmodelResource\RelationManagers;
use App\Filament\Resources\CarmodelResource\RelationManagers\VehiclesRelationManager;
use App\Models\Carmodel;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Carbrand;
use App\Models\Cartype;
use Filament\Forms\Components\TextInput;

class CarmodelResource extends Resource
{
    protected static ?string $model = Carmodel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Car Models';

    protected static ?string $navigationGroup = 'Admin Management';
    protected static ?int $navigationSort = 4;

    protected static ?string $pluralModelLabel = 'Car Models';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'green';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->placeholder('Example: Preve, Hiace, X-Trail')
                    ->required()
                    ->maxLength(255),
                Select::make('carbrand_id')
                    ->options(Carbrand::all()->pluck('name', 'id'))
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('cartype_id')
                    ->options(Cartype::all()->pluck('name', 'id'))
                    ->searchable()
                    ->preload()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('carbrand.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cartype.name')
                    ->numeric()
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
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            VehiclesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCarmodels::route('/'),
            'create' => Pages\CreateCarmodel::route('/create'),
            'edit' => Pages\EditCarmodel::route('/{record}/edit'),
        ];
    }
}
