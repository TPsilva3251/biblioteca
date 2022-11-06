<div class="countainer">
    <p>{{ $teste }}</p>
    <form class="form" wire:submit.prevent='store'>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Digite o nome do Gênero" wire:model='content'>
            <button class="btn btn-success">Cadastrar</button>
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="alert alert-error">
            @error('content')
                {{ $message }}
            @enderror
        </div>
    </form>
    <table class="table">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Opções</th>            
          </tr>
        </thead>
        <tbody>
            @foreach ($generos as $genero)
                <tr>
                    <td>{{$genero->name}}</td>
                    <td>
                        <button class="btn btn-warning">Editar</button>
                        <button class="btn btn-danger">Excluir</button>
                    </td>
                </tr>
            @endforeach          
        </tbody>
      </table>
</div>
