<h1>Perfil</h1>
<p>Nombre: {{ $user->first_name }}</p>
<p>Apellido: {{ $user->last_name }}</p>
<p>Número Telefónico: {{ $user->phone_number }}</p>
<p>Correo Electrónico: {{ $user->email }}</p>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Cerrar Sesión
</a>