<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Validation\Rules\Password;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\Action::make('changePassword')
                ->form([
                    TextInput::make('new_password')
                        ->label('New Password')
                        ->required()
                        ->password()
                        ->rule(Password::default()),

                    TextInput::make('new_password_confirmation')
                        ->label('New Password Confirmation')
                        ->required()
                        ->password()
                        ->same('new_password')
                        ->rule(Password::default()),
                ])
                ->action(function (array $data) {
                    $this->record->update([
                        'password' => \Hash::make($data['new_password'])
                    ]);
                    $this->notify('success', 'Password changed successfully!');
                })
        ];
    }
}
