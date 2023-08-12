@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 bg-gray-900">
        <div class="bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-gray-800 text-white">
                <h2 class="text-xl font-semibold mb-4">
                    Editar Usuario
                </h2>
                <div class="bg-gray-600 rounded-lg shadow p-6">
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-400 mb-1">Nombre</label>
                            <input type="text" name="name" id="name" value="{{ $user->name }}" class="w-full rounded-md bg-gray-700 p-2 text-white">
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-400 mb-1">Email</label>
                            <input type="email" name="email" id="email" value="{{ $user->email }}" class="w-full rounded-md bg-gray-700 p-2 text-white">
                        </div>

                        <div class="flex justify-between">
                            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded focus:outline-none focus:shadow-outline-blue active:bg-green-800">
                                Guardar
                            </button>
                            <a href="{{ route('users.index') }}" class="text-blue-500 hover:underline px-4 py-2 rounded">
                                Atrás
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
