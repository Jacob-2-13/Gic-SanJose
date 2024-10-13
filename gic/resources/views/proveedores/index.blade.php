<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Proveedores') }}
        </h2>
    </x-slot>

    <div class="bg-white p-6 rounded-lg shadow-lg">
        <a href="{{ route('proveedores.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Agregar Proveedor</a>

        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2">Nombre</th>
                    <th class="py-2">Teléfono</th>
                    <th class="py-2">Email</th>
                    <th class="py-2">Dirección</th>
                    <th class="py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proveedores as $proveedor)
                    <tr class="border-b">
                        <td class="py-2">{{ $proveedor->nombre }}</td>
                        <td class="py-2">{{ $proveedor->telefono }}</td>
                        <td class="py-2">{{ $proveedor->email }}</td>
                        <td class="py-2">{{ $proveedor->direccion }}</td>
                        <td class="py-2">
                            <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Editar</a>
                            <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
