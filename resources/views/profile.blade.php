<h1>Perfil</h1>
<p>Nombre: {{ $user->first_name }}</p>
<p>Apellido: {{ $user->last_name }}</p>
<p>Número Telefónico: {{ $user->phone_number }}</p>
<p>Correo Electrónico: {{ $user->email }}</p>
<a href="{{ route('logout') }}">Cerrar Sesión</a>