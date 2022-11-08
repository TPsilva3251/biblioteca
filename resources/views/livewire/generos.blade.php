<div>
    <title>{{$title}}</title>
<div class="px-8 bg-white">
    <h1 class="text-5xl text-center">Gêneros</h1>
    <div class="text-center mt-4">
        <hr class="border-solid border-2 border-gray-300">
    </div>
    <br><br><br>
    <form class="form" wire:submit.prevent='store'>
        <div class="px-3 flex">
            <input type="text"
                class=" form-control                    
                    block
                    w-96
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                placeholder="Digite o nome do Gênero" wire:model='content'>
            <button class="bg-green-500 w-32 mx-2 rounded-md text-white">
                Cadastrar
            </button>
        </div>
        @if (session()->has('message'))
            <div class="mx-5 text-green-500">
                {{ session('message') }}
            </div>
        @endif
        <div class="alert alert-error">
            @error('content')
                {{ $message }}
            @enderror
        </div>
    </form>
    <div class="flex flex-col">
        <div class="w-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block w-96 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="ml-2 min-w-full">
                        <thead class="border-b">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                                    Nome
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                                    Opções
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($generos as $genero)
                                <tr class="border-b">
                                    <td
                                        class="text-lg uppercase  text-gray-900 font-bold px-6 py-4 whitespace-nowrap text-center">
                                        {{ $genero->name }}
                                    </td>
                                    <td
                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                                        <button class="bg-yellow-500 px-3 py-1 text-white rounded-md" wire:click.prevent='edit({{ $genero->id }})'>Editar</button>
                                        <button class="bg-red-500 px-3 py-1 text-white rounded-md" wire:click.prevent='delete({{ $genero->id }})'>Excluir</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <div>
                        {{ $generos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
