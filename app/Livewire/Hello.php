<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title('Hello')]
class Hello extends Component
{
    #[Validate('required', message: 'required')]
    #[Validate('min:2', message: 'min 2 chars')]
    public $name;

    #[Rule('required', message: 'required')]
    #[Rule('min:2', message: 'min 2 chars')]
    public $surname;
    public $fullname;


    public function change()
    {
        $this->validate();
        $this->fullname = "{$this->name} {$this->surname}";
        $this->reset('name', 'surname');
    }

    public function updated($property, $value)
    {
        $this->$property = ucfirst($value);
    }


    public function render()
    {
        return view('livewire.hello');
    }
}
