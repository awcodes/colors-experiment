<?php

namespace App\Livewire;

use App\BrandColors;
use Awcodes\PresetColorPicker\PresetColorPicker;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Widgets\Widget;

class ColorWidget extends Widget implements HasForms
{
    use InteractsWithForms;

    protected static string $view = 'livewire.color-widget';

    protected int | string | array $columnSpan = 2;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'color' => 'primary'
        ]);
    }

    public function form(Form $form): Form
    {
        return $form->statePath('data')->schema([
            PresetColorPicker::make('color')
                ->withWhite()
                ->withBlack()
                ->colors(BrandColors::get())
                ->extraInputAttributes(['class' => 'branded'])
        ]);
    }

    public function submit(): void
    {
        dd($this->form->getState());
    }
}
