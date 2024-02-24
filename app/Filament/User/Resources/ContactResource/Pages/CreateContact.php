<?php

namespace App\Filament\User\Resources\ContactResource\Pages;

use App\Filament\User\Resources\ContactResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateContact extends CreateRecord
{
    protected static string $resource = ContactResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['name'] = Auth::user()->name;
        $data['email'] = Auth::user()->email;
        if (Auth::user()->phone_number) {
            $data['phone'] = Auth::user()->phone_number;
        }
        return $data;
    }
}
