<form method="post" action="{{ route('register') }}">
    @csrf
    <input type="text" name="first_name" placeholder="Nombre" required>
    <input type="text" name="last_name" placeholder="Apellido" required>
    <input type="text" name="phone_number" placeholder="Número Telefónico" required>
    <input type="email" name="email" placeholder="Correo Electrónico" required>
    <input type="password" name="password" placeholder="Conttraseña" required>
    <input type="password" name="password_confirmation" placeholder="Confirmar contraseña" required>
    <button type="submit">Registrar</button>
</form>
 
