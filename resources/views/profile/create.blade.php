@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 justify-center items-center min-h-screen">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-300">
                    Crear Nuevo Usuario
                </h2>

                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="mt-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Nombre
                        </label>
                        <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <div class="mt-4">
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Correo Electrónico
                        </label>
                        <input type="email" name="email" id="email" class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <div class="mt-4">
                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Contraseña
                        </label>
                        <input type="password" name="password" id="password" class="mt-1 p-2 w-full border rounded-md">
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Crear Usuario</button>
                        <a href="{{ route('users.index') }}" class="text-white hover:underline px-4 py-2 rounded">
                            Atrás
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
