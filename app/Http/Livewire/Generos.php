<?php

namespace App\Http\Livewire;

use App\Models\Genres;
use Livewire\Component;

class Generos extends Component
{
    public $teste = 'Página de Gêneros!';

    public $content = '';

    protected $rules = [
        'content' => 'required|min:3|max:255',
    ];

    protected $messages = [
        'content.required' => 'Nome não pode ser nulo!',
        'content.min' => 'Tamanho mínimo 3 dígitos!',
        'content.max' => 'Tamanho máximo 255 dígitos!',
    ];
    public function render()
    {
        $generos = Genres::get();
        
        return view('livewire.generos',compact('generos'));
    }

    public function store()
    {
        $this->validate();
        $content = $this->content;
        Genres::create([
            'name' => $this->content,
        ]);
        session()->flash('message', 'Post successfully updated.');
        $this->content = '';
    }
}
