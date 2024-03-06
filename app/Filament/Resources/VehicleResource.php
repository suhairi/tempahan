<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VehicleResource\Pages;
use App\Filament\Resources\VehicleResource\RelationManagers;
use App\Models\Vehicle;
use App\Models\Carmodel;
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

use App\Models\Driver;

class VehicleResource extends Resource
{
    protected static ?string $model = Vehicle::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Admin Management';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Plate No'),
                Select::make('carmodel')
                    ->relationship('carmodel', 'name'),
                Select::make('location')
                    ->options([
                        'HQ'            => 'HQ',
                        'Wilayah 1'     => 'Wilayah 1',
                        'Worksyop'      => 'Worksyop',
                        'Pengembangan'  => 'Pengembangan'
                    ])
                    ->default('HQ')
                    ->label('Penempatan'),
                Select::make('drivers')
                    ->relationship('driver', 'name')
                    ->createOptionForm([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('slug')
                            ->required()
                            ->maxLength(20),
                        TextInput::make('phone')
                            ->tel()
                            ->required()
                            ->maxLength(15),
                        TextInput::make('email')
                            ->email()
                            ->maxLength(255),
                        TextInput::make('staffId')
                            ->maxLength(255),
                        TextInput::make('bahagian')
                            ->maxLength(255),
                        Select::make('type')
                            ->label('Jenis Pergerakan Pemandu')
                            ->options([
                                'VIP' => 'VIP',
                                'Bebas' => 'Bebas (Luar dan dalam MADA)',
                                'Dalam' => 'Dalam', 
                                'Sakit' => 'Sakit',
                            ]),
                    ])
                    ->searchable()                    
                    ->preload(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
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
            ->actions([
                Tables\Actions\EditAction::make()
                    ->slideOver(),
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
            'index' => Pages\ManageVehicles::route('/'),
        ];
    }
}
