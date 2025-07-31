<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Avalon Journal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>
<body class="bg-black/50">
    <div class="px-6">
        <nav class="flex justify-between items-center border-b-2 border-white/50 text-[20px] py-4">
            <div>
                <a href="/">
                    <img src="" alt="Avalon Journal" class="font-oswald font-bold hover:text-yellow-400 transition-colors duration-300">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="" class="hover:bg-black/30 hover:text-yellow-400 transition-colors duration-300 rounded p-1">Home</a>
                <a href="" class="hover:bg-black/30 hover:text-yellow-400 transition-colors duration-300 rounded p-1">Blogs</a>
                <a href="" class="hover:bg-black/30 hover:text-yellow-400 transition-colors duration-300 rounded p-1">About</a>
            </div>
            <div class="font-bold">
                <a href="" class="bg-black p-1 rounded-md text-white hover:bg-black/30 hover:text-yellow-400 transition-colors duration-300">Post a Blog</a>
            </div>
        </nav>
        <main class="py-6 font-oswald mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>