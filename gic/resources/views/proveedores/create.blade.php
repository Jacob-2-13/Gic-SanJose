<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Proveedor') }}
        </h2>
    </x-slot>

    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Agregar Proveedor</h1>

        <form action="{{ route('proveedores.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-bold">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="w-full border border-gray-300 p-2 rounded-lg" value="{{ old('nombre') }}">
                @error('nombre')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="telefono" class="block text-sm font-bold">Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="w-full border border-gray-300 p-2 rounded-lg" value="{{ old('telefono') }}">
                @error('telefono')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-bold">Email</label>
                <input type="email" name="email" id="email" class="w-full border border-gray-300 p-2 rounded-lg" value="{{ old('email') }}">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="direccion" class="block text-sm font-bold">Dirección</label>
                <input type="text" name="direccion" id="direccion" class="w-full border border-gray-300 p-2 rounded-lg" value="{{ old('direccion') }}">
                @error('direccion')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
        </form>
    </div>
</x-app-layout>
