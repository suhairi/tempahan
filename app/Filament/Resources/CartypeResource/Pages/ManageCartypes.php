<?php

namespace App\Filament\Resources\CartypeResource\Pages;

use App\Filament\Resources\CartypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCartypes extends ManageRecords
{
    protected static string $resource = CartypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
