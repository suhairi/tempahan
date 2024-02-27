<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use Filament\Actions;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    // protected function getCreatedNotification(): ?Notification
    // {
    //     $recipient = auth()->user();

    //     return Notification::make()
    //         ->success()
    //         ->title('User registered in getCreatedNotification')
    //         ->body('The user has been created successfully.')
    //         ->sendToDatabase($recipient);
    // }
}
