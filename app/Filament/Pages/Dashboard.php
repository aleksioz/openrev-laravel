<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Contracts\Support\Htmlable;


class Dashboard extends Page
{
    protected string $view = 'filament.pages.dashboard';
    
    public function getTitle(): string|Htmlable
    {
        return 'Control Panel';
    }

    public static function getNavigationLabel(): string
    {
        return 'Admin Home';
    }
   
}
