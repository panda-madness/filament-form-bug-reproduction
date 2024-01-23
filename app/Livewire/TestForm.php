<?php

namespace App\Livewire;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;

/**
 * @property Form $form
 */
class TestForm extends Component implements HasForms
{
    use InteractsWithForms;

    public bool $codeRequested = false;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->hidden($this->codeRequested),
                TextInput::make('phone')->required()->hidden($this->codeRequested),
                TextInput::make('code')->required()->visible($this->codeRequested),
            ])
            ->statePath('data');
    }

    public function handle()
    {
        $this->codeRequested = true;
    }

    public function render()
    {
        return view('livewire.test-form');
    }
}
