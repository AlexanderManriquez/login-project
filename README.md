# Laravel Vue.js Project

Este es un proyecto de ejemplo que muestra vistas de registro, login y perfil que utiliza Laravel, Vue.js y TailwindCSS.

## Requisitos

- PHP >= 8.0
- Composer
- Node.js >= 14.x
- npm o yarn

## Instalación

Sigue estos pasos para instalar y ejecutar el proyecto localmente.

### 1. Clonar el repositorio

```sh
git clone https://github.com/tu-usuario/tu-repositorio.git
cd tu-repositorio
```

### 2. Instalar dependencias de PHP

composer install

### 3. Configurar el archivo .env

Copia el archivo .env.example a .env y configura tus variables de entorno. Asegúrate de configurar la base de datos correctamente.

cp .env.example .env

Genera la clave de la aplicación:

php artisan key:generate

### 4. Configurar la base de datos

Asegúrate de tener una base de datos configurada y actualiza las variables de entorno en el archivo .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña

### 5. Ejecutar migraciones

php artisan migrate

### 6. Instalar dependencias de Node.js

npm install

### 7. Compilar los activos

Para desarrollo:

npm run dev

Para producción:

npm run build

### 8. Iniciar el servidor de desarrollo

php artisan serve

El servidor de desarrollo se iniciará en <http://localhost:8000>.

Estructura del Proyecto
app: Contiene el código del backend de Laravel.
resources: Contiene las vistas de Blade, archivos CSS y JavaScript.
css/app.css: Archivo CSS principal donde se importa TailwindCSS.
js/app.js: Punto de entrada principal para la aplicación Vue.js.
js/components/: Carpeta donde se almacenan los componentes Vue.
views/: Carpeta donde se almacenan las vistas de Blade.
web.php: Archivo de rutas web de Laravel.
vite.config.js: Archivo de configuración de Vite.
tailwind.config.js: Archivo de configuración de TailwindCSS.

Uso

Autenticación

El proyecto incluye vistas de autenticación básicas (registro, inicio de sesión y perfil de usuario).

Registro: <http://localhost:8000/register>
Inicio de sesión: <http://localhost:8000/login>
Perfil: <http://localhost:8000/profile>
