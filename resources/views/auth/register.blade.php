@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center">Registrar</h2>
        <form method="post" action="{{ route('register') }}" class="space-y-4">
            @csrf
            <div>
                <label for="first_name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="first_name" id="first_name" placeholder="Nombre" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
            </div>
            <div>
                <label for="last_name" class="block text-sm font-medium text-gray-700">Apellido</label>
                <input type="text" name="last_name" id="last_name" placeholder="Apellido" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
            </div>
            <div>
                <label for="phone_number" class="block text-sm font-medium text-gray-700">Número Telefónico</label>
                <input type="text" name="phone_number" id="phone_number" placeholder="Número Telefónico" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input type="email" name="email" id="email" placeholder="Correo Electrónico" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Contraseña" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
            </div>
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar contraseña" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-200">
            </div>
            <button type="submit" class="w-full px-4 py-2 font-bold text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-200">Registrar</button>
        </form>
    </div>
</div>
@endsection
