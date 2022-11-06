<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Livros extends Component
{
    public $teste = "Página de livros!";
    public function render()
    {   
        return view('livewire.livros');
    }
}
