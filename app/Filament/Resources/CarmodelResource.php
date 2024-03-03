<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarmodelResource\Pages;
use App\Filament\Resources\CarmodelResource\RelationManagers;
use App\Models\Carmodel;
use App\Models\Carbrand;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarmodelResource extends Resource
{
    protected static ?string $model = Carmodel::class;

    protected static ?string $navigationGroup = 'Admin Management';
    protected static ?string $navigationLabel = 'Car Models';
    protected static ?int $navigationSort = 4;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(20),
                Select::make('carbrands')
                    ->relationship('carbrand', 'name')
                    ->createOptionForm([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(20)
                            ->label('Brand Name'),
                        Select::make('cartype_id')
                            ->relationship('cartype', 'name')
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(20),
                            ])
                            ->searchable()
                            ->preload()
                            ->label('Car Type'),                            
                    ])
                    ->searchable()
                    ->preload()
                    ->label('Car Brand'),                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('cartype.name'),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCarmodels::route('/'),
        ];
    }
}
