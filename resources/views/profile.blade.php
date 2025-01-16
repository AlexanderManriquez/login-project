@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center">Perfil</h2>
        <div class="space-y-4">
            <p class="text-sm font-medium text-gray-700">Nombre: <span class="font-normal">{{ $user->first_name }}</span></p>
            <p class="text-sm font-medium text-gray-700">Apellido: <span class="font-normal">{{ $user->last_name }}</span></p>
            <p class="text-sm font-medium text-gray-700">Número Telefónico: <span class="font-normal">{{ $user->phone_number }}</span></p>
            <p class="text-sm font-medium text-gray-700">Correo Electrónico: <span class="font-normal">{{ $user->email }}</span></p>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="mt-6">
            @csrf
            <button type="submit" class="w-full px-4 py-2 font-bold text-black bg-red-600 rounded-md hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-200">Cerrar Sesión</button>
        </form>
    </div>
</div>
@endsection