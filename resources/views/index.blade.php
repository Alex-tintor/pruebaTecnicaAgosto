@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 bg-gray-900">
        <div class="bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-gray-800 text-white">
                <div class="flex justify-between mb-4">
                    <h2 class="text-2xl font-semibold">Lista de Usuarios</h2>
                    <a href="{{ route('users.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Crear Usuario</a>
                </div>
                <div class="bg-gray-600 overflow-x-auto rounded-lg shadow overflow-y-auto relative">
                    <table class="border-collapse table-auto w-full whitespace-no-wrap bg-gray-600 table-striped relative">
                        <thead>
                            <tr class="text-left">
                                <th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-700">
                                    ID
                                </th>
                                <th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-700">
                                    Nombre
                                </th>
                                <th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-700">
                                    Email
                                </th>
                                <th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-700">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="border-b border-gray-200 bg-gray-600">
                                        {{ $user->id }}
                                    </td>
                                    <td class="border-b border-gray-200 bg-gray-600">
                                        {{ $user->name }}
                                    </td>
                                    <td class="border-b border-gray-200 bg-gray-600">
                                        {{ $user->email }}
                                    </td>
                                    <td class="border-b border-gray-200 bg-gray-600">
                                        <a href="{{ route('users.edit', $user->id) }}" class="text-blue-500 hover:underline px-2 py-1 rounded bg-blue-600 hover:bg-blue-700 mr-2">Editar</a>
                                        <form class="inline-block" action="{{ route('users.destroy', $user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:underline px-2 py-1 rounded bg-red-600 hover:bg-red-700">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
