<?php

namespace App\Livewire;

use App\BrandColors;
use Awcodes\PresetColorPicker\PresetColorPicker;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Support\Facades\FilamentColor;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Sink extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form->statePath('data')->schema([
            PresetColorPicker::make('color')
                ->withWhite()
                ->withBlack()
                ->colors(BrandColors::get())
        ]);
    }

    public function render(): View
    {
        return view('livewire.sink');
    }
}
