<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DriverResource\Pages;
use App\Filament\Resources\DriverResource\RelationManagers;
use App\Models\Driver;
use App\Models\Staff;
use App\Models\Vehicle;
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
use Illuminate\Support\Str;

class DriverResource extends Resource
{
    protected static ?string $model = Driver::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Admin Management';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('name')
                ->options(Staff::all()->pluck('nama', 'nama'))
                ->live()
                ->afterStateUpdated(function($state, $set, Staff $staff){
                    // Set staffid
                    $stf = $staff->where('nama', '=', $state)->first();
                    $set('staffid', $stf->staff_id);

                    // set slug
                    $patterns = ['/AHMAD/', '/MOHD/', '/MOHD /', '/MUHAMMAD/', '/MOHD./', '/MOHAMAD/', '/ABDUL/', '/BIN/', '/ABU/', '/NOR/'];
                    $state = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $state))));
                    $slug = $state[0];
                    $set('slug', $slug);
                })
                ->searchable()
                ->preload()
                ->required(),
                TextInput::make('staffid')
                    ->maxLength(255),
                TextInput::make('slug')
                    ->label('Nama Samaran')
                    ->required()
                    ->maxLength(20),
                TextInput::make('department')
                    ->placeholder('Bahagian Khidmat Pengurusan')
                    ->default('BAHAGIAN KHIDMAT PENGURUSAN')
                    ->maxLength(150),                  
                TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(15),
                TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                
                
                Select::make('type')
                ->label('Jenis Pergerakan Pemandu')
                ->options([
                        'VIP' => 'VIP',
                        'Bebas' => 'Bebas (Luar dan dalam MADA)',
                        'Dalam' => 'Dalam', 
                        'Sakit' => 'Sakit',
                    ])
                ->default('Bebas'),
                Select::make('vehicle_id')
                    ->label('**Vehicle')
                    ->relationship('vehicles', 'name')
                    ->multiple()
                    ->searchable()
                    ->preload(),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('staffId')
                    ->searchable(),
                Tables\Columns\TextColumn::make('department')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                TextColumn::make('vehicles.name'),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDrivers::route('/'),
            'create' => Pages\CreateDriver::route('/create'),
            'edit' => Pages\EditDriver::route('/{record}/edit'),
        ];
    }
}
