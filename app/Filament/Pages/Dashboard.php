<?php

namespace App\Filament\Pages;

use App\Livewire\ColorWidget;

class Dashboard extends \Filament\Pages\Dashboard
{
    protected static string $view = 'filament.pages.dashboard';

    public function getHeaderWidgets(): array
    {
        return [
            ColorWidget::class
        ];
    }
}
