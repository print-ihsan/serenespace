<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SereneSpace</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <style>
        .serene-bg { background-color: #f0fdf4; }
    </style>
</head>
<body class="serene-bg min-h-screen">
    @include('layouts.navigation')
    
    <main>
        {{ $slot }}
    </main>
</body>
</html>