<div class="container mx-auto">
<table class="bg-white rounded-lg shadow overflow-hidden">
    <thead class="bg-gray-50 border-b border-gray-200">
        <tr class="text-xs font-medium text-gray-500 uppercase text-left tracking-wider">
            <th class="px-6 py-3">ID</th>
            <th class="px-6 py-3">Nombre</th>
            <th class="px-6 py-3">Body</th>
            <th></th>

        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)

        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->name}}</td>
            <td>{{$post->body}}</td>
            <td><button>Editar</button>
            <button>Eliminar</button></td>
        </tr>

        @endforeach
    </tbody>
</table>
</div>
