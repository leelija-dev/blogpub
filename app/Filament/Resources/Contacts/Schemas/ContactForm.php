<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->disabled(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required()
                    ->disabled(),
                TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->disabled(),
                TextInput::make('subject')
                    ->default(null)
                    ->disabled(),
                TextInput::make('message')
                    ->default(null)
                    ->disabled(),
            ]);
    }
    // Remove Save button
    protected function getFormActions(): array
    {
        return []; // hides Save button completely
    }

    // Remove Edit/Delete actions in top-right
    protected function getActions(): array
    {
        return []; // hides Edit/Delete icons
    }
}
