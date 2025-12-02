<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class ClientMailHistory extends Page
{
    protected string $view = 'filament.pages.client-mail-history';
    public function getLogs()
    {
        return UserMailHistory::all();
    }
}
