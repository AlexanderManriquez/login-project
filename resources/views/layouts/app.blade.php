<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login App</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 flex justify-center items-center">
        @yield('content')
    </div>
    @vite('resources/js/app.js')
    
</body>
</html>