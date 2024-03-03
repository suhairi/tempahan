<?php

namespace App\Filament\Resources\CarbrandResource\Pages;

use App\Filament\Resources\CarbrandResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCarbrands extends ManageRecords
{
    protected static string $resource = CarbrandResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
