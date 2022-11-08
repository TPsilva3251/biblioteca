<?php

namespace App\Http\Livewire;

use App\Models\Genres;
use Livewire\Component;
use Livewire\WithPagination;

class Generos extends Component
{
    use WithPagination;

    public $title = 'Gêneros';

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
        $generos = Genres::paginate(6);
        
        return view('livewire.generos',compact('generos'));
    }

    public function store()
    {
        $this->validate();
        $content = $this->content;
        Genres::create([
            'name' => $this->content,
        ]);
        session()->flash('message', 'Registro criado com sucesso.');
        $this->content = '';
    }

    public function edit($id)
    {
        $genero=Genres::find($id);
        dd($genero);
    }

    public function delete($id)
    {
        Genres::where('id', $id)->delete();
        session()->flash('message', 'Registro deletado com sucesso.');
    }
}
