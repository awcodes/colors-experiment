<?php

namespace App;

use Filament\Support\Facades\FilamentColor;

class BrandColors
{
    public static function get(): array
    {
        $registeredColors = FilamentColor::getColors();

        return [
            'primary' => $registeredColors['brand-primary'],
            'secondary' => $registeredColors['secondary'],
            'tertiary' => $registeredColors['tertiary'],
            'accent' => $registeredColors['accent'],
            'gray' => $registeredColors['brand-gray'],
            'neutral-light' => $registeredColors['neutral-light'],
            'neutral-dark' => $registeredColors['neutral-dark'],
            'bg-gradient-bars-primary' => 'bg-gradient-bars-primary',
            'bg-gradient-bars-secondary' => 'bg-gradient-bars-secondary',
            'bg-gradient-bars-tertiary' => 'bg-gradient-bars-tertiary',
            'bg-gradient-bars-accent' => 'bg-gradient-bars-accent',
            'bg-gradient-bars-gray' => 'bg-gradient-bars-gray',
            'bg-gradient-bars-neutral-light' => 'bg-gradient-bars-neutral-light',
            'bg-gradient-bars-neutral-dark' => 'bg-gradient-bars-neutral-dark',
            'bg-gradient-radial-primary' => 'bg-gradient-radial-primary',
            'bg-gradient-radial-secondary' => 'bg-gradient-radial-secondary',
            'bg-gradient-radial-tertiary' => 'bg-gradient-radial-tertiary',
            'bg-gradient-radial-accent' => 'bg-gradient-radial-accent',
            'bg-gradient-radial-gray' => 'bg-gradient-radial-gray',
            'bg-gradient-radial-neutral-light' => 'bg-gradient-radial-neutral-light',
            'bg-gradient-radial-neutral-dark' => 'bg-gradient-radial-neutral-dark',
        ];
    }
}
