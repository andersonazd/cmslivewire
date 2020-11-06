<div class="container mx-auto">

       <div class="bg-white rounded-lg shadow overflow-hidden max-w-4xl mx-auto p-4 mb-6">
            <div class="mb-3">

                <label for="name" class="form-label mb-2">Nombre</label>
                <input wire:model='name' placeholder="Ingrese un nombre"
                class="form-control">
                @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror

            </div>

            <div class="mb-3">
                <label for="body" class="form-label mb-2">Descripción</label>
                <textarea wire:model='body' cols="30" rows="4" class="form-control" placeholder="Ingrese la descripción"></textarea>
                @error('body') <span class="error text-red-500">{{ $message }}</span> @enderror

            </div>
            @if ($accion == 'store')

            <button wire:click='store' class="btn primary">Crear Post</button>

            @else

            <button wire:click='update' class="btn primary">Actualizar</button>
            <button wire:click='defaul' class="btn bg-red-500 hover:bg-red-700">Cancelar</button>

            @endif

    </div>


<table class="bg-white rounded-lg shadow overflow-hidden max-w-4xl mx-auto">
    <thead class="bg-gray-50 border-b border-gray-200">
        <tr class="text-xs font-medium text-gray-500 uppercase text-left tracking-wider">
            <th class="px-6 py-3">ID</th>
            <th class="px-6 py-3">Nombre</th>
            <th class="px-6 py-3">Body</th>
            <th></th>

        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200">
        @foreach ($posts as $post)

        <tr class="text-sm text-gray-500">
            <td class="px-6 py-4">{{$post->id}}</td>
            <td class="px-6 py-4">{{$post->name}}</td>
            <td class="px-6 py-4">{{$post->body}}</td>
            <td class="px-6 py-4">

                <button wire:click='edit({{$post}})' class="bg-blue-500 hover:bg-blue-700 mb-2 text-white px-4 py-2 rounded w-full">Editar</button>

                <button wire:click='destroy({{$post}})' class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded">Eliminar</button></td>
        </tr>

        @endforeach
    </tbody>
</table>
</div>

endpoint
