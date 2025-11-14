<?php

namespace App\Filament\Resources\Admins\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class AdminsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1) // optional but makes intent clear
            ->components([
                TextInput::make('name')
                    ->rules(['required']) // server-side validation
                    ->validationMessages([
                        'required' => 'Name can not be blank!',
                    ]),
                     

                TextInput::make('email')
                    ->label('Email')
                    ->rules([
                        'required',
                        'email',
                        'unique:admins,email'])
                    ->validationMessages([
                        'required'=>'Email can not be blank!',
                        'email'=>'Please provide a valid email address!',
                        'unique' => 'This email is already registered!',
                    ]),
                    

                TextInput::make('password')
                    ->password()
                    ->rules(['required'])
                    ->validationMessages([
                        'required'=>'Password can not be blank!',
                        ])
                    ->revealable()
                    ->columnSpanFull(),

                // Toggle::make('status')
                //     ->columnSpanFull(),
            ]);
    }
}
