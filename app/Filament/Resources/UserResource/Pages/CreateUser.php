<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Mail\UserCreated;
use App\Models\User;
use Filament\Actions;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Mail;

use Illuminate\Contracts\Queue\ShouldQueue;

class CreateUser extends CreateRecord implements ShouldQueue
{
    protected static string $resource = UserResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        $user = $this->record;

        Mail::to($user)
            // ->send(new UserCreated($user))
            ->queue(new UserCreated($user))
            ;

        return Notification::make()
            ->success()
            ->title('User registered in getCreatedNotification')
            ->body('The user has been created successfully.')
            ->sendToDatabase($user);
        
        
    }
}
