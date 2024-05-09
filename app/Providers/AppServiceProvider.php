<?php

namespace App\Providers;

use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentColor;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        FilamentColor::register([
            'primary' => Color::Sky,
            'brand-primary' => Color::Sky,
            'secondary' => Color::Cyan,
            'tertiary' => Color::Indigo,
            'accent' => Color::Fuchsia,
            'gray' => Color::Slate,
            'brand-gray' => Color::Slate,
            'neutral-light' => Color::hex('#c6c6c6'),
            'neutral-dark' => Color::hex('#333333'),
        ]);
    }
}
