<?php

namespace App\Filament\Resources\CarmodelResource\Pages;

use App\Filament\Resources\CarmodelResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCarmodels extends ManageRecords
{
    protected static string $resource = CarmodelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
